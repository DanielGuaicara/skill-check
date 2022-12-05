<?php

namespace App\Http\Requests;

use App\Rules\OnlyLetters;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGymUserRequest extends FormRequest
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
            'email' => 'required|email|min:6',
            'name' => ['required', new OnlyLetters()],
            'password' => 'required|min:6',
            'repeat_password' => 'required|same:password|min:6',
            'gym_id' => 'required',
        ];
    }
}
