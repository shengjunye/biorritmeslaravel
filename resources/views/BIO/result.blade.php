@extends('layouts.master')

@section('pageTitle','Error')

@section('header')
<h1>Biorritmes</h1>
@endsection

@section('content')

<h3>Biorritme d'en : {{$usuari}}</h3>
<h3>Data de Naixement: {{$dataNaixement}}</h3>
<p>FÍSIC: {{$percentatgeFisic}}%</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$fisic}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

<p>EMOTIU: {{$percentatgeEmocional}}%</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$emocional}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

<p>INTELECTUAL: {{$percentatgeIntelectual}}%</p>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: {{$intelectual}}%" aria-valuenow=o aria-valuemin="0" aria-valuemax="100"></div>
</div>

@endsection

@section('footer')
<h3>Això és el footer de App Link</h3>
@endsection