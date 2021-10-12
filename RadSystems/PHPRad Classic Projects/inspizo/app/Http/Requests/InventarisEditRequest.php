<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarisEditRequest extends FormRequest
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
            
				"nama_balat" => "filled|string",
				"tanggal" => "filled|date",
				"jml_awl" => "filled|numeric",
				"balat_in" => "filled|numeric",
				"balat_out" => "filled|numeric",
				"jml_akh" => "filled|numeric",
				"satuan" => "filled|string",
            
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
