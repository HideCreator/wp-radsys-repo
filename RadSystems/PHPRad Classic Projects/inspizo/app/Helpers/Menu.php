
<?php
	class Menu{
		
	public static function navbarsideleft(){
		return [
		[
			'path' => 'home',
			'label' => "Home", 
			'icon' => '<i class="material-icons ">home</i>'
		],
		
		[
			'path' => 'agenda',
			'label' => "Agenda", 
			'icon' => '<i class="material-icons ">event_note</i>'
		],
		
		[
			'path' => 'pelanggan',
			'label' => "Pelanggan", 
			'icon' => '<i class="material-icons ">people</i>'
		],
		
		[
			'path' => 'pengguna',
			'label' => "Pengguna", 
			'icon' => '<i class="material-icons ">person</i>'
		],
		
		[
			'path' => 'presensi',
			'label' => "Presensi", 
			'icon' => '<i class="material-icons ">event</i>'
		],
		
		[
			'path' => 'dinas',
			'label' => "Dinas", 
			'icon' => '<i class="material-icons ">business_center</i>'
		],
		
		[
			'path' => 'inventaris',
			'label' => "Inventaris", 
			'icon' => '<i class="material-icons ">build</i>'
		]
	] ;
	}
	
		
	public static function jenis_usaha(){
		return [
		[
			'value' => 'Perusahaan', 
			'label' => "Perusahaan", 
		],
		[
			'value' => 'Rumah', 
			'label' => "Rumah", 
		],
		[
			'value' => 'None', 
			'label' => "None", 
		],] ;
	}
	
	public static function keterangan(){
		return [
		[
			'value' => 'SAKIT', 
			'label' => "SAKIT", 
		],
		[
			'value' => 'IJIN', 
			'label' => "IJIN", 
		],] ;
	}
	
	public static function keterangan2(){
		return [] ;
	}
	
	public static function status_dinas(){
		return [
		[
			'value' => 'DINAS', 
			'label' => "DINAS", 
		],
		[
			'value' => 'OFFICE', 
			'label' => "OFFICE", 
		],] ;
	}
	
	}
