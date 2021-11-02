<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiEditRequest extends FormRequest
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
            
				"kd_trk" => "filled|string",
				"ekspedisi1" => "filled|string",
				"ekspedisi2" => "filled|string",
				"catatan" => "filled",
				"produk_edisi" => "filled|string",
				"jenis_produk" => "filled|string",
				"jumlah" => "filled|numeric",
				"harga" => "filled|numeric",
				"diskon" => "filled|numeric",
				"subtotal" => "filled|numeric",
				"ongkir" => "filled|numeric",
				"status_bayar" => "filled|string",
				"total_bayar" => "filled|numeric",
				"piutangtotal" => "filled|numeric",
				"bayartotal" => "filled|numeric",
				"dihapus" => "filled|numeric",
				"kategori" => "filled|string",
				"kd_pelanggan" => "filled|numeric",
				"cabang" => "filled|string",
            
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
