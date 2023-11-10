@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="card">
                    <div class="card-header">Actualizar canal</div>
                    <form action="{{route('canal.actualizar', $canal->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="c_nombre">Nombre canal</label>
                                <input type="text" class="form-control" name="c_nombre" id="c_nombre"
                                    placeholder="Ingrese nombre del canal a crear" value="{{$canal->c_nombre}}">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="c_estado_vista" id="radio1"
                                        value="publico" {{$canal->c_estado_vista == "publico" ? 'checked' : ''}}>
                                    <label for="radio1" class="custom-control-label">Público</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" name="c_estado_vista" id="radio2"
                                        value="privado" {{$canal->c_estado_vista == "privado" ? 'checked' : ''}}>
                                    <label for="radio2" class="custom-control-label">Privado</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
