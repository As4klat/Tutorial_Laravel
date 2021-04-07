@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear proyecto nuevo</h1>

    @include('partials.validaciones')

    <form method="POST" action="{{ route('projects.store') }}">
        <table>
            @include('projects._form', ['btnText' => 'Guardar'])
        </table>
    </form>
@endsection
