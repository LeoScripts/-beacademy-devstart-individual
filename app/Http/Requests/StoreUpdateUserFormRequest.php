<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\Return_;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'avatar' => [
                'required',
                'file'
            ],
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email|unique:users,email,{$id},id',
            'cpf' => 'required|string|max:11|min:11',
            'password' => 'required|string|max:12|min:4',
        ];

        if($this->method('PUT')){
            $rules['password'] = [
                'required',
                'nullable',
                'min:4',
                'max:12'
            ];

            $rules ['email'] = [
                'required',
                'email'
            ];

            $rules ['avatar'] = [
                'nullable'
            ];
        }

        return $rules;
    }
}
