<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCateRequest extends FormRequest
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
            'name_cate'=>'unique:vp_categories,cate_name'
        ];
    }
    public function messages()
    {
        return [
            'name_cate.unique'=>'Sản phẩm đã tồn tại'
        ];
    }
}
