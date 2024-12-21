<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SopRequest extends FormRequest
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
            'image' => 'required','image','mimes:jpg,png,jpeg,gif,svg','max:2048',
            'sopName' => 'required',
            'sopDes' => 'required',
            'tag' => 'required',
            'package' => 'required',
            'pdfCheckbox' => 'required',
            'pdfName' => 'required',
            'pdfFile' => ['mimes:pdf','required'],
            'docCheckbox' => 'nullable',
            'docName' => Rule::requiredIf($this->has('docCheckbox')),
            'docFile' => ['mimes:doc,docx',Rule::requiredIf($this->has('docCheckbox'))],
        ];
    }
}
