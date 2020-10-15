<div class="modal fade" id="actualizar<?=$num?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR USUARIO: {{ $usuario->name }}</h5>
        </div>
        <div class="modal-body">
          <form action="{{ route('usuario.update',$usuario->idUser) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nombre">
                        Nombre
                    </label>
                    <input type="text" name="name" value="{{ $usuario->name }}" {{ old('name') }} class="form-control" placeholder="Nombre...">
                </div>
                <div class="form-group col-md-6">
                    <label for="correo">
                        Correo
                    </label>
                    <input type="email" name="email" value="{{ $usuario->email }}" {{ old('email') }} class="form-control" placeholder="ejemplo@mail.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rol">
                        Rol
                    </label>
                    <select name="rol" id="rol" class="form-control">
                        <option value="">Seleccione...</option>
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}" {{ ($usuario->roles_id == $rol->id)?'selected': '' }} >{{ $rol->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>
