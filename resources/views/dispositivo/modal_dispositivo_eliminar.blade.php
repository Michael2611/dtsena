@if ($dispositivos->count()>0)
<div class="modal fade" id="modalDispositivoEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea borrar el dispositivo?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('dispositivo.eliminar', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Si</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
