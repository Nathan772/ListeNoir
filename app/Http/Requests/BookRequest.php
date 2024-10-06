<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//useless, est géré par le fichier Book situé
//dans le dossier Models
class BookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    //specify the field that needs
    //to be filled
    //automatic field don't need anything
    public function rules()
    {
        return [
            'title' => ['required', 'string']
        ];
    }
}
