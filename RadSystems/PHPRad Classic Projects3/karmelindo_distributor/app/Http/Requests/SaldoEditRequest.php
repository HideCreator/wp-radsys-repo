<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaldoEditRequest extends FormRequest
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
            
				"kd_saldo" => "filled|numeric",
				"kd_pelanggan" => "nullable|numeric",
				"pemasukkan" => "nullable|numeric",
				"pengeluaran" => "nullable|numeric",
				"keterangan" => "nullable",
				"kd_trk" => "nullable|string",
				"klasifikasi" => "nullable|string",
				"jenis_produk" => "filled|string",
				"simpanan" => "filled|numeric",
            
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
