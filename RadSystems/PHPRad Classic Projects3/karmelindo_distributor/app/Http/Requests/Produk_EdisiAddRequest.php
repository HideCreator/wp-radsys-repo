<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Produk_EdisiAddRequest extends FormRequest
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
            
				"kd_internal" => "nullable|string",
				"kd_isbn_issn" => "nullable|string",
				"judul" => "nullable|string",
				"jenis" => "nullable|string",
				"satuan" => "nullable|string",
				"harga_dasar" => "nullable|numeric",
				"harga_jual" => "nullable|numeric",
				"stok_awal" => "nullable|numeric",
				"judul_lama" => "nullable|string",
				"kode_tahun" => "nullable|string",
				"kode_bulan" => "nullable|string",
            
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
