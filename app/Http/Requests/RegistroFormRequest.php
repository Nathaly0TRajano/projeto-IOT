<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'sensor_id' =>'required',
        'valor'=>'required',
        'unidade'=> 'required',
        'data_hora'=>'required'
        ];
    }
        protected $messages = [
        'sensor_id.required'=>'Este campo é obrigatório',
        'valor.required'=>'Este campo é obrigatório',
        'data_hora.required'=>'Este campo é obrigatório'
    ];

}


    

