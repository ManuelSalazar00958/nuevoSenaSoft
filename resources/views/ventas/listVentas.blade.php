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
               <h4 class="card-title">Facturas</h4>
           </div>
           <div class="col-6 d-flex justify-content-end">
               <button class="btn btn-primary fa-pull-right" data-toggle="modal" data-target="#registrar">
                <i class="icofont-contact-add" style="font-size: 40px"></i>
               </button>
               @include('ventas.create')
           </div>
       </div>
   </div>
   <div class="card-body table-responsive">
       <table class="table table-striped">
           <thead>
             <tr>
               <th scope="col">FECHA</th>
               <th scope="col">CLIENTE</th>
               <th scope="col">CODIGO</th>
               <th scope="col">ESTADO</th>
               <th scope="col">VENDEDOR</th>
             </tr>
           </thead>
           <tbody>

           </tbody>
         </table>
   </div>
</div>
@endsection
