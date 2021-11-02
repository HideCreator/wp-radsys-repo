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
	Route::post('akun/importdata', 'AkunController@importdata');	
	Route::get('akun/view/{rec_id}', 'AkunController@view')->name('akun.view');	
	Route::get('akun/add', 'AkunController@add')->name('akun.add');
	Route::post('akun/store', 'AkunController@store')->name('akun.store');
		
	Route::any('akun/edit/{rec_id}', 'AkunController@edit')->name('akun.edit');Route::any('akun/editfield/{rec_id}', 'AkunController@editfield');	
	Route::get('akun/delete/{rec_id}', 'AkunController@delete');

/* routes for Pelanggan Controller */	
	Route::get('pelanggan', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index/{filter?}/{filtervalue?}', 'PelangganController@index')->name('pelanggan.index');	
	Route::post('pelanggan/importdata', 'PelangganController@importdata');	
	Route::get('pelanggan/view/{rec_id}', 'PelangganController@view')->name('pelanggan.view');	
	Route::get('pelanggan/add', 'PelangganController@add')->name('pelanggan.add');
	Route::post('pelanggan/store', 'PelangganController@store')->name('pelanggan.store');
		
	Route::any('pelanggan/edit/{rec_id}', 'PelangganController@edit')->name('pelanggan.edit');Route::any('pelanggan/editfield/{rec_id}', 'PelangganController@editfield');	
	Route::get('pelanggan/delete/{rec_id}', 'PelangganController@delete');

/* routes for Pelanggan_Cafe Controller */	
	Route::get('pelanggan_cafe', 'Pelanggan_CafeController@index')->name('pelanggan_cafe.index');
	Route::get('pelanggan_cafe/index', 'Pelanggan_CafeController@index')->name('pelanggan_cafe.index');
	Route::get('pelanggan_cafe/index/{filter?}/{filtervalue?}', 'Pelanggan_CafeController@index')->name('pelanggan_cafe.index');	
	Route::post('pelanggan_cafe/importdata', 'Pelanggan_CafeController@importdata');	
	Route::get('pelanggan_cafe/view/{rec_id}', 'Pelanggan_CafeController@view')->name('pelanggan_cafe.view');	
	Route::get('pelanggan_cafe/add', 'Pelanggan_CafeController@add')->name('pelanggan_cafe.add');
	Route::post('pelanggan_cafe/store', 'Pelanggan_CafeController@store')->name('pelanggan_cafe.store');
		
	Route::any('pelanggan_cafe/edit/{rec_id}', 'Pelanggan_CafeController@edit')->name('pelanggan_cafe.edit');Route::any('pelanggan_cafe/editfield/{rec_id}', 'Pelanggan_CafeController@editfield');	
	Route::get('pelanggan_cafe/delete/{rec_id}', 'Pelanggan_CafeController@delete');

/* routes for Pengepakan Controller */	
	Route::get('pengepakan', 'PengepakanController@index')->name('pengepakan.index');
	Route::get('pengepakan/index', 'PengepakanController@index')->name('pengepakan.index');
	Route::get('pengepakan/index/{filter?}/{filtervalue?}', 'PengepakanController@index')->name('pengepakan.index');	
	Route::post('pengepakan/importdata', 'PengepakanController@importdata');	
	Route::get('pengepakan/view/{rec_id}', 'PengepakanController@view')->name('pengepakan.view');	
	Route::get('pengepakan/add', 'PengepakanController@add')->name('pengepakan.add');
	Route::post('pengepakan/store', 'PengepakanController@store')->name('pengepakan.store');
		
	Route::any('pengepakan/edit/{rec_id}', 'PengepakanController@edit')->name('pengepakan.edit');Route::any('pengepakan/editfield/{rec_id}', 'PengepakanController@editfield');	
	Route::get('pengepakan/delete/{rec_id}', 'PengepakanController@delete');

/* routes for Pengiriman Controller */	
	Route::get('pengiriman', 'PengirimanController@index')->name('pengiriman.index');
	Route::get('pengiriman/index', 'PengirimanController@index')->name('pengiriman.index');
	Route::get('pengiriman/index/{filter?}/{filtervalue?}', 'PengirimanController@index')->name('pengiriman.index');	
	Route::post('pengiriman/importdata', 'PengirimanController@importdata');	
	Route::get('pengiriman/view/{rec_id}', 'PengirimanController@view')->name('pengiriman.view');	
	Route::get('pengiriman/add', 'PengirimanController@add')->name('pengiriman.add');
	Route::post('pengiriman/store', 'PengirimanController@store')->name('pengiriman.store');
		
	Route::any('pengiriman/edit/{rec_id}', 'PengirimanController@edit')->name('pengiriman.edit');Route::any('pengiriman/editfield/{rec_id}', 'PengirimanController@editfield');	
	Route::get('pengiriman/delete/{rec_id}', 'PengirimanController@delete');

/* routes for Pengiriman_Searching Controller */	
	Route::get('pengiriman_searching', 'Pengiriman_SearchingController@index')->name('pengiriman_searching.index');
	Route::get('pengiriman_searching/index', 'Pengiriman_SearchingController@index')->name('pengiriman_searching.index');
	Route::get('pengiriman_searching/index/{filter?}/{filtervalue?}', 'Pengiriman_SearchingController@index')->name('pengiriman_searching.index');	
	Route::get('pengiriman_searching/view/{rec_id}', 'Pengiriman_SearchingController@view')->name('pengiriman_searching.view');

/* routes for Produk_Edisi Controller */	
	Route::get('produk_edisi', 'Produk_EdisiController@index')->name('produk_edisi.index');
	Route::get('produk_edisi/index', 'Produk_EdisiController@index')->name('produk_edisi.index');
	Route::get('produk_edisi/index/{filter?}/{filtervalue?}', 'Produk_EdisiController@index')->name('produk_edisi.index');	
	Route::post('produk_edisi/importdata', 'Produk_EdisiController@importdata');	
	Route::get('produk_edisi/view/{rec_id}', 'Produk_EdisiController@view')->name('produk_edisi.view');	
	Route::get('produk_edisi/add', 'Produk_EdisiController@add')->name('produk_edisi.add');
	Route::post('produk_edisi/store', 'Produk_EdisiController@store')->name('produk_edisi.store');
		
	Route::any('produk_edisi/edit/{rec_id}', 'Produk_EdisiController@edit')->name('produk_edisi.edit');Route::any('produk_edisi/editfield/{rec_id}', 'Produk_EdisiController@editfield');	
	Route::get('produk_edisi/delete/{rec_id}', 'Produk_EdisiController@delete');

/* routes for Saldo Controller */	
	Route::get('saldo', 'SaldoController@index')->name('saldo.index');
	Route::get('saldo/index', 'SaldoController@index')->name('saldo.index');
	Route::get('saldo/index/{filter?}/{filtervalue?}', 'SaldoController@index')->name('saldo.index');	
	Route::post('saldo/importdata', 'SaldoController@importdata');	
	Route::get('saldo/view/{rec_id}', 'SaldoController@view')->name('saldo.view');	
	Route::get('saldo/add', 'SaldoController@add')->name('saldo.add');
	Route::post('saldo/store', 'SaldoController@store')->name('saldo.store');
		
	Route::any('saldo/edit/{rec_id}', 'SaldoController@edit')->name('saldo.edit');Route::any('saldo/editfield/{rec_id}', 'SaldoController@editfield');	
	Route::get('saldo/delete/{rec_id}', 'SaldoController@delete');

/* routes for Saldo_Cafe Controller */	
	Route::get('saldo_cafe', 'Saldo_CafeController@index')->name('saldo_cafe.index');
	Route::get('saldo_cafe/index', 'Saldo_CafeController@index')->name('saldo_cafe.index');
	Route::get('saldo_cafe/index/{filter?}/{filtervalue?}', 'Saldo_CafeController@index')->name('saldo_cafe.index');	
	Route::post('saldo_cafe/importdata', 'Saldo_CafeController@importdata');	
	Route::get('saldo_cafe/view/{rec_id}', 'Saldo_CafeController@view')->name('saldo_cafe.view');	
	Route::get('saldo_cafe/add', 'Saldo_CafeController@add')->name('saldo_cafe.add');
	Route::post('saldo_cafe/store', 'Saldo_CafeController@store')->name('saldo_cafe.store');
		
	Route::any('saldo_cafe/edit/{rec_id}', 'Saldo_CafeController@edit')->name('saldo_cafe.edit');Route::any('saldo_cafe/editfield/{rec_id}', 'Saldo_CafeController@editfield');	
	Route::get('saldo_cafe/delete/{rec_id}', 'Saldo_CafeController@delete');

/* routes for Transaksi_Cafe Controller */	
	Route::get('transaksi_cafe', 'Transaksi_CafeController@index')->name('transaksi_cafe.index');
	Route::get('transaksi_cafe/index', 'Transaksi_CafeController@index')->name('transaksi_cafe.index');
	Route::get('transaksi_cafe/index/{filter?}/{filtervalue?}', 'Transaksi_CafeController@index')->name('transaksi_cafe.index');	
	Route::get('transaksi_cafe/view/{rec_id}', 'Transaksi_CafeController@view')->name('transaksi_cafe.view');	
	Route::get('transaksi_cafe/add', 'Transaksi_CafeController@add')->name('transaksi_cafe.add');
	Route::post('transaksi_cafe/store', 'Transaksi_CafeController@store')->name('transaksi_cafe.store');
		
	Route::any('transaksi_cafe/edit/{rec_id}', 'Transaksi_CafeController@edit')->name('transaksi_cafe.edit');Route::any('transaksi_cafe/editfield/{rec_id}', 'Transaksi_CafeController@editfield');	
	Route::get('transaksi_cafe/delete/{rec_id}', 'Transaksi_CafeController@delete');

/* routes for Transaksi_Cafe_Pelanggan Controller */	
	Route::get('transaksi_cafe_pelanggan', 'Transaksi_Cafe_PelangganController@index')->name('transaksi_cafe_pelanggan.index');
	Route::get('transaksi_cafe_pelanggan/index', 'Transaksi_Cafe_PelangganController@index')->name('transaksi_cafe_pelanggan.index');
	Route::get('transaksi_cafe_pelanggan/index/{filter?}/{filtervalue?}', 'Transaksi_Cafe_PelangganController@index')->name('transaksi_cafe_pelanggan.index');	
	Route::get('transaksi_cafe_pelanggan/view/{rec_id}', 'Transaksi_Cafe_PelangganController@view')->name('transaksi_cafe_pelanggan.view');

/* routes for Transaksi_Duplikasi Controller */	
	Route::get('transaksi_duplikasi', 'Transaksi_DuplikasiController@index')->name('transaksi_duplikasi.index');
	Route::get('transaksi_duplikasi/index', 'Transaksi_DuplikasiController@index')->name('transaksi_duplikasi.index');
	Route::get('transaksi_duplikasi/index/{filter?}/{filtervalue?}', 'Transaksi_DuplikasiController@index')->name('transaksi_duplikasi.index');	
	Route::get('transaksi_duplikasi/view/{rec_id}', 'Transaksi_DuplikasiController@view')->name('transaksi_duplikasi.view');

/* routes for Transaksi_Ruah Controller */	
	Route::get('transaksi_ruah', 'Transaksi_RuahController@index')->name('transaksi_ruah.index');
	Route::get('transaksi_ruah/index', 'Transaksi_RuahController@index')->name('transaksi_ruah.index');
	Route::get('transaksi_ruah/index/{filter?}/{filtervalue?}', 'Transaksi_RuahController@index')->name('transaksi_ruah.index');	
	Route::post('transaksi_ruah/importdata', 'Transaksi_RuahController@importdata');	
	Route::get('transaksi_ruah/view/{rec_id}', 'Transaksi_RuahController@view')->name('transaksi_ruah.view');	
	Route::get('transaksi_ruah/add', 'Transaksi_RuahController@add')->name('transaksi_ruah.add');
	Route::post('transaksi_ruah/store', 'Transaksi_RuahController@store')->name('transaksi_ruah.store');
		
	Route::any('transaksi_ruah/edit/{rec_id}', 'Transaksi_RuahController@edit')->name('transaksi_ruah.edit');Route::any('transaksi_ruah/editfield/{rec_id}', 'Transaksi_RuahController@editfield');	
	Route::get('transaksi_ruah/delete/{rec_id}', 'Transaksi_RuahController@delete');

/* routes for Transaksi_Ruah_Pelanggan Controller */	
	Route::get('transaksi_ruah_pelanggan', 'Transaksi_Ruah_PelangganController@index')->name('transaksi_ruah_pelanggan.index');
	Route::get('transaksi_ruah_pelanggan/index', 'Transaksi_Ruah_PelangganController@index')->name('transaksi_ruah_pelanggan.index');
	Route::get('transaksi_ruah_pelanggan/index/{filter?}/{filtervalue?}', 'Transaksi_Ruah_PelangganController@index')->name('transaksi_ruah_pelanggan.index');	
	Route::get('transaksi_ruah_pelanggan/view/{rec_id}', 'Transaksi_Ruah_PelangganController@view')->name('transaksi_ruah_pelanggan.view');

/* routes for Transaksi_Umum Controller */	
	Route::get('transaksi_umum', 'Transaksi_UmumController@index')->name('transaksi_umum.index');
	Route::get('transaksi_umum/index', 'Transaksi_UmumController@index')->name('transaksi_umum.index');
	Route::get('transaksi_umum/index/{filter?}/{filtervalue?}', 'Transaksi_UmumController@index')->name('transaksi_umum.index');	
	Route::post('transaksi_umum/importdata', 'Transaksi_UmumController@importdata');	
	Route::get('transaksi_umum/view/{rec_id}', 'Transaksi_UmumController@view')->name('transaksi_umum.view');	
	Route::get('transaksi_umum/add', 'Transaksi_UmumController@add')->name('transaksi_umum.add');
	Route::post('transaksi_umum/store', 'Transaksi_UmumController@store')->name('transaksi_umum.store');
		
	Route::any('transaksi_umum/edit/{rec_id}', 'Transaksi_UmumController@edit')->name('transaksi_umum.edit');Route::any('transaksi_umum/editfield/{rec_id}', 'Transaksi_UmumController@editfield');	
	Route::get('transaksi_umum/delete/{rec_id}', 'Transaksi_UmumController@delete');

/* routes for Transaksi_Umum_Detail Controller */	
	Route::get('transaksi_umum_detail', 'Transaksi_Umum_DetailController@index')->name('transaksi_umum_detail.index');
	Route::get('transaksi_umum_detail/index', 'Transaksi_Umum_DetailController@index')->name('transaksi_umum_detail.index');
	Route::get('transaksi_umum_detail/index/{filter?}/{filtervalue?}', 'Transaksi_Umum_DetailController@index')->name('transaksi_umum_detail.index');	
	Route::post('transaksi_umum_detail/importdata', 'Transaksi_Umum_DetailController@importdata');	
	Route::get('transaksi_umum_detail/view/{rec_id}', 'Transaksi_Umum_DetailController@view')->name('transaksi_umum_detail.view');	
	Route::get('transaksi_umum_detail/add', 'Transaksi_Umum_DetailController@add')->name('transaksi_umum_detail.add');
	Route::post('transaksi_umum_detail/store', 'Transaksi_Umum_DetailController@store')->name('transaksi_umum_detail.store');
		
	Route::any('transaksi_umum_detail/edit/{rec_id}', 'Transaksi_Umum_DetailController@edit')->name('transaksi_umum_detail.edit');Route::any('transaksi_umum_detail/editfield/{rec_id}', 'Transaksi_Umum_DetailController@editfield');	
	Route::get('transaksi_umum_detail/delete/{rec_id}', 'Transaksi_Umum_DetailController@delete');

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