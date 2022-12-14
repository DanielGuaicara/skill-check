<?php

namespace App\Http\Requests;

use App\Rules\UniqueEmail;
use Illuminate\Foundation\Http\FormRequest;

class CreateGymnastUserRequest extends FormRequest
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
            'email' => ['required', 'email' , 'min:6', new UniqueEmail],
            'gym_id' => 'required|exists:gyms,id',
        ];
    }
}
