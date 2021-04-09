@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>Ultima edición {{ $project->updated_at->diffForHumans() }}</p>
@auth
    <a href="{{ route('projects.edit', $project) }}">Editar</a>

    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method('DELETE')
        <br><button>Eliminar</button>
    </form>
@endauth

@endsection
