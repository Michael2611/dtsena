@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1 class="m-0">Canales creados</h1>
                <br>
                <div class="card">
                    <div class="card-header">Canales registrados</div>
                    <div class="card-body">
                        <table class="table ">
                            <thead>
                                <th>#</th>
                                <th>Canal</th>
                                <th>Visibilidad</th>
                                <th>Fecha de registro</th>
                                <th>Fecha de actualización</th>
                                <th>---</th>
                            </thead>
                            <tbody>
                                @foreach ($canales as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->c_nombre}}</td>
                                        <td>{{$item->c_estado_vista}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <div class="d-flex gap-10">
                                                <button class="btn btn-primary btn-sm">Dispositivos</button>
                                                <button class="btn btn-info btn-sm">Editar</button>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                                <button class="btn btn-secondary btn-sm">Ver</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
