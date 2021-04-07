@extends('layout')

@section('title', 'Editar proyecto')

@section('content')
    <h1>Editar proyecto nuevo</h1>

    @include('partials.validaciones')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        <table>
            @include('projects._form', ['btnText' => 'Actualizar'])
        </table>
    </form>
@endsection
