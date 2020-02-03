@extends('layouts.master')

@section('pageTitle','Pàgina Index')

@section('header')
<h1>Biorritmes</h1>
@endsection

@section('content')
<p>La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha comprobado estadísticamente que la energía física se comporta cíclicamente en periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en 33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en una fase positiva, durante la cual las energías y las capacidades son altas</p>
<form action="store" method="get">
  <div class="form-group">
    <label for="usuari">Usuario</label>
    <input type="text" class="form-control" id="usuari" name="usuari">
  </div>
  <div class="form-group">
    <label for="dataNaixement">Data de Naixement</label>
    <input type="date" class="form-control" id="dataNaixement" name="dataNaixement">
  </div>
  <button type="submit" class="btn btn-primary">Calcula el teu biorritme!</button>
</form>
@endsection

@section('footer')
<h3>Això és el footer de App Link</h3>
@endsection