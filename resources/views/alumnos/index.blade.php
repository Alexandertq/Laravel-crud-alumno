<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(https://fondosmil.com/fondo/17553.jpg);
    background-size: cover; /* Ajusta la imagen de fondo al tamaño de la ventana */
    }
    .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff50;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.8);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #2b5179;
        color: #fff;
    }

    /* Agrega un estilo de botón para las acciones */
    .actions a[id="edi"] {
        display: inline-block;
        padding: 5px 10px;
        background-color: #008000;
        color: #fff;
        text-decoration: none;
        margin-right: 5px;
    }
    .actions a[id="eli"] {
        display: inline-block;
        padding: 5px 10px;
        background-color: #ff0000;
        color: #fff;
        text-decoration: none;
        margin-right: 5px;
    
    }
    

    .actions a:hover {
        background-color: #0056b3;
    }

    /* Estilo para filas alternas */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

</style>
<body>
    <div   class="container" align='center'>
        <h3>Alumnos - Listar</h3>
        
        <a href="{{ url('/alumnos/create') }}">Registrar</a> <br><br>

        <table >
            <tr >
                <th ><b>ID</b></th>
                <th><b>Nombre</b></th>
                <th><b>Apellido</b></th>
                <th><b>F-Nacimiento</b></th>
                <th><b>Dni</b></th> 
                <th><b>Género</b></th> 
                <th><b>Carrera</b></th>
                <th><b>Email</b></th>
                <th><b>Telefono</b></th>
                <th><b>Acción</b></th>
            </tr>
        
            @foreach ($alumnosDb as $alumno)
                <tr @if($loop->odd) class="odd-row" @endif>
                    <td>{{$alumno->alumno_id}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido}}</td>
                    <td>{{$alumno->fnacimiento}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td>{{$alumno->genero}}</td>
                    <td>{{$alumno->carrera}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->telefono}}</td>
                    <td class="actions">
                        <a id="edi" href='{{ route('alumnos.edit',$alumno) }}'>Editar</a>
                        <a id="eli" href='{{ route('alumnos.delete',$alumno) }}'>Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>