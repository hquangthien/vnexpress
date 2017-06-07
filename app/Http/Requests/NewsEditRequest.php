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
        return false;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'preview' => 'required|max:190',
            'detail' => 'required',
            'cat_id' => 'required',
            'picture' => 'required|file'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập tiêu đề tin',
            'preview.required' => 'Nhập mô tả tin',
            'preview.max' => 'Mô tả quá dài',
            'detail.required' => 'Nhập chi tiết tin',
            'cat_id.required' => 'Chọn danh mục tin',
            'picture.required' => 'Chọn ảnh bìa cho tin',
            'picture.file' => 'Chọn ảnh bìa cho tin'
        ];
    }
}
