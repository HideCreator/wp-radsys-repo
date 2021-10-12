<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarisAddRequest extends FormRequest
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
            
				"nama_balat" => "required|string",
				"tanggal" => "required|date",
				"jml_awl" => "required|numeric",
				"balat_in" => "required|numeric",
				"balat_out" => "required|numeric",
				"jml_akh" => "required|numeric",
				"satuan" => "required|string",
            
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
