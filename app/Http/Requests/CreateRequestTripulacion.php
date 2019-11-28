<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequestTripulacion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',            
            'direccion' => 'required',            
            'telefono' => 'required|integer',            
            'numero_hora' => 'required|integer',            
            'valor_hora' => 'required|integer',            
        ];
    }

    public function messages()
    {
        return[
            
        ];
    }
}
