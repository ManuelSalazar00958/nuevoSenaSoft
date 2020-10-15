<div class="modal fade" id="registrar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">REGISTRAR NUEVA FACTURA</h5>
        </div>
        <div class="modal-body">

          <form action="" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fecha">
                        Fecha
                    </label>
                    <input type="Date" name="fecha" value="{{ old('fecha') }}" class="form-control" placeholder="Nombre...">
                </div>
                <div class="form-group col-md-6">
                    <label for="cliente">
                        Cliente
                    </label>
                    <input type="text" name="cliente" value="{{ old('cliente') }}" class="form-control" placeholder="ejemplo@mail.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rol">
                        Estado
                    </label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($estados as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">REGISTRAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>
