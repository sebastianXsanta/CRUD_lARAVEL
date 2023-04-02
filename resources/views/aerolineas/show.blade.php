@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Agregar Vuelo  {{$aerov->name}} </h1>
            <table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Cuidad de Partida</th>
      <th scope="col">Cuidad de Destino</th>
      <th scope="col">Numero de Pasajeros</th>
      <th scope="col">Novedad del Vuelo</th>
      <th scope="col">Hora y Fecha De Partida</th>
      <th scope="col">Hora y Fecha De Llegada</th>
      <th scope="col">Opcion 1</th>
      <th scope="col">Opcion 2</th>
    </tr>
  </thead>
  <tbody>
@foreach ($aerov->Jsvuelos as $proyectoVuelo)
    <tr>
      <th>{{$proyectoVuelo->id}}</th>
      <td>{{$proyectoVuelo->cuidad_de_Partida}}</td>
      <td>{{$proyectoVuelo->cuidad_de_destino}}</td>
      <td>{{$proyectoVuelo->Numero_de_pasajeros}}</td>
      <td>{{$proyectoVuelo->novedad_del_vuelo}}</td>
      <td>{{$proyectoVuelo->hora_y_fecha_de_partida}}</td>
      <td>{{$proyectoVuelo->hora_y_fecha_de_llegada}}</td>
      <td><a href="/aerolineas/vuelos/{{$proyectoVuelo->id}}/edit"class="btn btn-warning">Modificar</a></td>
      <td><a href="/aerolineas/vuelos/{{$proyectoVuelo->id}}/delete"class="btn btn-warning">Borrar</a></td> 
    </tr>
    @endforeach
  </tbody>
</table> 
<a href="/aerolineas/{{$aerov->id}}/create"class="btn btn-warning">Agregar Vuelo</a>
        </div>
    </div>
</div>
@endsection
