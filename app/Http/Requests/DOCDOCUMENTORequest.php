<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DOCDOCUMENTORequest extends FormRequest
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
			'DOC_NOMBRE' => 'required|string',
			'DOC_CODIGO' => 'required|string',
			'DOC_ID_TIPO' => 'required',
			'DOC_ID_PROCESO' => 'required',
        ];
    }
}
