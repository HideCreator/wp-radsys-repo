<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * akun_email_value_exist Model Action
     * @return array
     */
	function akun_email_value_exist($val){
		$db = $this->GetModel();
		$db->where('email', $val);
		$exist = $db->has('akun');
		return $exist;
	}

	/**
     * akun_username_value_exist Model Action
     * @return array
     */
	function akun_username_value_exist($val){
		$db = $this->GetModel();
		$db->where('username', $val);
		$exist = $db->has('akun');
		return $exist;
	}

	/**
     * peserta_transport_pergi_option_list Model Action
     * @return array
     */
	function peserta_transport_pergi_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nama_transport_pergi AS value, concat('FROM ',nama_transport_pergi,' Cost: IDR ', format(harga,0), '') AS label FROM transport_pergi ORDER BY nama_transport_pergi ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * peserta_transport_pulang_option_list Model Action
     * @return array
     */
	function peserta_transport_pulang_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT nama_transport_pulang AS value, concat('TO ',nama_transport_pulang,' Cost: IDR ', format(harga,0)) AS label FROM transport_pulang ORDER BY nama_transport_pulang ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * peserta_paket_acara_option_list Model Action
     * @return array
     */
	function peserta_paket_acara_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT paket_acara AS value,paket_acara AS label FROM paket_acara ORDER BY paket_acara ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * peserta_kode_booking_option_list Model Action
     * @return array
     */
	function peserta_kode_booking_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT kode_booking AS value , kode_booking AS label FROM transaksi ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * peserta_nama_lengkap_value_exist Model Action
     * @return array
     */
	function peserta_nama_lengkap_value_exist($val){
		$db = $this->GetModel();
		$db->where('nama_lengkap', $val);
		$exist = $db->has('peserta');
		return $exist;
	}

	/**
     * transaksi_paket_acara_option_list Model Action
     * @return array
     */
	function transaksi_paket_acara_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT paket_acara AS value, concat(paket_acara,' IDR ',harga_paket_acara) AS label FROM `paket_acara` WHERE `tgl_mulai_daftar` <= now() AND `tgl_selesai_daftar` >= now() AND status LIKE 'active'";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * transport_pergi_paket_acara_option_list Model Action
     * @return array
     */
	function transport_pergi_paket_acara_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT paket_acara AS value,paket_acara AS label FROM paket_acara ORDER BY paket_acara";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * transport_pulang_paket_acara_option_list Model Action
     * @return array
     */
	function transport_pulang_paket_acara_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT paket_acara AS value,paket_acara AS label FROM paket_acara ORDER BY paket_acara";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * getcount_confirmed Model Action
     * @return Value
     */
	function getcount_confirmed(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM transaksi WHERE status='active' AND kd_akun='". USER_ID . "' AND konfirmasi_transfer LIKE 'Sudah Transfer'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_unpaid Model Action
     * @return Value
     */
	function getcount_unpaid(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM transaksi WHERE status='active' AND kd_akun='". USER_ID . "' AND konfirmasi_transfer LIKE 'Belum Transfer'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_ordercount Model Action
     * @return Value
     */
	function getcount_ordercount(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM transaksi WHERE status='active' AND kd_akun='". USER_ID . "'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_peserta Model Action
     * @return Value
     */
	function getcount_peserta(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM peserta  WHERE status='active' AND kd_akun='". USER_ID . "'";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
