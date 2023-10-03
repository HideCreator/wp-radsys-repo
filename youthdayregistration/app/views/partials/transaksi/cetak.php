
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('transaksi/add');
$can_edit = PageAccessManager::is_allowed('transaksi/edit');
$can_view = PageAccessManager::is_allowed('transaksi/view');
$can_delete = PageAccessManager::is_allowed('transaksi/delete');
?>

<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

//Page Data Information from Controller
$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router::$page_id; //Page id from url

$view_title = $this->view_title;

$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;

?>

<section class="page">
    
    <div  class="p-3 mb-3">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <div  class="p-3 mb-3">
        <div class="container-fluid">
            
            <div class="row mx-auto">
                
                <div class="col-md-12 comp-grid">
                    <div class="">      
                        <?php
                        $panjang="100%";
                        
                        ?>
                        <table id="divdomtbA1" class="table-borderless" width="<?php echo $panjang;?>">
                            <tr>
                                <td width="71px" >
                                    <img  src="<?php echo SITE_ADDR;?>assets\images\logo-dokumen-yd.png" height="69px" align="left" />  
                                    </td>
                                    
                                    <td align="right" width="180px" style="line-height: 1.1">
                                        <font style="font-size:12pt; font-weight:bold;">Electronic Receipt</font>
                                        <br>
                                            <font  style="font-size:10pt"><?php echo $data['timestamp_dibuat']; ?><br>
                                            No. <?php echo $data['kd_transaksi']; ?></font>
                                        </td>
                                        
                                    </tr>
                                </table>
                                
                                <table id="divdomtbA2" class="table-borderless" width="<?php echo $panjang;?>">
                                    <tr>
                                        <td width="105px" align="center" style="line-height: 1.2;">
                                            <font style="font-size:13px; font-weight:bold;line-height: 1;">Account Information</font>
                                            <br>
                                                Username: <?php //echo $data['kd_akun']; ?><?php echo $data['nama_akun']; ?><br>
                                                    Email: <?php echo $data['email_akun']; ?><br>
                                                        Telp: <?php echo $data['telp_akun']; ?><br>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <br>
                                                    <table id="divdomtbA3" class="table-borderless" width="<?php echo $panjang;?>">
                                                        <tr>
                                                            <td width="105px" align="center" style="line-height: 1.2;">
                                                                <div width="100px" height="100px" align="center" style="display: inline-block;height: 100px; width: 100px; overflow: hidden;" id="qrcodeA<?php echo $data['kode_booking']; ?>">
                                                                    </div><br>
                                                                    <font style="font-size:13px; font-weight:bold;line-height: 0.9;">Booking Code: <?php echo $data['kode_booking']; ?></font>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                        <br>
                                                            
                                                            <table id="divdomtbA4" class="table-borderless" width="<?php echo $panjang;?>">
                                                                <tr>
                                                                    <td width="105px" align="center" style="line-height: 1.2;">
                                                                        <font style="font-size:13px; font-weight:bold;line-height: 1;">Order Details</font>
                                                                        <br>
                                                                            Transfer Amount: <strong>Rp <?php echo $data['total_transfer']; ?>,-</strong><br>
                                                                                Status: <font color="GREEN"><b><?php echo $data['konfirmasi_transfer']; ?></b></font><br>
                                                                                    <!-- Transfer Expired: <?php echo $data['timestamp_expired']; ?><br>-->
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div  class="p-3 mb-3">
                                                            <div class="container-fluid">
                                                                
                                                                <div class="row ">
                                                                    
                                                                    <div class="col-md-12 comp-grid">
                                                                        
                                                                        <div class=" ">
                                                                            <?php  
                                                                            
                                                                            $this->render_page("peserta/listcetak/peserta.kd_transaksi/$data[kd_transaksi]?orderby=peserta.kd_peserta&ordertype=DESC&limit_count=50" , array( 'show_header' => false,'show_footer' => false,'show_pagination' => false )); 
                                                                            ?>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div  class="">
                                                            <div class="container-fluid">
                                                                
                                                                <div class="row ">
                                                                    
                                                                    <div class="col-md-12 comp-grid">
                                                                        <div class=""><center><table>
                                                                            <tr><td align="center" >
                                                                                <font style="font-size:12px;line-height: 1.0;">Barcode:<br></font>
                                                                                    <img id="barcode<?php echo $data['kode_booking']; ?>"/>
                                                                                        <br>
                                                                                            <font style="font-size:13px; font-weight:bold;line-height: 0.9;"><?php echo $data['kode_booking']; ?></font>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </center>
                                                                            <script src="<?php echo SITE_ADDR;?>assets/js/JsBarcode.all.js"></script>
                                                                            <script>
                                                                                JsBarcode("#barcode<?php echo $data['kode_booking']; ?>", "<?php echo $data['kode_booking']; ?>", {
                                                                                displayValue:false,
                                                                                format:"code128",
                                                                                height: 60,
                                                                                width:2,
                                                                                margin: 1,
                                                                                fontSize: 9,
                                                                                });
                                                                            </script>
                                                                            <script src="<?php echo SITE_ADDR;?>assets/js/qrcode.js"></script>
                                                                            <script type="text/javascript">
                                                                                var qrcodeA<?php echo $data['kode_booking'];?> = new QRCode(document.getElementById("qrcodeA<?php echo $data['kode_booking'];?>"), {
                                                                                text: "<?php echo $data['kode_booking'];?>",
                                                                                width: 100,
                                                                                height: 100,
                                                                                colorDark : "#000000",
                                                                                colorLight : "#ffffff",
                                                                                correctLevel : QRCode.CorrectLevel.M
                                                                                });
                                                                            </script>
                                                                            
                                                                            <script type="application/javascript">
                                                                                document.getElementById("topbar").innerHTML = "";
                                                                                var x = document.getElementById("topbar");
                                                                                var y = x.getElementsByClassName("img-responsive");
                                                                                var i;
                                                                                for (i = 0; i < y.length; i++) {y[i].hidden = true;}
                                                                                
                                                                                var z = x.getElementsByClassName("navbar-brand");
                                                                                i;
                                                                                for (i = 0; i < z.length; i++) {z[i].hidden = true;z[i].innerHTML = "";}
                                                                            </script>
                                                                            <script type="application/javascript">
                                                                                var list = document.getElementById("topbar");
                                                                                list.removeChild(list.childNodes[0]);
                                                                                list.parentNode.removeChild(list);
                                                                                
                                                                                var toRemove = document.getElementById('topbar');
                                                                                toRemove.parentNode.removeChild(toRemove);
                                                                            </script>
                                                                            
                                                                            
                                                                            <?php exit;?>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div  class="">
                                                            <div class="container-fluid">
                                                                
                                                                <div class="row ">
                                                                    
                                                                    <div class="col-md-12 comp-grid">
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </section>
                                                    