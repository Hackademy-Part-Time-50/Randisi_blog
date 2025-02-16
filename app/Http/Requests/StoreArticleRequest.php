<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
        "title" => "required|max:150",
        "description" => "required|max:255",
        "body" => "max:5000",

        ];
    }

    public function message(): array
    {
        return [
            
            //Messaggi Errore TITOLO
            'title.required' => 'Il campo Titolo è obbligatiorio.',
            'title.max' => 'Il campo Titolo non può essere più lungo di :max caratteri.',
            
            //Messaggi Errore CATEGORIA
            //'category.required' => 'Il campo Categoria è obbligatiorio.',
            //'category.max' => 'Il campo Categoria non può essere più lungo di :max caratteri.',
            
            //Messaggi Errore DESCRIZIONE
            'description.required' => 'Il campo Descrizione è obbligatiorio.',
            'description.max' => 'Il campo Categoria non può essere più lungo di :max caratteri.',
            
            //Messaggi Errore BODY
            'body.max' => 'Il campo Body non può essere più lungo di :max caratteri.',  
        ];
    }

}
