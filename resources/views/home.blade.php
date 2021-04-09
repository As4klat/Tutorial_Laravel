@extends('layout')

@section('title', 'home')

@section('content')
    <h1>Esto es el home</h1>
    @auth
    <p>{{ auth()->user()->name }} bienvenido!</p>
    @endauth
@endsection
