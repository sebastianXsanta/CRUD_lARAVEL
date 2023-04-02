@extends('layouts.app')
@section('content') 
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Modificar vuelo {{$ConsultaV->id}} </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form">
                <form action="/aerolineas/vuelos/{{$ConsultaV->id}}" method="post">
                @csrf
                @method('put')
                    <div class="form group">
                    <label for="">cuidad de Partida</label>
                        <input type="text" class="form-control" name="cuidad_de_PartidaA" id="cuidad_de_PartidaA"><br>
                        <label for="">cuidad de destino</label>
                        <input type="text" class="form-control" name="cuidad_de_destinoA" id="cuidad_de_destinoA"><br>
                        <label for="">Numero de pasajeros</label>
                        <input type="number" class="form-control" name="Numero_de_pasajerosA" id="Numero_de_pasajerosA"><br>
                        <label for="">novedad del vuelo</label>
                        <input type="text" class="form-control" name="novedad_del_vueloA" id="novedad_del_vueloA"><br>
                        <label for="">hora y fecha de partida</label>
                        <input type="dateTime-local" class="form-control" name="hora_y_fecha_de_partidaA" id="hora_y_fecha_de_partidaA"><br>
                        <label for="">hora y fecha de llegada</label>
                        <input type="dateTime-local" class="form-control" name="hora_y_fecha_de_llegadaA" id="hora_y_fecha_de_llegadaA"><br>
                    </div>
                    <button type="submit" class="btn btn-success">Modificar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
