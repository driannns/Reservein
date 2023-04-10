<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'role' => ['string', 'max:255'],
            'username' => ['string', 'max:255'],
            'gender' => ['string', 'max:255'],
            'dateofbirth' => ['date', 'max:255'],
            'address' => ['string', 'max:255'],
            'nomor' => ['string', 'max:12'],
            'about' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}
