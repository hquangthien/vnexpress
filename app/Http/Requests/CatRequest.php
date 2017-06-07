<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CatRequest extends FormRequest
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
        $id = Request::segment(3);
        if ($id != '')
        {
            return [
                'name' => 'required|unique:categories,name,'.$id,
            ];
        } else{
            return [
                'name' => 'required|unique:categories,name'
            ];
        }

    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.unique' => 'Danh mục tin này đã tồn tại'
        ];
    }
}
