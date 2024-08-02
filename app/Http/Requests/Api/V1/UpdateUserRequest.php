<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['required'],
            'remember_token' => ['nullable'],
        ];
    }
}
