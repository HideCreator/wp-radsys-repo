<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelangganEditRequest extends FormRequest
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
		
		$rec_id = request()->route('rec_id');

        return [
            
				"id_pelanggan" => "filled",
				"nama_pelanggan" => "nullable|string",
				"nama_tempat" => "filled|string",
				"alamat" => "filled|string",
				"telp" => "nullable|numeric|max:13|unique:pelanggan,telp,$rec_id,id_pelanggan",
				"jenis_usaha" => "filled",
            
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
