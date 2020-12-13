<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'user_id' => ['required'],
            'title' => ['required'],
            'content' => ['required','min:10'],
        ];
    }

    public function  messages()
    {
       return [
           'required' => ':attribute은(는) 필수 입력 항목입니다.',
           'min:10' => ':attribute은(는) 최소 :min 글자 이상이 필요합니다.',

       ];
    }

    public function attributes()
    {
       return [
           'user_id' => '이름',
           'title' => '제목',
           'content' => '본문',
       ];
    }
}
