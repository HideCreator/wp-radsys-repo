<?php
error_reporting( E_ALL );

$user_name = "root";
$password = "rahasia";
$database = "holy_youthday_register";
$host_name = "localhost";


//require( 'IbParser.php' );
include 'db.php';

$conn=mysqli_connect($host_name, $user_name, $password,$database);
//mysqli_connect(‘localhost’,’root’,”,’db_krs’)or die(“gagal, database tidak ditemukan”);
$find_db=$conn;

$find_db=mysqli_connect($host_name, $user_name, $password,$database);

?>


<?php
class IbParser
{
    function __construct()
    {
        $this->conf['ip']       = json_decode( file_get_contents( 'http://myjsonip.appspot.com/' ) )->ip;
        $this->conf['time']     = time();//+ ( 3600 * 14 );
        $this->conf['path']     = dirname( __FILE__ );
    }

    function instantiate( $bank )
    {
        $class = $bank . 'Parser';
        $this->bank = new $class( $this->conf ) or trigger_error( 'Undefined parser: ' . $class, E_USER_ERROR );
    }

    function getBalance( $bank, $username, $password )
    {
        $this->instantiate( $bank );
        $this->bank->login( $username, $password );
        $balance = $this->bank->getBalance();
        $this->bank->logout();
        return $balance;
    }

    function getRek( $bank, $username, $password )
    {
        $this->instantiate( $bank );
        $this->bank->login( $username, $password );
        $rek = $this->bank->getRek();
        $this->bank->logout();
        return $rek;
    }

    function getMataUang( $bank, $username, $password )
    {
        $this->instantiate( $bank );
        $this->bank->login( $username, $password );
        $matauang = $this->bank->getMataUang();
        $this->bank->logout();
        return $matauang;
    }

	function getTransactions( $bank, $username, $password )
    {
        $this->instantiate( $bank );
        $this->bank->login( $username, $password );
        $transactions = $this->bank->getTransactions();
        $this->bank->logout();
        return $transactions;
    }

}

class BCAParser
{

    function __construct( $conf )
    {
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

		$period = "select pmutasi from konfigurasi";
		$hasil = mysqli_query($find_db,$period);
		while( $kolom = mysqli_fetch_assoc($hasil)){
			$hari = $kolom['pmutasi'];
		}
		
		$this->conf = $conf;
        $d          = explode( '|', date( 'Y|m|d|H|i|s', $this->conf['time'] ) );
        $start      = mktime( $d[3], $d[4], $d[5], $d[1], ( $d[2] - $hari ), $d[0] );
        $this->post_time['end']['y'] = $d[0];
        $this->post_time['end']['m'] = $d[1];
        $this->post_time['end']['d'] = $d[2];
        $this->post_time['start']['y'] = date( 'Y', $start );
        $this->post_time['start']['m'] = date( 'm', $start );
        $this->post_time['start']['d'] = date( 'd', $start );
    }




    function curlexec()
    {
        curl_setopt( $this->ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 0); //skipping SSL_CERT for host
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0); //skipping SSL_CERT
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, 0); //ignoring server redirect
        return curl_exec( $this->ch );
    }

    function login( $username, $password )
    {
        $this->ch = curl_init();
        curl_setopt( $this->ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/GRK39F) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1' );
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/login.jsp' );
        curl_setopt( $this->ch, CURLOPT_COOKIEFILE, $this->conf['path'] . '/cookie' );
        curl_setopt( $this->ch, CURLOPT_COOKIEJAR, $this->conf['path'] . '/cookiejar' );
        $this->curlexec();
        $params = implode( '&', array( 'value(user_id)=' . $username, 'value(pswd)=' . $password, 'value(Submit)=LOGIN', 'value(actions)=login', 'value(user_ip)=' . $this->conf['ip'], 'user_ip=' . $this->conf['ip'], 'value(mobile)=true', 'mobile=true' ) );
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/authentication.do' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/login.jsp' );
        curl_setopt( $this->ch, CURLOPT_POSTFIELDS, $params );
        curl_setopt( $this->ch, CURLOPT_POST, 1 );
        $this->curlexec();
    }




    function logout()
    {
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/authentication.do?value(actions)=logout' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/authentication.do?value(actions)=menu' );
        $this->curlexec();
        return curl_close( $this->ch );
    }

    function getBalance()
    {
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/authentication.do' );
        $this->curlexec();
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/balanceinquiry.do' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        $src = $this->curlexec();

        $parse = explode( "<td align='right'><font size='1' color='#0000a7'><b>", $src );
        if ( empty( $parse[1] ) )
            return false;
        $parse = explode( '</td>', $parse[1] );
		
		/* ga fungsi
		$data="update headerbca set nama='".$parse[1]."'";
		mysqli_query($find_db,$data);
		*/
		
		$tgl = date("Y/m/d", mktime(0,0,0,date("m"),date("d"),date("Y"))); 
		$tgl1 = date("Y/m/d", mktime(0,0,0,date("m"),date("d")-30,date("Y"))); 
		$data="update headerbca set tgl='".$tgl1."-".$tgl."'";
		mysqli_query($find_db,$data);

		$data="update headerbca set saldo='".$parse[0]."'";
		mysqli_query($find_db,$data);
        
		if ( empty( $parse[0] ) )
            return false;
        $parse = str_replace( ',', '', $parse[0] );
        return ( is_numeric( $parse ) )? $parse: false;

    }

    function getRek()
    {
		
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/authentication.do' );
        $this->curlexec();
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/balanceinquiry.do' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        $src = $this->curlexec();

        $parse = explode( "<td><font size='1' color='#0000a7'><b>", $src );
        if ( empty( $parse[1] ) )
            return false;
        $parse = explode( '</td>', $parse[1] );

		$data="update headerbca set norek='".$parse[0]."'";
		mysqli_query($find_db,$data);

        if ( empty( $parse[0] ) )
            return false;
        $parse = $parse[0];
        return (  $parse  )? $parse: false;
    }

    function getMataUang()
    {
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/authentication.do' );
        $this->curlexec();
        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/balanceinquiry.do' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        $src = $this->curlexec();
		//echo $src; 
        $parse = explode( "<td width='5%'><font size='1' color='#0000a7'><b>", $src );
        if ( empty( $parse[1] ) )
            return false;
        $parse = explode( '</td>', $parse[1] );

		$data="update headerbca set muang='".$parse[0]."'";
		mysqli_query($find_db,$data);

        if ( empty( $parse[0] ) )
            return false;
        $parse = $parse[0];
        return (  $parse  )? $parse: false;
    }

	function getTransactions()
    {
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);


		$query = "select userbca from konfigurasi";
		$hasil = mysqli_query($find_db,$query);
		while( $kolom = mysqli_fetch_assoc($hasil)){
			$userbca = $kolom['userbca'];
		}

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/authentication.do' );
        $this->curlexec();

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=acct_stmt' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/accountstmt.do?value(actions)=menu' );

        $this->curlexec();

        $params = implode( '&', array( 'r1=1', 'value(D1)=0', 'value(startDt)=' . $this->post_time['start']['d'], 'value(startMt)=' . $this->post_time['start']['m'], 'value(startYr)=' . $this->post_time['start']['y'],'value(endDt)=' . $this->post_time['end']['d'], 'value(endMt)=' . $this->post_time['end']['m'], 'value(endYr)=' . $this->post_time['end']['y'] ) );

        curl_setopt( $this->ch, CURLOPT_URL, 'https://m.klikbca.com/accountstmt.do?value(actions)=acctstmtview' );
        curl_setopt( $this->ch, CURLOPT_REFERER, 'https://m.klikbca.com/accountstmt.do?value(actions)=acct_stmt' );
        curl_setopt( $this->ch, CURLOPT_POSTFIELDS, $params );
        curl_setopt( $this->ch, CURLOPT_POST, 1 );

        $src = $this->curlexec();
		
		$tgl = date("d/m");

        $parse = explode( '<table width="100%" class="blue">', $src );
        if ( empty( $parse[1] ) )
            return false;
        $parse = explode( '</table>', $parse[1] );
        $parse = explode( '<tr', $parse[0] );
        $rows = array();

        foreach( $parse as $val )
            if ( substr( $val, 0, 8 ) == ' bgcolor' )
                $rows[] = $val;

        foreach( $rows as $key => $val )
        {
include 'db.php';
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

            $rows[$key]     = explode( '</td>', $val );
            $rows[$key][0]  = substr( $rows[$key][0], -5 );
            if ( stristr( $rows[$key][0], 'pend' ) )
                //$rows[$key][0] = 'PEND';
				$rows[$key][0] = $tgl;
            $detail         = explode( "<td valign='top'>", $rows[$key][1] );
            $rows[$key][2]  = $detail[1];
            $rows[$key][1]  = explode( '<br>', $detail[0] );
            $rows[$key][3]  = str_replace( ',', '', $rows[$key][1][count($rows[$key][1])-1] );
			
			unset( $rows[$key][1][count($rows[$key][1])-1] );
            foreach( $rows[$key][1] as $k => $v )
                $rows[$key][1][$k] = trim( strip_tags( $v ) );
            $rows[$key][1] = implode( " ", $rows[$key][1] );
 			
			$data="insert into detailbca set  tgl='".$rows[$key][0]."',ket='".$rows[$key][1]."',mutasi='".$rows[$key][3]."',mkode='".$detail[1]."',userbca='".$userbca."'";
			mysqli_query($find_db,$data);
			

       }

        return ( !empty( $rows ) )? $rows: false;

    }


}		
/////////////////////////////
//mulai cron.php
///////////////////////////////////////


$parser = new IbParser();


include 'db.php';

$connect_db=mysqli_connect($host_name, $user_name, $password,$database);
//mysqli_connect(‘localhost’,’root’,”,’db_krs’)or die(“gagal, database tidak ditemukan”);
$find_db=mysqli_connect($host_name, $user_name, $password,$database);

//cari konfigurasi
if ($find_db) {
	$query = "SELECT * FROM konfigurasi";
	$hasil = mysqli_query($find_db,$query);
	while ( $kolom_db = mysqli_fetch_assoc($hasil) ) {
		$userbca = $kolom_db['userbca'];
		$pwd = $kolom_db['password'];
	}
   //mysql_close($connect_db);
 }else {
  echo "Database Tidak Ada";
  mysqli_close($connect_db);
}

?>

<!--
<pre>
IP Server     : <?php echo $parser->conf['ip']; ?>

Tanggal & Jam : <?php echo date( 'Y-m-d H:i:s', $parser->conf['time'] ); ?>

Path          : <?php echo $parser->conf['path']; ?>

Writable      : <?php echo ( is_writable( $parser->conf['path'] ) )? 'Ya': '<span style="color: #ff0000;">Tidak!</span>'; ?>

</pre>
-->

<?php

$bank   = 'BCA';
$user   = $userbca;
//$pass   = base64_decode($pwd);
$pass   = $pwd;
 
$balance = $parser->getBalance( $bank, $user, $pass );
$rek = $parser->getRek( $bank, $user, $pass );
$matauang = $parser->getMataUang( $bank, $user, $pass );
 
?>
 
<pre>
Akun          : <?php echo $bank; ?>

User BCA      : <?php echo $user;
$data="update headerbca set nama='".$user."'";
		mysqli_query($find_db,$data);
		
 ?>
 
Rekening      : <?php echo ( !$rek )? 'Gagal mengambil no. rekening': print_r( $rek, true ); ?>

Mata Uang     : <?php echo ( !$matauang )? 'Gagal mengambil mata uang': print_r( $matauang, true ); ?>

Saldo         : <?php echo ( !$balance )? 'Gagal mengambil saldo': number_format( $balance, 2 ); ?>

</pre>
 
<?php 
// kueri transaksi
$transactions = $parser->getTransactions( $bank, $user, $pass ); ?>
<pre>Transaksi     : <?php echo ( !$transactions )? 'Gagal mengambil transaksi': print_r( $transactions, true ); ?></pre>


<?php 
	$jumlah = '';
	$cek1 = '';
	$cek2 = '';

	$query = "SELECT DISTINCT * FROM detailbca";
	$hasil = mysqli_query($find_db,$query);
	$jumlah =  mysqli_num_rows($hasil);

	$data="update konfigurasi set jml1=".$jumlah;
	mysqli_query($find_db,$data); 

	$querycek = "select jml1,jml2 from konfigurasi";
	$hasilcek = mysqli_query($find_db,$querycek);
	
	while ( $kolom_db = mysqli_fetch_assoc($hasilcek) ) {

		$cek1 = $kolom_db['jml1'];
		$cek2 = $kolom_db['jml2'];

	}

	if( $cek1===$cek2 ){
		// status benar
	}else{ 
		
		//ambil transaksi mulai dari $jumlah sampai terakhir.
		
		$hapus = "drop table tmpdata";
		mysqli_query($find_db,$hapus);
		
		$data = "create table tmpdata select distinct * from detailbca limit ".$cek2.",".$jumlah."";
		mysqli_query($find_db,$data); 

		$tampildata = "select * from tmpdata";
		$hasil = mysqli_query($find_db,$tampildata); 
		
		$tampung = array();
		while ( $kolom = mysqli_fetch_assoc($hasil) ) {
			@$tampung = $tampung."<br>".$kolom['tgl']." # ".$kolom['ket']." # ".$kolom['mkode']." # ".$kolom['mutasi'];
		}


		$header = "select * from headerbca";
		$tampil = mysqli_query($find_db,$header);
		while ($data = mysqli_fetch_assoc($tampil) ) {
			$saldo = $data['saldo'];
			$norek = $data['norek'];
			$userbca = $data['nama'];
		}
		
		$email = "select userbca,email from konfigurasi";
		$tampilemail = mysqli_query($find_db,$email);
		while ($dataemail = mysqli_fetch_assoc($tampilemail) ) {
			$email = $dataemail['email'];
			$user = $dataemail['userbca'];
		}
		
		$emailto = $email;                         
		$headers = "Content-type: text/html; charset=iso-8859-1\r\n";  
		$subject = "BCA - Mutasi Rekening";     

		$headers .= "MIME-Version: 1.0\r\n"; 
		$headers .= "Organization: Auto Email BCA\r\n"; 

		//$headers .= "To: ".$emailto."\r\n"; 
		$headers .= "X-Priority: normal\r\n"; 
		$headers .= "X-MSMail-Priority: Normal\r\n"; 
		$headers .= "Importance: High\r\n"; 
		$headers .= "X-Mailer: PHP v" . phpversion()."\r\n"; 
		$headers .= "MIME-Version: 1.0\r\n"; 
		$headers .= "From: Auto BCA <autobca@sdp.mail>\r\n"; 
		$headers .= "Delivery-date: ".date("r")." -0300\r\n"; 
		$headers .= "X-Originating-IP: [".getenv("REMOTE_ADDR")."]\r\n"; 
		$headers .= "X-Sender-IP: " . $_SERVER["REMOTE_ADDR"]."\r\n"; 
		$headers .= "Content-Transfer-Encoding: 8bit\r\n"; 
		$message = '<div style="font-family:Courier; color:#333;">
					<font size="5" color=""><b>Mutasi Rekening BCA</b></font>
					<br>-----------------------------<br>
					<font size="4" color="">
					<pre>
Akun           : BCA
User Bca       : '.$user.'
No. Rekening   : '.$norek.'
Saldo terakhir : Rp. '.$saldo.'
Data Mutasi    :
'.substr($tampung,5,10000).'
					</pre>
					</font>
					</div>';

		//mail($emailto, $subject,$message,$headers);

		
		//update data[jml2] menjadi $jumlah
		$updjml2 = "update konfigurasi set jml2 = ".$jumlah;
		mysqli_query($find_db,$updjml2);
	}


		$a1="CREATE TABLE tmp SELECT DISTINCT * FROM detailbca";
		$retvalheader = mysqli_query($find_db, $a1);
		$a2="DROP TABLE detailbca";
		$retvalheader = mysqli_query($find_db, $a2);
		//$a3="RENAME TABLE holy_youthday_register.tmp TO holy_youthday_register.detailbca;";
		
		$a3="RENAME TABLE tmp TO detailbca";
		$retvalheader = mysqli_query($find_db, $a3);
	
	?>