<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterRequest extends FormRequest
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
    public function rules()
    {
        return [
        'name'=>[
            'required',
            Rule::unique('characters')->ignore($this->character),
        ],
        'description' => 'nullable',
        'attack'=>'required|integer',
        'defence'=>'required|integer',
        'speed'=>'required|integer',
        'life'=>'required|integer',
        'type_id' => 'nullable|exists:types,id',
        'items' => 'nullable|exists:items,id'
    ];
    }
    public function messages()
    {
        return [

            'name.required' => 'il nome è obbligatorio',
            'attack.required' => 'Il campo è obbligatorio',
            'attack.integer' => 'inserire solamente valori numerici',

            'defence.integer' => 'inserire solamente valori numerici',
            'defence.required' => 'Il campo è obbligatorio',
            'speed.integer' => 'inserire solamente valori numerici',
            'speed.required' => 'Il campo è obbligatorio',
            'life.integer' => 'inserire solamente valori numerici',
            'life.required' => 'Il campo è obbligatorio',

        ];
    }
}
