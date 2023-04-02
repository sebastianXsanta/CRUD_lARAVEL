@extends('layouts.app')
@section('content')
<center>
<div class="contanier">
@can('DeleteAerolineas')
    <div class="row">
        <div class="col">
        <h2>¿Desea Eliminar a {{$deleteA->name}}?</h2>
        </div>
            </div>
        </div>
    </div>
    </center>
    <form action="/aerolineas/{{$deleteA->id}}" method="post">
    @csrf 
    @method('delete')
    <center><button type="submit" class="btn btn-danger">Eliminar</button></center>
</div>
@else
<h1>Acceso Denegado</h1>
</form>
@endcan
@endsection
