<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganAddRequest extends FormRequest
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
            
				"no_plg_lama" => "nullable|string",
				"nama_lengkap" => "nullable|string",
				"telp1" => "nullable|string",
				"telp2" => "nullable|string",
				"alamat" => "nullable|string",
				"kotakab" => "nullable|string",
				"provinsi" => "nullable|string",
				"kodepos" => "nullable|string",
				"nama_lembaga" => "nullable|string",
				"ekspedisi1" => "nullable|string",
				"ekspedisi2" => "nullable|string",
				"catatan_pelanggan" => "nullable|string",
				"status_pelanggan" => "nullable|string",
				"kebiasaan_jenis_bayar" => "required|string",
				"alokasi" => "nullable|numeric",
				"prediksi_ongkir" => "nullable|string",
				"cabang" => "nullable|string",
				"jenis_produk" => "nullable|string",
				"kloter" => "nullable|string",
				"tagihan" => "nullable|string",
				"saldo" => "nullable|string",
				"alokasicafe" => "required|numeric",
            
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
