<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de Telefonos</title>
</head>
<body>
    @extends('layouts.principal')
    @section('hijos')

    <h1>Edita Correos</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/correo/{{$correoEdit->id}}" method="post"> <!--el motodo post apunta a la funcion store-->
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Codigo Persona</label>
                        <input type="text" name="CodPersona" class="form-control" value="{{$correoEdit->CodPersona}}" readonly onmousedown="return false;>
                    </div>

                    <div class="mb-3">
                        <label for="">Codigo Correo</label>
                        <input type="text" name="CodCorreo" class="form-control" value="{{$correoEdit->CodCorreo}}" readonly onmousedown="return false;>
                    </div>

                    <div class="mb-3">
                        <label for="">Correo</label>
                        <input type="text" name="Correo" class="form-control" value="{{$correoEdit->Correo}}">
                    </div>

                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>