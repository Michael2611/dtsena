<!-- Modal -->
<div class="modal fade" id="modalDispositivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dispositivo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('dispositivo.registro')}}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="d_id_canal" id="d_id_canal"
                        value="{{$canal->id}}" readonly>
                    <div class="form-group">
                        <label for="c_nombre">Dispositivo</label>
                        <input type="text" class="form-control" name="d_nombre" id="d_nombre"
                            placeholder="Ingrese nombre del dispositivo o sensor" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
