<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class StoreUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'unique:users,email',
            'password' => ['nullable', Rules\Password::defaults()],
            'role_id' => 'nullable|integer',
        ];
    }
}
