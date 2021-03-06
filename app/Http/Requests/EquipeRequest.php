<?php

namespace Admin\Http\Requests;

use Admin\Http\Requests\Request;

class EquipeRequest extends Request
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
            'img' => 'required',
            'nome' => 'required',
            'cargo' => 'required',
            'email' => 'required'
        ];
    }
}
