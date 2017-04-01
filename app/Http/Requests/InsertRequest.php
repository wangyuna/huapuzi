<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertRequest extends Request
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
            //
            "title"=>"required",
            "des"=>"required",
            "editorValue"=>"required"
        ];
    }
    public function messages(){
        return [
            "title.required"=>"标题不能为空",
            "des.required"=>"描述不能为空",
            "editorValue.required"=>"文章内容不能为空"
        ];
    }
}
