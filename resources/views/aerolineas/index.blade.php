@extends('layouts.app')
@section('content') 
<div class="container">
    <div class="row">
      <div class="col">
      </div>
    </div>
</div> <center>
<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Documento</th>
      @can ('EditAerolineas')
      <th scope="col">Opcion 1</th>
      @endcan
      @can('DeleteAerolineas')
      <th scope="col">Opcion 2</th>
      @endcan
    </tr>
     @foreach($avionV as $datosaero) 
    <tr>
      <th>{{$datosaero->id}}</th>
      <td> <a href="/aerolineas/{{$datosaero->id}}"> {{$datosaero->name}}</a></td>
      <td>{{$datosaero->Nit}}</td>

      @can ('EditAerolineas')
      <td><a href="/aerolineas/{{$datosaero->id}}/edit"class="btn btn-warning">Modificar</a></td> 
      @endcan

      @can('DeleteAerolineas')
      <td><a href="/aerolineas/{{$datosaero->id}}/delete"class="btn btn-warning">Borrar</a></td> 
      @endcan
      
    </tr>
    @endforeach
  </thead>
</table>  
</center>
@can('CreateAerolineas')
<a href="/aerolineas/create"class="btn btn-success">Nuevo Proyecto</a>
@endcan
@endsection
 