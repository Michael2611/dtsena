@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: url('img/fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
        }
    </style>

   <div class="d-flex justify-content-center align-items-center mt-4">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>DT</b>SENA</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Registrar nuevo usuario</p>

                <form action="{{route('auth.registro-user')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Correo electronico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="confirm-pass" placeholder="Confirmar contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    Acepto los<a href="#"> terminos</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{URL::to('/login')}}" class="text-center">Ya tengo cuenta</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
   </div>
@endsection
