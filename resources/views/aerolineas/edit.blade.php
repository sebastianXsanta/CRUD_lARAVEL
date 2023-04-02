@extends('layouts.app')
@section('content') 
<div class="container">
@can('EditAerolineas')
    <div class="row">
        <div class="col">
            <h1>Modificar proyectos </h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <div class="form">
                <form action="/aerolineas/{{$idConsultadoS->id}}" method="post">
                @csrf
                @method('put')
                    <div class="form group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nameS" id="nameS"><br>
                        <label for="">Documento</label>
                        <input type="text" class="form-control" name="docS" id="docS"><br>
                    </div>
                    <button type="submit" class="btn btn-success">Success</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <h1>Acceso Denegado</h1>
    @endcan
</div>
@endsection
