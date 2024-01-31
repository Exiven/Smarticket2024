@extends('adminlte::page')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">REGISTRAR USUARIO</h3>
                    
                    </div>
                    
                {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-6 col-form-label text-md-end">{{ __('NOMBRES Y APELLIDOS') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus placeholder="NOMBRES Y APELLIDOS" oninput="this.value = this.value.toUpperCase();">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('DNI') }}</label>


                                <input id="dni" type="number" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="off" autofocus placeholder="DNI">

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('CORREO') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="CORREO">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('CONTRASEÑA') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="CONTRASEÑA">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-end">{{ __('CONFIRMAR CONTRASEÑA') }}</label>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMAR CONTRASEÑA">
  
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('REGISTRAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @else
                    @endif
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "Usuario Registrado",
        text : "Cerrar sesion e ingresar nuevo usuario",
        confirmButtonColor: '#28a745',
        showConfirmButton: true,
        timer: 3000
    });
</script>
@endif
@stop