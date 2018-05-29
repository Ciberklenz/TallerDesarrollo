<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ObraRequest extends Request
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

    public function rules()    {
        return [
            'nombre_obra' => 'min:4|max:10|required'
        ];
    }
    public function menssages (){
        return [
            'nombre_obra.required' => 'hay error'
        ];
    }

}
