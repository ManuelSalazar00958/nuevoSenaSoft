@extends('layouts.layout')
@section('content')
<div class="card">
    {{-- MENSAJE QUE RETORNA EL CONTROLADOR AL ELIMINAR UN FUNCIONARIO --}}
    @if (session('mensaje'))
    <div class="alert alert-primary text-center text-primary alert-dismissible fade show" id="alert" role="alert">
        <h4>{{ session ('mensaje')}}</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
   @endif

   {{-- ERROR DE VALIDACION DE CAMPOS Y MUESTRA UNA ALERTA DE QUE HAY CAMPOS VAVIOS --}}
   @if ($errors->any())
    <div class="alert alert-success bg-danger text-white text-sm-center" id="alert" role="alert">
        <h4>ERROR AL REGISTAR, HAY CAMPOS VACIOS REVISA EL FORMULARIO</h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
     @endif
   <div class="card-header">
       <div class="row d-flex justify-content-around align-items-center">
           <div class="col-6">
               <h4 class="card-title">USUARIOS</h4>
           </div>
           <div class="col-6 d-flex justify-content-end">
               <button class="btn btn-primary fa-pull-right" data-toggle="modal" data-target="#registrar">
                <i class="icofont-contact-add" style="font-size: 40px"></i>
               </button>
               @include('Usuarios.createUsuario')
           </div>
       </div>
   </div>
   <div class="card-body table-responsive">
       <table class="table table-striped">
           <thead>
             <tr>
               <th scope="col">NOMBRE</th>
               <th scope="col">CORREO</th>
               <th scope="col">ROL</th>
               <th scope="col">ACCIONES</th>
             </tr>
           </thead>
           <tbody>
               <?php $num=0; ?>
               @foreach ($usuarios as $usuario)
                   <?php $num++; ?>
                   <tr>
                       <td>{{ $usuario->name }}</td>
                       <td>{{ $usuario->email }}</td>
                       <td>{{ $usuario->nombreR }}</td>
                       <td>
                           <button type="button" class="btn btn-sm btn-icon btn-round btn-primary" data-toggle="modal" data-target="#actualizar<?=$num?>">
                                <i class="icofont-edit"></i>
                           </button>
                           <button type="button" class="btn btn-sm btn-icon btn-round btn-danger" data-toggle="modal" data-target="#eliminar<?=$num?>">
                                <i class="icofont-ui-delete"></i>
                           </button>
                       </td>
                        @include('Usuarios.updateUsuario')
                        @include('Usuarios.deleteUsuario')
                   </tr>
               @endforeach
           </tbody>
         </table>
   </div>
</div>
@endsection
