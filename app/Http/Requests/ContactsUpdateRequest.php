<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contactsType' => 'required|min:0',
        ];
    }

    public function messages()
    {
        return [
            'contactsType.required' => 'Trạng thái không được để trống',
            'contactsType.min' => 'Trạng thái không được để trống',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
