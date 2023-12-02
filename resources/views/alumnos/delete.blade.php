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
        max-width: 450px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(241, 235, 235, 0.5); /* Fondo semi-transparente */
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
        color: #333;
        }
    
        form {
        border: 1px solid #ddd;
        padding: 30px;
        max-width: 400px;
        margin: 0 auto;
        background-color: rgba(255, 255, 255, 0.5); /* Fondo semi-transparente */
        border-radius: 5px;
        }
    
        form input[type="text"] {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }
    
        form button {
        padding: 10px 20px;
        background-color: #008000;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        }
    
        form button[type="button"] {
        background-color: #FF0000;
        }
    </style>
<body>
    <div  class="container" align="center">
        <h3>Alumnos - DELETE!</h3>

        <form name="" method="post" action="{{ route('alumnos.destroy',$alumno) }}">
            @csrf
            @method('delete')
            Producto ID: <input type="number" name="alumno_id"
                         value="{{ $alumno->alumno_id }}" readonly="true"/> <br>

            Nombre: <input type="text" name="nombre" value="{{ $alumno->nombre }}" readonly="true"/> <br>
            Apellido: <input type="text" name="apellido" value="{{ $alumno->apellido }}"readonly="true"/>

            <p>¿Está seguro de borrar?</p>

            <button type="submit">Si, borrar</button>
            <button type="button" onclick="location.href='{{ url('/alumnos') }}'">Cancelar</button>
        </form>
    </div>
</body>
</html>
