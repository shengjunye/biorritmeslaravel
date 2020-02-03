@extends('layouts.master')

@section('pageTitle','Error')

@section('header')
<h1>Biorritmes</h1>
@endsection

@section('content')
<h3>{{$error}}</h3>
@endsection

@section('footer')
<h3>Això és el footer de App Link</h3>
@endsection