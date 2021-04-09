@extends('layout')

@section('title', 'portafolio')

@section('content')

    <h1>Esto es el Portafolio</h1>
@auth
    <a href="{{ route('projects.create') }}">Crear nuevo proyecto</a>
@endauth


    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <p>No hay proyectos nuevos</p>
        @endforelse
    </ul>

{{ $projects->links() }}

@endsection
