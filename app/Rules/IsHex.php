<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsHex implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     *
     * @param  mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^#(\d|a|b|c|d|e|f){3}$/i', $value) || preg_match('/^#(\d|a|b|c|d|e|f){6}$/i', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be hexadecimal.';
    }
}
