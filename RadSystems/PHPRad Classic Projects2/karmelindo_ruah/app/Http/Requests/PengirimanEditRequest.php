<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengirimanEditRequest extends FormRequest
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
            
				"kd_transaksi" => "nullable|numeric",
				"ekspedisi" => "filled|string",
				"biaya" => "filled|numeric",
				"no_resi" => "filled|string",
				"status" => "nullable|string",
				"tgl_kirim" => "nullable|date",
				"catatan" => "nullable|string",
				"jenis_produk" => "nullable|string",
				"produk_edisi" => "nullable|string",
				"jumlah" => "nullable|numeric",
				"nama_pelanggan" => "nullable|string",
            
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
