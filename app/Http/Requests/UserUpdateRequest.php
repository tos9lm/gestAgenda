<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request
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
        $id = $this->segment(2);
        return [
            'nom' => 'required|max:255|unique:users,nom,' . $id,
            'prenom' => 'required|max:255|unique:users,prenom,' . $id,
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            //'id_classe' => 'required|unique:users,id_classe,' . $id
        ];
    }
}