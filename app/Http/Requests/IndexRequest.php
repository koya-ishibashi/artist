<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stock.title' => 'required|string|max:100',
            'stock.body' => 'required|string|max:500',
            'stock.fee' => 'required|integer',
            'stock.image_path' => 'required|image',
        ];
    }
}
