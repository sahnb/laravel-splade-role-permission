<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)],
            'password' => 'nullable',
            'name' => 'nullable|string',
            'role_id' => 'nullable|numeric',
            'status' => 'boolean',
        ];
    }
}
