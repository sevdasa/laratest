<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storesRequest extends FormRequest
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
            "status" =>"required",
            "content" => ["required","max:12"],
            "title" => ["required"," min:5"],
         ];
    }
    public function messages()
    {
        return [
        'status.required' => 'سطح کاربری خود را انتخاب کنید',
         'content.required' => 'وارد کردن محتوا الزامی است',
         'title.required' => 'وارد کردن عنوان الزامی است',
         'title.min' => 'عنوان خیلی کوتاه است',
          'content.max' => 'محتوا طولانی است',
        ];

    }
    protected $errorBag= 'faild';

}
