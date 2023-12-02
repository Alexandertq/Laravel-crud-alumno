<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlumnoRequest;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index_GET() {
        //obtener listado de alumnos
        $alumnosDb=Alumno::all();

        //mostrar listado de alumnos
        //return $alumnoDb;

        return view('alumnos.index',compact('alumnosDb'));
    }

    public function create_GET(){

        return view('alumnos.create');
    }

    public function store_POST(CreateAlumnoRequest $request)
    {
        Alumno::create($request->All());
        return redirect('/alumnos');
    }

    public function edit_GET(Alumno $alumno) {
        return view('alumnos.edit',compact('alumno'));
    }

    public function update_PUT(Alumno $alumno,CreateAlumnoRequest $request)
    {
        $alumno->update($request->All());
        return redirect('/alumnos');
    }

    public function delete_GET(Alumno $alumno) {
        return view('alumnos.delete',compact('alumno'));
    }

    public function destroy_DELETE(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('/alumnos');
    }

    
}