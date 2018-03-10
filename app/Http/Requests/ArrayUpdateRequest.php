<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\My_array;
use Illuminate\Validation\Rule;

class ArrayUpdateRequest extends FormRequest
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
        $array = My_array::where('Codigo',$this->Codigo)->get()->first();

//dd($this->Codigo);
        if ($this->file()){
            $campos = [
                'NombreAttangements' => 'required|string|max:30',
                'Codigo' => 'required|string|max:10', Rule::unique('Codigo')->ignore($this->Codigo,'Codigo'),
                'imagen' => 'required|mimes:jpeg,jpg,png,bmp',
            ];
        }else{
            $campos = [
                'NombreAttangements' => 'required|string|max:30',
                'Codigo' => 'required|string|max:10', Rule::unique('Codigo')->ignore($this->Codigo,'Codigo'),

            ];
        }       
        return $campos;
   

    }
}
