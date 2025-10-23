<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    protected function failedValidation(Validator $validator)
{
    // Dump all validation errors
    dd($validator->errors()->all());

    // Or throw normal exception
    // throw new HttpResponseException(
    //     redirect()->back()->withErrors($validator)->withInput()
    // );
}
    public function rules(): array
    {   
        
        return [
            'name' => ['required', 'string', 'max:255'],
            'username'=>['required',
                'string',
                'max:255',
                Rule::Unique(User::class)->ignore($this->user()->id),
            ],
            'image'=>['nullable','image','mimes:jpg,jpeg,png,gif,svg','max:2048'],
            'bio'=>['nullable','string'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            
        ];
        
    }
    
    
}
