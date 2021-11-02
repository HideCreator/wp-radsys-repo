<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
	Route::get('', 'HomeController@index')->name('index');
	Route::get('home', 'HomeController@index')->name('home');




/* routes for Akun Controller */	
	Route::get('akun', 'AkunController@index')->name('akun.index');
	Route::get('akun/index', 'AkunController@index')->name('akun.index');
	Route::get('akun/index/{filter?}/{filtervalue?}', 'AkunController@index')->name('akun.index');	
	Route::get('akun/view/{rec_id}', 'AkunController@view')->name('akun.view');	
	Route::get('akun/add', 'AkunController@add')->name('akun.add');
	Route::post('akun/store', 'AkunController@store')->name('akun.store');
		
	Route::any('akun/edit/{rec_id}', 'AkunController@edit')->name('akun.edit');	
	Route::get('akun/delete/{rec_id}', 'AkunController@delete');

/* routes for Pelanggan Controller */	
	Route::get('pelanggan', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index/{filter?}/{filtervalue?}', 'PelangganController@index')->name('pelanggan.index');	
	Route::get('pelanggan/view/{rec_id}', 'PelangganController@view')->name('pelanggan.view');	
	Route::get('pelanggan/add', 'PelangganController@add')->name('pelanggan.add');
	Route::post('pelanggan/store', 'PelangganController@store')->name('pelanggan.store');
		
	Route::any('pelanggan/edit/{rec_id}', 'PelangganController@edit')->name('pelanggan.edit');	
	Route::get('pelanggan/delete/{rec_id}', 'PelangganController@delete');

/* routes for Pengiriman Controller */	
	Route::get('pengiriman', 'PengirimanController@index')->name('pengiriman.index');
	Route::get('pengiriman/index', 'PengirimanController@index')->name('pengiriman.index');
	Route::get('pengiriman/index/{filter?}/{filtervalue?}', 'PengirimanController@index')->name('pengiriman.index');	
	Route::get('pengiriman/view/{rec_id}', 'PengirimanController@view')->name('pengiriman.view');	
	Route::get('pengiriman/add', 'PengirimanController@add')->name('pengiriman.add');
	Route::post('pengiriman/store', 'PengirimanController@store')->name('pengiriman.store');
		
	Route::any('pengiriman/edit/{rec_id}', 'PengirimanController@edit')->name('pengiriman.edit');	
	Route::get('pengiriman/delete/{rec_id}', 'PengirimanController@delete');

/* routes for Produk_Edisi Controller */	
	Route::get('produk_edisi', 'Produk_EdisiController@index')->name('produk_edisi.index');
	Route::get('produk_edisi/index', 'Produk_EdisiController@index')->name('produk_edisi.index');
	Route::get('produk_edisi/index/{filter?}/{filtervalue?}', 'Produk_EdisiController@index')->name('produk_edisi.index');	
	Route::get('produk_edisi/view/{rec_id}', 'Produk_EdisiController@view')->name('produk_edisi.view');	
	Route::get('produk_edisi/add', 'Produk_EdisiController@add')->name('produk_edisi.add');
	Route::post('produk_edisi/store', 'Produk_EdisiController@store')->name('produk_edisi.store');
		
	Route::any('produk_edisi/edit/{rec_id}', 'Produk_EdisiController@edit')->name('produk_edisi.edit');	
	Route::get('produk_edisi/delete/{rec_id}', 'Produk_EdisiController@delete');

/* routes for Saldo Controller */	
	Route::get('saldo', 'SaldoController@index')->name('saldo.index');
	Route::get('saldo/index', 'SaldoController@index')->name('saldo.index');
	Route::get('saldo/index/{filter?}/{filtervalue?}', 'SaldoController@index')->name('saldo.index');	
	Route::get('saldo/view/{rec_id}', 'SaldoController@view')->name('saldo.view');	
	Route::get('saldo/add', 'SaldoController@add')->name('saldo.add');
	Route::post('saldo/store', 'SaldoController@store')->name('saldo.store');
		
	Route::any('saldo/edit/{rec_id}', 'SaldoController@edit')->name('saldo.edit');	
	Route::get('saldo/delete/{rec_id}', 'SaldoController@delete');

/* routes for Transaksi Controller */	
	Route::get('transaksi', 'TransaksiController@index')->name('transaksi.index');
	Route::get('transaksi/index', 'TransaksiController@index')->name('transaksi.index');
	Route::get('transaksi/index/{filter?}/{filtervalue?}', 'TransaksiController@index')->name('transaksi.index');	
	Route::get('transaksi/view/{rec_id}', 'TransaksiController@view')->name('transaksi.view');	
	Route::get('transaksi/add', 'TransaksiController@add')->name('transaksi.add');
	Route::post('transaksi/store', 'TransaksiController@store')->name('transaksi.store');
		
	Route::any('transaksi/edit/{rec_id}', 'TransaksiController@edit')->name('transaksi.edit');	
	Route::get('transaksi/delete/{rec_id}', 'TransaksiController@delete');

/**
 * All routes which requires auth
 */
Route::middleware(['auth'])->group(function () {
	
	
});



Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');