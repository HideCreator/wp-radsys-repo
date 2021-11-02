<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Transaksi_RuahAddRequest extends FormRequest
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
            
				"kd_trk_ruah" => "required|numeric",
				"kd_pelanggan" => "nullable|numeric",
				"ekspedisi1" => "nullable|string",
				"ekspedisi2" => "nullable|string",
				"catatan" => "nullable",
				"produk_edisi" => "nullable|string",
				"jumlah" => "nullable|numeric",
				"harga" => "nullable|numeric",
				"diskon" => "nullable|numeric",
				"subtotal" => "nullable|numeric",
				"ongkir" => "required|numeric",
				"status_bayar" => "nullable|string",
				"total_bayar" => "required|numeric",
				"piutangtotal" => "nullable|numeric",
				"bayartotal" => "nullable|numeric",
				"dihapus" => "nullable|numeric",
				"kategori" => "required|string",
				"klot" => "required|string",
				"cabangtrk" => "required|string",
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
