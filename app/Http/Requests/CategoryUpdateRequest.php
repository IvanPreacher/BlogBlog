<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'title'       =>    'required|min:5|max:200',
            'slug'        =>    'max:200',
            'parent_id'   =>    'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Введите :attribute статьи',
            'title.min'=>' :attribute должен содержать минимум  :min символов',
        ];
    }

    public function attributes()
    {
        return [
            'title'=>'Заголовок'
        ];
    }
}
