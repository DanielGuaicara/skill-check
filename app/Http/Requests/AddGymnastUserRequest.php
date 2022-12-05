<?php

namespace App\Http\Requests;

use App\Rules\OnlyLetters;
use Illuminate\Foundation\Http\FormRequest;

class AddGymnastUserRequest extends FormRequest
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
            'first_name' => ['required', new OnlyLetters()],
            'last_name' => ['required', new OnlyLetters()],
            'birth_date' => 'required|date',
            'password' => 'required|min:6',
            'repeat_password' => 'required_with:password|same:password',
            'class_id' => 'required',
        ];
    }
}
