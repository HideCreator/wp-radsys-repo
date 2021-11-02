<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiAddRequest extends FormRequest
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
            
				"kd_trk" => "required|string",
				"ekspedisi1" => "required|string",
				"ekspedisi2" => "required|string",
				"catatan" => "required",
				"produk_edisi" => "required|string",
				"jenis_produk" => "required|string",
				"jumlah" => "required|numeric",
				"harga" => "required|numeric",
				"diskon" => "required|numeric",
				"subtotal" => "required|numeric",
				"ongkir" => "required|numeric",
				"status_bayar" => "required|string",
				"total_bayar" => "required|numeric",
				"piutangtotal" => "required|numeric",
				"bayartotal" => "required|numeric",
				"dihapus" => "required|numeric",
				"kategori" => "required|string",
				"kd_pelanggan" => "required|numeric",
				"cabang" => "required|string",
            
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
