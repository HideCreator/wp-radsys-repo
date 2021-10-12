<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DinasAddRequest extends FormRequest
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
            
				"id_pengguna" => "required",
				"peserta" => "required",
				"waktu" => "required",
				"status_dinas" => "required",
				"nama_balat" => "required",
				"balat_out" => "required|numeric",
				"balat_in" => "required|numeric",
				"mengetahui" => "required",
            
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
