<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Asignar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AsignarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evento = Evento::all();
        $usuario = User::all();
        $asignar = Asignar::all();
        $data = compact('evento','usuario','asignar');
        //dd($data);
        return view('asignar-evento.index')->with($data);
    }

    public function guardarDatos(Request $request)
    {
        $id_evento = $request->input('id_evento');
        $id_usuario = $request->input('id_usuario');
        
        // Verificar si ya existe una entrada para este usuario en la tabla Asignar
        $existente = Asignar::where('id_usuario', $id_usuario)->first();

        if ($existente) {
            // Si ya existe, actualiza la entrada existente
            $existente->update(['id_evento' => $id_evento]);
        } else {
            // Si no existe, crea una nueva entrada
            $evento = new Asignar();
            $evento->id_usuario = $id_usuario;
            $evento->id_evento = $id_evento;
            $evento->save();
        }

        // Actualizar la tabla de eventos con el ID de usuario seleccionado
        User::where('name', $id_usuario)->update(['cod_evento' => $id_evento]);

        return redirect()->route('asignar-evento.index')->with('success', 'Datos guardados correctamente');
    }

    /**
     * Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignar = new Asignar();
        $asignar->id_usuario = $request->input('usuario');
        $asignar->id_evento = strtoupper($request->input('nom_evento'));
        
        dd($asignar);
        $asignar->save();
        return redirect()->back()->with('eliminar','ok');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('asignar-evento.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        // Obtener la asignación a eliminar
        $asignar = Asignar::find($id);
        // Obtener el name del usuario asociado a través de la asignación
        $usuarioId = $asignar->id_usuario;
        // Actualizar la columna 'cod_evento' en la tabla 'Users' a null
        User::where('name', $usuarioId)->update(['cod_evento' => NULL]);
        // Eliminar la entrada en la tabla 'Asignar'
        $asignar->delete();

        return redirect()->route('asignar-evento.index');
    }
}
