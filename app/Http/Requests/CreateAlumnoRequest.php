<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'fnacimiento'=>'required',
            'dni'=>'required',
            'genero'=>'required',
            'carrera'=>'required',
            'email'=>'required',
            'telefono'=>'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'nombre'=>'NOMBRE',
            'apellido'=>'APELLIDO',
            'fnacimiento'=>'FECHA DE NACIMIENTO',
            'dni'=>'DNI',
            'genero'=>'GENERO',
            'carrera'=>'CARRERA',
            'email'=>'EMAIL',
            'telefono'=>'TELEFONO'
        ];
    }
}
