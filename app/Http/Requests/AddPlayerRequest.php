<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddPlayerRequest extends Request
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
            'name' => 'required|string|min:2',
            'attack' => 'required|integer|min:1|max:5',
            'defense' => 'required|integer|min:1|max:5',
            'stamina' => 'required|integer|min:1|max:5'
        ];
    }
}
