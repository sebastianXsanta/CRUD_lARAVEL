@extends('layouts.app') 
@section('content')
        <div class="row">
        <div class="col">
            <h2>¿Desea Eliminar El Vuelo:{{$borrarvuelos->cuidad_de_Partida}} - {{$borrarvuelos->cuidad_de_destino}}</h2>
            </div>
        </div>
    </div>
    <form action="/aerolineas/vuelos/{{$borrarvuelos->id}}" method="post">
    @csrf 
    @method('delete')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</div>
</form>
@endsection
