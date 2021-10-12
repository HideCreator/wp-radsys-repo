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



	Route::get('', 'IndexController@index')->name('index');
	Route::get('index/login', 'IndexController@login')->name('login');
	
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::any('auth/logout', 'AuthController@logout')->name('logout')->middleware(['auth']);


	
	Route::get('auth/register', 'AuthController@register')->name('auth.register');
	Route::post('auth/register_store', 'AuthController@register_store')->name('auth.register_store');
		
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::get('auth/password/forgotpassword', 'AuthController@showForgotPassword')->name('password.forgotpassword');
	Route::post('auth/password/sendemail', 'AuthController@sendPasswordResetLink')->name('password.email');
	Route::get('auth/password/reset', 'AuthController@showResetPassword')->name('password.reset.token');
	Route::post('auth/password/resetpassword', 'AuthController@resetPassword')->name('password.resetpassword');
	Route::get('auth/password/resetcompleted', 'AuthController@passwordResetCompleted')->name('password.resetcompleted');
	Route::get('auth/password/linksent', 'AuthController@passwordResetLinkSent')->name('password.resetlinksent');
	

/**
 * All routes which requires auth
 */
Route::middleware(['auth', 'rbac'])->group(function () {
		
	Route::get('home', 'HomeController@index')->name('home');

	

/* routes for Agenda Controller */	
	Route::get('agenda', 'AgendaController@index')->name('agenda.index');
	Route::get('agenda/index', 'AgendaController@index')->name('agenda.index');
	Route::get('agenda/index/{filter?}/{filtervalue?}', 'AgendaController@index')->name('agenda.index');	
	Route::get('agenda/view/{rec_id}', 'AgendaController@view')->name('agenda.view');	
	Route::get('agenda/add', 'AgendaController@add')->name('agenda.add');
	Route::post('agenda/store', 'AgendaController@store')->name('agenda.store');
		
	Route::any('agenda/edit/{rec_id}', 'AgendaController@edit')->name('agenda.edit');	
	Route::get('agenda/delete/{rec_id}', 'AgendaController@delete');

/* routes for Pelanggan Controller */	
	Route::get('pelanggan', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index', 'PelangganController@index')->name('pelanggan.index');
	Route::get('pelanggan/index/{filter?}/{filtervalue?}', 'PelangganController@index')->name('pelanggan.index');	
	Route::get('pelanggan/view/{rec_id}', 'PelangganController@view')->name('pelanggan.view');	
	Route::get('pelanggan/add', 'PelangganController@add')->name('pelanggan.add');
	Route::post('pelanggan/store', 'PelangganController@store')->name('pelanggan.store');
		
	Route::any('pelanggan/edit/{rec_id}', 'PelangganController@edit')->name('pelanggan.edit');	
	Route::get('pelanggan/delete/{rec_id}', 'PelangganController@delete');

/* routes for Pengguna Controller */	
	Route::get('pengguna', 'PenggunaController@index')->name('pengguna.index');
	Route::get('pengguna/index', 'PenggunaController@index')->name('pengguna.index');
	Route::get('pengguna/index/{filter?}/{filtervalue?}', 'PenggunaController@index')->name('pengguna.index');	
	Route::get('pengguna/view/{rec_id}', 'PenggunaController@view')->name('pengguna.view');	
	Route::any('account/edit', 'AccountController@edit')->name('account.edit');	
	Route::get('account', 'AccountController@index');	
	Route::post('account/changepassword', 'AccountController@changepassword')->name('account.changepassword');	
	Route::get('pengguna/add', 'PenggunaController@add')->name('pengguna.add');
	Route::post('pengguna/store', 'PenggunaController@store')->name('pengguna.store');
		
	Route::any('pengguna/edit/{rec_id}', 'PenggunaController@edit')->name('pengguna.edit');	
	Route::get('pengguna/delete/{rec_id}', 'PenggunaController@delete');

/* routes for Presensi Controller */	
	Route::get('presensi', 'PresensiController@index')->name('presensi.index');
	Route::get('presensi/index', 'PresensiController@index')->name('presensi.index');
	Route::get('presensi/index/{filter?}/{filtervalue?}', 'PresensiController@index')->name('presensi.index');	
	Route::get('presensi/view/{rec_id}', 'PresensiController@view')->name('presensi.view');	
	Route::get('presensi/add', 'PresensiController@add')->name('presensi.add');
	Route::post('presensi/store', 'PresensiController@store')->name('presensi.store');
		
	Route::any('presensi/edit/{rec_id}', 'PresensiController@edit')->name('presensi.edit');	
	Route::get('presensi/delete/{rec_id}', 'PresensiController@delete');	
	Route::get('presensi/attend', 'PresensiController@attend')->name('presensi.attend');
	Route::post('presensi/attend_store', 'PresensiController@attend_store')->name('presensi.attend_store');
		
	Route::get('presensi/leave', 'PresensiController@leave')->name('presensi.leave');
	Route::post('presensi/leave_store', 'PresensiController@leave_store')->name('presensi.leave_store');
	

/* routes for Model_Has_Permissions Controller */	
	Route::get('model_has_permissions', 'Model_Has_PermissionsController@index')->name('model_has_permissions.index');
	Route::get('model_has_permissions/index', 'Model_Has_PermissionsController@index')->name('model_has_permissions.index');
	Route::get('model_has_permissions/index/{filter?}/{filtervalue?}', 'Model_Has_PermissionsController@index')->name('model_has_permissions.index');	
	Route::get('model_has_permissions/view/{rec_id}', 'Model_Has_PermissionsController@view')->name('model_has_permissions.view');	
	Route::get('model_has_permissions/add', 'Model_Has_PermissionsController@add')->name('model_has_permissions.add');
	Route::post('model_has_permissions/store', 'Model_Has_PermissionsController@store')->name('model_has_permissions.store');
		
	Route::any('model_has_permissions/edit/{rec_id}', 'Model_Has_PermissionsController@edit')->name('model_has_permissions.edit');	
	Route::get('model_has_permissions/delete/{rec_id}', 'Model_Has_PermissionsController@delete');

/* routes for Model_Has_Roles Controller */	
	Route::get('model_has_roles', 'Model_Has_RolesController@index')->name('model_has_roles.index');
	Route::get('model_has_roles/index', 'Model_Has_RolesController@index')->name('model_has_roles.index');
	Route::get('model_has_roles/index/{filter?}/{filtervalue?}', 'Model_Has_RolesController@index')->name('model_has_roles.index');	
	Route::get('model_has_roles/view/{rec_id}', 'Model_Has_RolesController@view')->name('model_has_roles.view');	
	Route::get('model_has_roles/add', 'Model_Has_RolesController@add')->name('model_has_roles.add');
	Route::post('model_has_roles/store', 'Model_Has_RolesController@store')->name('model_has_roles.store');
		
	Route::any('model_has_roles/edit/{rec_id}', 'Model_Has_RolesController@edit')->name('model_has_roles.edit');	
	Route::get('model_has_roles/delete/{rec_id}', 'Model_Has_RolesController@delete');

/* routes for Permissions Controller */	
	Route::get('permissions', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index')->name('permissions.index');	
	Route::get('permissions/view/{rec_id}', 'PermissionsController@view')->name('permissions.view');	
	Route::get('permissions/add', 'PermissionsController@add')->name('permissions.add');
	Route::post('permissions/store', 'PermissionsController@store')->name('permissions.store');
		
	Route::any('permissions/edit/{rec_id}', 'PermissionsController@edit')->name('permissions.edit');	
	Route::get('permissions/delete/{rec_id}', 'PermissionsController@delete');

/* routes for Role_Has_Permissions Controller */	
	Route::get('role_has_permissions', 'Role_Has_PermissionsController@index')->name('role_has_permissions.index');
	Route::get('role_has_permissions/index', 'Role_Has_PermissionsController@index')->name('role_has_permissions.index');
	Route::get('role_has_permissions/index/{filter?}/{filtervalue?}', 'Role_Has_PermissionsController@index')->name('role_has_permissions.index');	
	Route::get('role_has_permissions/view/{rec_id}', 'Role_Has_PermissionsController@view')->name('role_has_permissions.view');	
	Route::get('role_has_permissions/add', 'Role_Has_PermissionsController@add')->name('role_has_permissions.add');
	Route::post('role_has_permissions/store', 'Role_Has_PermissionsController@store')->name('role_has_permissions.store');
		
	Route::any('role_has_permissions/edit/{rec_id}', 'Role_Has_PermissionsController@edit')->name('role_has_permissions.edit');	
	Route::get('role_has_permissions/delete/{rec_id}', 'Role_Has_PermissionsController@delete');

/* routes for Roles Controller */	
	Route::get('roles', 'RolesController@index')->name('roles.index');
	Route::get('roles/index', 'RolesController@index')->name('roles.index');
	Route::get('roles/index/{filter?}/{filtervalue?}', 'RolesController@index')->name('roles.index');	
	Route::get('roles/view/{rec_id}', 'RolesController@view')->name('roles.view');	
	Route::get('roles/add', 'RolesController@add')->name('roles.add');
	Route::post('roles/store', 'RolesController@store')->name('roles.store');
		
	Route::any('roles/edit/{rec_id}', 'RolesController@edit')->name('roles.edit');	
	Route::get('roles/delete/{rec_id}', 'RolesController@delete');

/* routes for Dinas Controller */	
	Route::get('dinas', 'DinasController@index')->name('dinas.index');
	Route::get('dinas/index', 'DinasController@index')->name('dinas.index');
	Route::get('dinas/index/{filter?}/{filtervalue?}', 'DinasController@index')->name('dinas.index');	
	Route::get('dinas/view/{rec_id}', 'DinasController@view')->name('dinas.view');	
	Route::get('dinas/add', 'DinasController@add')->name('dinas.add');
	Route::post('dinas/store', 'DinasController@store')->name('dinas.store');
		
	Route::any('dinas/edit/{rec_id}', 'DinasController@edit')->name('dinas.edit');	
	Route::get('dinas/delete/{rec_id}', 'DinasController@delete');	
	Route::get('dinas/back', 'DinasController@back')->name('dinas.back');
	Route::post('dinas/back_store', 'DinasController@back_store')->name('dinas.back_store');
	

/* routes for Inventaris Controller */	
	Route::get('inventaris', 'InventarisController@index')->name('inventaris.index');
	Route::get('inventaris/index', 'InventarisController@index')->name('inventaris.index');
	Route::get('inventaris/index/{filter?}/{filtervalue?}', 'InventarisController@index')->name('inventaris.index');	
	Route::get('inventaris/view/{rec_id}', 'InventarisController@view')->name('inventaris.view');	
	Route::get('inventaris/add', 'InventarisController@add')->name('inventaris.add');
	Route::post('inventaris/store', 'InventarisController@store')->name('inventaris.store');
		
	Route::any('inventaris/edit/{rec_id}', 'InventarisController@edit')->name('inventaris.edit');	
	Route::get('inventaris/delete/{rec_id}', 'InventarisController@delete');
});

	
Route::get('componentsdata/id_pelanggan_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->id_pelanggan_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/pelanggan_telp_value_exist',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->pelanggan_telp_value_exist($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/pengguna_username_value_exist',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->pengguna_username_value_exist($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/id_pengguna_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->id_pengguna_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/nama_balat_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->nama_balat_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/mengetahui_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->mengetahui_option_list($request);
	}
)->middleware(['auth']);


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