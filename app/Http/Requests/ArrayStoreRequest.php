<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArrayStoreRequest extends FormRequest
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
        if ($this->file()){
            $campos = [
                'NombreAttangements' => 'required|string|max:30',
                'Codigo' => 'required|string|max:10|unique:arrays,Codigo',
                'imagen' => 'required|mimes:jpeg,jpg,png,bmp',
            ];
        }else{
            $campos = [
                'NombreAttangements' => 'required|string|max:30',
                'Codigo'=> 'required|string|max:10|unique:arrays,Codigo',
            ];
        }       
        return $campos;
    }
}
