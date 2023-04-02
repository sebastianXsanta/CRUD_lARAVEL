@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>VUELOS</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form">
            <form action="/aerolineas/{{$VuelosJ->id}}"method="post">
                    @csrf
                    <div class="form group">
                        <label for="">cuidad de Partida</label>
                        <input type="text" class="form-control" name="cuidad_de_PartidaS" id="cuidad_de_PartidaS"><br>
                        <label for="">cuidad de destino</label>
                        <input type="text" class="form-control" name="cuidad_de_destinoS" id="cuidad_de_destinoS"><br>
                        <label for="">Numero de pasajeros</label>
                        <input type="number" class="form-control" name="Numero_de_pasajerosS" id="Numero_de_pasajerosS"><br>
                        <label for="">novedad del vuelo</label>
                        <input type="text" class="form-control" name="novedad_del_vueloS" id="novedad_del_vueloS"><br>
                        <label for="">hora y fecha de partida</label>
                        <input type="dateTime-local" class="form-control" name="hora_y_fecha_de_partidaS" id="hora_y_fecha_de_partidaS"><br>
                        <label for="">hora y fecha de llegada</label>
                        <input type="dateTime-local" class="form-control" name="hora_y_fecha_de_llegadaS" id="hora_y_fecha_de_llegadaS"><br>
                    </div>
                    <button type="submit" class="btn btn-success">Registar</button>
            </div>
        </div>
    </div>
 </div>
</form>
@endsection