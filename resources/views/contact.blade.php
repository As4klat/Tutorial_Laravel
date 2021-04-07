@extends('layout')

@section('title', 'contact')

@section('content')
    <h1>Esto es el Contact</h1>

    <form method="POST" action="{{route('messages.store')}}">

        @csrf

        <input type="text" name="name" placeholder="Nombre ..."><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        <input type="email" name="email" placeholder="Email ..."><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input type="subject" name="asunto" placeholder="Asunto ..."><br>
        {!! $errors->first('asunto', '<small>:message</small><br>') !!}
        <textarea name="contenido" id="" cols="38" rows="1"></textarea><br>
        {!! $errors->first('contenido', '<small>:message</small><br>') !!}
        <button>Enviar</button>
    </form>
@endsection
