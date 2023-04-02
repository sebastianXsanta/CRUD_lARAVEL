@extends('layouts.app')
@section('content')
@can('CreateAerolineas')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>VUELOS</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form">
                <form action="/aerolineas" method="post">
                    @csrf
                    <div class="form group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"><br>
                        <label for="">Documento</label>
                        <input type="text" class="form-control" name="doc" id="doc"><br>
                    </div>
                    <button type="submit" class="btn btn-success">Success</button>
                </form>
            </div>
        </div>
        @else
        <h1>Acceso Dengado</h1>
    </div>
</div>
@endcan
@endsection