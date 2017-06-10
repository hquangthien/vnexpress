<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsEditRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required',
            'detail' => 'required',
            'cat_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nhập tiêu đề tin',
            'preview.required' => 'Nhập mô tả tin',
            'detail.required' => 'Nhập chi tiết tin',
            'cat_id.required' => 'Chọn danh mục tin'
        ];
    }
}
