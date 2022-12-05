<?php

namespace App\Http\Requests;

use App\Rules\OnlyLetters;
use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
        $rules = [
            'name' => ['required', new OnlyLetters()],
        ];

        $nameRoute = $this->route()->action['as'];

        switch ($nameRoute) {
            case 'administrators.create':
                $rules['email'] = 'required|email|min:6';
                $rules['password'] = 'required|min:6';
                $rules['repeat_password'] = 'required|same:password|min:6';
                return $rules;
            case 'administrators.update':
                $rules['email'] = 'required|email|min:6';
                $rules['password'] = 'nullable|min:6';
                $rules['repeat_password'] = 'required_with:password|same:password';
                return $rules;
        }
    }
}
