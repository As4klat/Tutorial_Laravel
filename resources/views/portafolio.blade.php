@extends('layout')

@section('title', 'portafolio')

@section('content')
    <h1>Esto es el Portafolio</h1>

<ul>
    @forelse ($portafolio as $portafolioitem)
        <li>{{ $portafolioitem['title'] }}</li>
    @empty
        <p>No hay proyectos nuevos</p>
    @endforelse
</ul>
    
    
@endsection