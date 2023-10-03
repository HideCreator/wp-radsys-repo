<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
	public static $navbartopleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'akun', 
			'label' => 'Account', 
			'icon' => '<i class="fa fa-user-secret "></i>'
		),
		
		array(
			'path' => 'paket_acara', 
			'label' => 'Event', 
			'icon' => '<i class="fa fa-connectdevelop "></i>'
		),
		
		array(
			'path' => 'transaksi', 
			'label' => 'Order List', 
			'icon' => '<i class="fa fa-shopping-cart "></i>','submenu' => array(
		array(
			'path' => 'transaksi/', 
			'label' => 'Order List Admin', 
			'icon' => '<i class="fa fa-shopping-cart "></i>'
		),
		
		array(
			'path' => 'peserta/', 
			'label' => 'Participant', 
			'icon' => '<i class="fa fa-users "></i>'
		)
	)
		),
		
		array(
			'path' => 'detailbca/', 
			'label' => 'Bank', 
			'icon' => '<i class="fa fa-money "></i>','submenu' => array(
		array(
			'path' => 'detailbca', 
			'label' => 'Mutasi', 
			'icon' => ''
		),
		
		array(
			'path' => 'verifikasi', 
			'label' => 'Verifikasi Transfer', 
			'icon' => ''
		),
		
		array(
			'path' => 'headerbca', 
			'label' => 'Informasi Rekening', 
			'icon' => ''
		),
		
		array(
			'path' => 'konfigurasi', 
			'label' => 'Konfigurasi Rekening', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'transport_pergi/', 
			'label' => 'Transport', 
			'icon' => '<i class="fa fa-car "></i>','submenu' => array(
		array(
			'path' => 'transport_pergi', 
			'label' => 'Transport Pergi', 
			'icon' => '<i class="fa fa-angle-double-right "></i>'
		),
		
		array(
			'path' => 'transport_pulang', 
			'label' => 'Transport Pulang', 
			'icon' => '<i class="fa fa-angle-double-left "></i>'
		)
	)
		),
		
		array(
			'path' => 'transaksi/ListPartcipant', 
			'label' => 'My Order List', 
			'icon' => '<i class="fa fa-shopping-cart "></i>'
		)
	);

	
	
	public static $kd_akun = array();

	public static $role = array(
		array(
			"value" => "Participant", 
			"label" => "Participant", 
		),
		array(
			"value" => "Sekretariat", 
			"label" => "Sekretariat", 
		),
		array(
			"value" => "Transport", 
			"label" => "Transport", 
		),
		array(
			"value" => "Panitia", 
			"label" => "Panitia", 
		),
		array(
			"value" => "Administrator", 
			"label" => "Administrator", 
		),);

	public static $jenis_kelamin = array(
		array(
			"value" => "Male", 
			"label" => "Male", 
		),
		array(
			"value" => "Female", 
			"label" => "Female", 
		),);

	public static $asal_sel_komunitas = array(
		array(
			"value" => "KTM", 
			"label" => "KTM", 
		),
		array(
			"value" => "Non KTM", 
			"label" => "Non KTM", 
		),);

	public static $asal_negara = array(
		array(
			"value" => "Indonesia", 
			"label" => "Indonesia", 
		),
		array(
			"value" => "Germany", 
			"label" => "Germany", 
		),
		array(
			"value" => "Australia", 
			"label" => "Australia", 
		),
		array(
			"value" => "Singapore", 
			"label" => "Singapore", 
		),
		array(
			"value" => "China", 
			"label" => "China", 
		),
		array(
			"value" => "United States", 
			"label" => "United States", 
		),
		array(
			"value" => "Malaysia", 
			"label" => "Malaysia", 
		),
		array(
			"value" => "Vietnam", 
			"label" => "Vietnam", 
		),
		array(
			"value" => "Italia", 
			"label" => "Italia", 
		),
		array(
			"value" => "Taiwan", 
			"label" => "Taiwan", 
		),);

	public static $konfirmasi_transfer = array(
		array(
			"value" => "none", 
			"label" => "none", 
		),
		array(
			"value" => "Confirmed", 
			"label" => "Confirmed", 
		),);

	public static $verfikasi_lunas = array(
		array(
			"value" => "none", 
			"label" => "none", 
		),
		array(
			"value" => "Verified", 
			"label" => "Verified", 
		),);

}