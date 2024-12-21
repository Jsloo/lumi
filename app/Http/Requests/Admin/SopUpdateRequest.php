<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SopUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'nullable','image','mimes:jpg,png,jpeg,gif,svg','max:2048',
            'sopName' => 'required',
            'sopDes' => 'required',
            'tag' => 'required',
            'package' => 'required',
            'pdfCheckbox' => 'required',
            'pdfName' => 'required',
            'pdfFile' => ['mimes:pdf','nullable'],
            'docCheckbox' => 'nullable',
            'docName' => Rule::requiredIf($this->has('docCheckbox')),
            'docFile' => ['mimes:doc,docx','nullable'],
        ];
    }
}
