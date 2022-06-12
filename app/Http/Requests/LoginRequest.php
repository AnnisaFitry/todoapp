<?php

namespace App\Http\Requests;

<<<<<<< HEAD
use Illuminate\Foundation\Http\FormRequest;

=======
>>>>>>> ce1b3bc5bcce499a50b1de0aa67bf6f39d0e91cb
class LoginRequest extends ApiRequest
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
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ];
    }
}
