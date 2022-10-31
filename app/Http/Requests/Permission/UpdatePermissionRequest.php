<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePermissionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'required',
                Rule::unique('permissions','title')->ignore($this->id)

            ],
        ];
    }

    public function messages()
    {
        return [
            'title' => 'The Permission Rule is already created or assigned.',

        ];
    }
}
