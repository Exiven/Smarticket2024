<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cod_usuario' => 'LAR',
            'cod_evento' => 'JLGXV',
            'name' => 'LUIS ALBERTO REYES CHAGUA',
            'dni' => '70752346',
            'email' => 'alrys1995@gmail.com',
            'password' => bcrypt('123456789*'),
            'est_usuario' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ])->assignRole('superadmin');

        User::create([
            'cod_usuario' => 'JDP',
            'name' => 'JOSE DE LOS SANTOS PAREDES',
            'dni' => '13345478',
            'email' => 'jdelossantos@exiven.com',
            'password' => bcrypt('123456789*'),
            'est_usuario' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ])->assignRole('administrador');

        User::create([
            'cod_usuario' => 'DNS',
            'name' => 'DAVID NAJARRO SIMON',
            'dni' => '12345478',
            'email' => 'dnajarro@exiven.com',
            'password' => bcrypt('123456789*'),
            'est_usuario' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ])->assignRole('acreditador');

        User::create([
            'cod_usuario' => 'FCC',
            'name' => 'FULVIO CORDANO CORDANO',
            'dni' => '19345478',
            'email' => 'fcordano@exiven.com',
            'password' => bcrypt('123456789*'),
            'est_usuario' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ])->assignRole('validador');
    }
}
