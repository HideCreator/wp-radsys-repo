<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganAddRequest extends FormRequest
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
            
				"id_pelanggan" => "required",
				"nama_pelanggan" => "nullable|string",
				"nama_tempat" => "required|string",
				"alamat" => "required|string",
				"telp" => "nullable|numeric|max:13|unique:pelanggan,telp",
				"jenis_usaha" => "required",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
