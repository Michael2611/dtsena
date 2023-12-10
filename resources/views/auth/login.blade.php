@extends('layouts.app')
@section('content')
<style>
    body{
        background-image: url('img/fondo.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: top;
    }
</style>
<div class="login-box">
    <!-- /.login-logo -->

    <div class="card card-outline card-primary mt-4">
      <div class="card-header text-center">
        <a href="/" class="h1"><b>DT</b>SENA</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Inicio de sesión </p>
        <form action="{{URL::to('/login-user')}}" method="post">
            @csrf
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
          <div class="row justify-content-end">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block mb-2">Ingresar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1 text-center">
          <a href="#">Recuperar contraseña</a>
        </p>
        <p class="mb-0 text-center">
          <a href="{{route('auth.registro')}}" class="text-center">Registrar nuevo usuario</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection
