<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'   => 'required|string|max:255',
            'phone'  => 'required|string|max:20',
            'email'  => 'required|email|max:255',
            'address'=> 'required|string|max:255',
            'amount' =>'required|numeric|min:0.01',
            'type'   =>'nullable'
        ];
    }
}
