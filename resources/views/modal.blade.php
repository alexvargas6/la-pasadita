<div class="modal fade" id="modal-{{ $comida->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('upFood') }}" method="post">
            <div class="modal-content">
                <div class="mb-3">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> {{ $comida->comida }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name1" class="form-label">Nombre</label>
                            <input type="hidden" class="form-control" value="{{ $comida->id }}" name="id">
                            <input type="text" class="form-control" placeholder="Frijo con puerco, but negro, etc."
                                value="{{ $comida->comida }}" name="comida">
                        </div>
                        <div class="form-group">
                            <label for="precio1" class="form-label">Precio</label>
                            <input type="number" name="precio" class="form-control" value="{{ $comida->precio }}"
                                placeholder="$0.00">
                        </div>
                        <div class="form-group">
                            <label for="precio1" class="form-label">Precio media</label>
                            <input type="number" name="media" class="form-control" value="{{ $comida->media }}"
                                placeholder="$0.00">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
