<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiResponse;
<<<<<<< HEAD
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
=======
>>>>>>> ce1b3bc5bcce499a50b1de0aa67bf6f39d0e91cb

abstract class ApiRequest extends FormRequest
{
    use ApiResponse;
    /**
<<<<<<< HEAD
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
        ];
    }
=======
     * Get the validation rules that apply to this request.
     *
     * @return array
     */
    abstract public function rules();
>>>>>>> ce1b3bc5bcce499a50b1de0aa67bf6f39d0e91cb
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->apiError( 
            $validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY,
        ));
    }
    protected function failedAuthorization()
    {
        throw new HttpResponseException($this->apiError( 
            null,
            Response::HTTP_UNAUTHORIZED,
        ));
    }
}