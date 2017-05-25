<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreditoCreateRequest extends FormRequest
{

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
            'plan' =>'required|unique:credito',
            'cantidad_creditos' =>'required',
            'precio' =>'required',
            'descripcion' =>'required',

        ];
    }
}
