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
                                <?php $i=1;?>
                                @foreach ($canales as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->c_nombre}}</td>
                                        <td>{{$item->c_estado_vista}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a class="btn btn-primary btn-sm" href="{{route('canal.info', $item->id)}}"><i class="fas fa-desktop"></i> Dispositivos</a>
                                                <a class="btn btn-info btn-sm" href="{{route('canal.editar', $item->id)}}"><i class="far fa-edit"></i> Editar</a>
                                                <form action="{{route('canal.eliminar', $item->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input readonly type="hidden" name="d_id_canal" id="d_id_canal" value="{{$item->id}}">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-ban"></i> Eliminar</button>
                                                </form>
                                                <button class="btn btn-secondary btn-sm"><i class="far fa-eye"></i> Ver</button>
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
