<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Transaksi_RuahEditRequest extends FormRequest
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
            
				"kd_trk_ruah" => "filled|numeric",
				"kd_pelanggan" => "nullable|numeric",
				"ekspedisi1" => "nullable|string",
				"ekspedisi2" => "nullable|string",
				"catatan" => "nullable",
				"produk_edisi" => "nullable|string",
				"jumlah" => "nullable|numeric",
				"harga" => "nullable|numeric",
				"diskon" => "nullable|numeric",
				"subtotal" => "nullable|numeric",
				"ongkir" => "filled|numeric",
				"status_bayar" => "nullable|string",
				"total_bayar" => "filled|numeric",
				"piutangtotal" => "nullable|numeric",
				"bayartotal" => "nullable|numeric",
				"dihapus" => "nullable|numeric",
				"kategori" => "filled|string",
				"klot" => "filled|string",
				"cabangtrk" => "filled|string",
				"jumlahruah" => "nullable|numeric",
            
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
