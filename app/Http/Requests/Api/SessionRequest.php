<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class SessionRequest extends FormRequest
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
            //'cinema_id' => 'required|exists:cinemas,id',
            //'movie_id' => 'required|exists:movies,mov_id',
            //'show_time' => 'required',  //format?
        ];
    }

}
