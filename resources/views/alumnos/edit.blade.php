<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(https://fondosmil.com/fondo/17553.jpg);
    background-size: cover; /* Ajusta la imagen de fondo al tamaño de la ventana */
    }

    .container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff50;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
    }

    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    /* Estilos para los campos del formulario */
    form input[type="text"],
    form input[type="date"],
    form input[type="email"],
    form input[type="number"],
    form select {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #fff;
    }

    /* Estilos para los botones del formulario */
    form button[type="submit"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #008000;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    form button[type="button"] {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff0000;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    form button:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <div class="container" align="center">
        <h3>Alumnos - EDIT!</h3>

        <form name="" method="post" action="{{ route('alumnos.update',$alumno) }}">
            @csrf
            @method('put')
            Alumno ID: <input type="number" name="alumno_id"
                         value="{{ $alumno->alumno_id }}" readonly="true"/> <br>

            Nombre: <input type="text" name="nombre" value="{{ old('nombre',$alumno->nombre) }}"/>
            <span style="color:red">
                @error('nombre')
                    {{ $message }}
                @enderror
            </span>
            <br>

            Apellido: <input type="text" name="apellido" value="{{ old('apellido',$alumno->apellido) }}"/>
            <span style="color:red">
                @error('apellido')
                    {{ $message }}
                @enderror
            </span>
            <br>

            F-Nacimiento: <input type="date" name="fnacimiento" value="{{ old('fnacimiento',$alumno->fnacimiento) }}"/>
            <span style="color:red">
                @error('fnacimiento')
                    {{ $message }}
                @enderror
            </span>
            <br>

            Dni: <input type="number" name="dni" value="{{ old('dni',$alumno->dni) }}" />
            <span style="color:red">
                @error('dni')
                    {{ $message }}
                @enderror
            </span>
            <br>

            
            Género:
            <select name="genero" id="genero">
                <option value="">-- Seleccione --</option>
                <option value="Masculino" @if (old('genero', $alumno->genero) === 'Masculino') selected @endif> Masculino</option>
                <option value="Femenino" @if (old('genero', $alumno->genero) === 'Femenino') selected @endif> Femenino</option>
            </select>
            <span style="color:red">
                @error('genero')
                {{ $message }}
                @enderror
            </span>
            <br>           

            Carrera: <input type="text" name="carrera" value="{{ old('carrera',$alumno->carrera) }}"/>
            <span style="color:red">
                @error('carrera')
                    {{ $message }}
                @enderror
            </span>
            <br>


            Email: <input type="email" name="email" value="{{ old('email',$alumno->email) }}"/>
            <span style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <br>

            Telefono: <input type="number" name="telefono" value="{{ old('telefono',$alumno->telefono) }}"/>
            <span style="color:red">
                @error('telefono')
                    {{ $message }}
                @enderror
            </span>
            <br><br>

            <button type="submit">Guardar</button>
            <button type="button" onclick="location.href='{{ url('/alumnos') }}'">Cancelar</button>
        </form>
    </div>
</body>
</html>
