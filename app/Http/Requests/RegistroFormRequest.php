<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

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
        'cod_sensor' =>'required',
        'valor'=>'required|numeric',
        'unidade'=> 'required',
        ];
    }

    public function failedValition(Validator $validator)
    {
        if($this->expectsJson()){
            throw new HttpResponseException(response()->json([
                'success' =>false,
                'message' => 'Erro de validação',
                'errors' => $validator->errors()
            ], 422));
        }
        // Se for livewire, lança uma exeção padrão do laravel
        throw new ValidationException($validator);
    }

        public function messages(){
        
        return [
        'cod_sensor.required'=>'O código do sensor é obrigatório',
        'valor.required'=>'O valor do sensor é obrigatório',
        'valor.numeric'=>'O valor do sensor precisa ser numérico',
        'unidade.required'=>'O unidade de medida é obrigatória'
        ];
    }

}


    

