<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertFilmRequest extends FormRequest
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
            'titre' => ['required','string','max:100'],
            'anneeSortie' => ['required','numeric','min:1000','max:3000'],
            'id_categorie' => ['required','digits_between:1,10'],
            'description' => ['required','string','max:1000']
        ];
    }
}
