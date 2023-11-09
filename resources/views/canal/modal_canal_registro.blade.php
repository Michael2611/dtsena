<!-- Modal -->
<div class="modal fade" id="modalCanalRegistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Canal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{URL::to('/canal-registro')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="c_nombre">Nombre canal</label>
                        <input type="text" class="form-control" name="c_nombre" id="c_nombre"
                            placeholder="Ingrese nombre del canal a crear">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="c_estado_vista" id="radio1"
                                value="publico">
                            <label for="radio1" class="custom-control-label">Público</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" name="c_estado_vista" id="radio2"
                                value="privado" checked>
                            <label for="radio2" class="custom-control-label">Privado</label>
                        </div>
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
