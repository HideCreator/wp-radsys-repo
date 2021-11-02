<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Transaksi_UmumAddRequest extends FormRequest
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
            
				"kode_unik" => "nullable|string",
				"atas_nama" => "nullable|string",
				"alamat" => "nullable|string",
				"kotakab" => "nullable|string",
				"provinsi" => "nullable|string",
				"total_bayar" => "nullable|string",
				"status_bayar" => "nullable|string",
				"tgl_bayar" => "nullable|date",
				"catatan" => "nullable",
				"dihapus" => "nullable|string",
            
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
