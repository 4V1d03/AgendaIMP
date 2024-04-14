<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>
<body>
@extends('layouts.principal')
@section('hijos')   
    <h1>Modulo de Correo de persona: {{$persona}}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>CodPersona</th>
                <th>CodCorreo</th>
                <th>Correo</th>
            </tr>
        </thead>

        <tbody>
        @foreach($correos as $correo)
        @if($correo->CodPersona == $persona)
            <tr>
                <th>{{$correo->id}}</th>
                <th>{{$correo->CodPersona}}</th>
                <th>{{$correo->CodCorreo}}</th>
                <th>{{$correo->Correo}}</th>
            </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection
</body>
</html>