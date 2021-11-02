<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Saldo_CafeAddRequest extends FormRequest
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
            
				"kd_saldo_cafe" => "required|numeric",
				"kd_pelanggan_cafe" => "nullable|numeric",
				"pemasukkan" => "nullable|numeric",
				"pengeluaran" => "nullable|numeric",
				"keterangan" => "nullable",
				"kd_trk_cafe" => "nullable|numeric",
				"klasifikasi" => "nullable|string",
            
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
