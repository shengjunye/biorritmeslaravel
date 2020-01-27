@extends('layouts.master')

@section('pageTitle','Pàgina Index')

@section('header')
<h1>Biorritmes</h1>
@endsection

@section('content')
<p>La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha comprobado estadísticamente que la energía física se comporta cíclicamente en periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en 33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en una fase positiva, durante la cual las energías y las capacidades son altas</p>
<form>
  <div class="form-group">
    <label for="usuari">Usuario</label>
    <input type="email" class="form-control" id="usuariId" name="usuari">
  </div>
  <div class="form-group">
    <label for="contrasenya">Contraseña</label>
    <input type="password" class="form-control" id="contrasenyaId" name="contrasenya">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

@section('footer')
<h3>Això és el footer de App Link</h3>
@endsection