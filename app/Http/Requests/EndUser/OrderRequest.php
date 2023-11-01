<?php

namespace App\Http\Requests\EndUser;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'first_name'=>['required','string','max:255'],
            'last_name'=>['required','string','max:255'],
            'phone'=>['required','string','max:255'],
            'email'=>['required','email','max:255'],
            'address_one'=>['required','string','max:255'],
            'address_two'=>['string','max:255'],
            'country'=>['required','string','max:255'],
            'city'=>['required','string','max:255'],
            'zip_code'=>['required','integer']


        ];
    }
}
