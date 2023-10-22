<?php

namespace App\Http\Requests\EndUser;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_id' => [
                'required',
                Rule::unique('carts')->where(function ($query) {
                    return $query->where('user_id', auth()->id());
                })->ignore($this->cart ? $this->cart->id : null),
            ],
        ];
    }
}
