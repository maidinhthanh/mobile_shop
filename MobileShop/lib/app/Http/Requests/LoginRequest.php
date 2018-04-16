<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:4|max:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu không được nhỏ hơn 4 kí tự',
            'password.max'=>'Mật khẩu không được lớn hơn 6 kí tự'
        ];
    }
}
