<?php

namespace App\Http\Requests;

use App\Rules\IsHex;
use Illuminate\Foundation\Http\FormRequest;

class GymRequest extends FormRequest
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
            'name' => 'required',
            'settings.email' => 'sometimes|email',
            'settings.is_leaderboard_enabled' => 'sometimes|bool',
            'settings.is_dashboard_editable' => 'sometimes|bool',
            'settings.is_generic_certificate_enabled' => 'sometimes|bool',
            'settings.redeem_points_url' => 'nullable|url',
            'settings.leaderboard_top' => 'sometimes|numeric',
            'settings.forum' => 'sometimes|bool',
            'settings.fun_stuff' => 'sometimes|bool',
            'settings.store' => 'sometimes|bool',
            'settings.theme.primary.color' => ['sometimes', new IsHex()],
            'settings.theme.primary.hover' => ['sometimes', new IsHex()],
            'settings.theme.secondary.color' => ['sometimes', new IsHex()],
            'settings.theme.secondary.hover' => ['sometimes', new IsHex()],
        ];

        $nameRoute = $this->route()->action['as'];

        switch ($nameRoute) {
            case 'gyms.create':
                return $rules;
            case 'gyms.update':
                $rules['id'] = 'required|exists:gyms,id';
                return $rules;
        }
    }
}
