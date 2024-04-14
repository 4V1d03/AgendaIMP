<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefono</title>
</head>
<body>
@extends('layouts.principal')
@section('hijos')

<!-- INDEX 1 -->
    <h1>Modulo de Telefono de persona: {{$persona}}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>CodPersona</th>
                <th>CodTelefono</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
        @foreach($telefonos as $telefono)
        @if($telefono->CodPersona == $persona)
            <tr>
                <th>{{$telefono->id}}</th>
                <th>{{$telefono->CodPersona}}</th>
                <th>{{$telefono->CodTelefono}}</th>
                <th>{{$telefono->Telefono}}</th>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>

@endsection
</body>
</html>