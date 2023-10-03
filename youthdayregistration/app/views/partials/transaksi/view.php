
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
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-3 ">
                    <h4 class="record-title">Order Details</h4>
                    
                </div>
                
                <div class="col-md-9 comp-grid">
                    <div class=""><div class="row ">
                        
                        <?php
                        // jika sudah transfer atau Confirmed
                        if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?>
                        <div class="col">
                            <table style="background: #fff;display: inline-block;padding: 8px 10px;padding-right: 10px;padding-left: 8px;color: black;"><tr><td>
                                <font style="color:red;font-size:15pt; border: 2px dashed black; margin: 3px;text-align: center;"><b> Confirmed </b></font>
                            </td></tr></table>
                        </div>
                        
                        <?php } else { ?>
                        
                        <div class="col">
                            <a class="btn btn-small btn-danger record-delete-btn"  href="<?php echo SITE_ADDR;?>transaksi/delete/<?php echo $data['kd_transaksi']; ?>?csrf_token=<?php echo Csrf :: $token;?>" data-prompt-msg="Yakin ingin dihapus?" data-display-style="confirm">
                            <i class="fa fa-eraser "></i>  Cancel Order</a>
                        </div>
                        
                        <div class="col">
                            <a class="btn btn-small btn-success" href="<?php echo SITE_ADDR;?>peserta/add?kd_transaksi=<?php echo $data['kd_transaksi']; ?>&kode_booking=<?php echo $data['kode_booking']; ?>&paket_acara=<?php echo $data['paket_acara']; ?>">
                            <i class="fa fa-user-plus "></i> Add more participants</a>
                        </div>
                        
                        
                        
                        <?php } ?>
                        
                        
                        <?php if ($data['qty_peserta']>0){ ?>
                        <div class="col">
                            <a class="btn btn-small btn-warning"  href="<?php echo SITE_ADDR;?>transaksi/Konfirmasi/<?php echo $data['kd_transaksi']; ?>" >
                            <i class="fa fa-edit "></i> <?php if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){}else {?> Checkout <?php } ?>Payment <?php if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?>Re-<?php } ?>Confirmation</a>
                        </div>
                        <?php } ?>
                        
                        <?php if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?>
                        <div class="col">
                            <a class="btn btn-small btn-info" target="_blank" href="<?php echo SITE_ADDR;?>transaksi/cetak/<?php echo $data['kd_transaksi']; ?>">
                            <i class="fa fa-print "></i>  Print E-Ticket</a>
                        </div>
                        <?php } ?>
                        
                    </div></div>
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    <div class=""><div>
                        <style>
                            .flexer,
                            .progress-indicator {
                            display: -webkit-box;
                            display: -moz-box;
                            display: -ms-flexbox;
                            display: -webkit-flex;
                            display: flex
                            }
                            
                            .no-flexer,
                            .progress-indicator.stacked {
                            display: block
                            }
                            
                            .no-flexer-element {
                            -ms-flex: 0;
                            -webkit-flex: 0;
                            -moz-flex: 0;
                            flex: 0
                            }
                            
                            .flexer-element,
                            .progress-indicator>li {
                            -ms-flex: 1;
                            -webkit-flex: 1;
                            -moz-flex: 1;
                            flex: 1
                            }
                            
                            .progress-indicator {
                            margin: 0 0 1em;
                            padding: 0;
                            font-size: 80%;
                            text-transform: uppercase
                            }
                            
                            .progress-indicator>li {
                            list-style: none;
                            text-align: center;
                            width: auto;
                            padding: 0;
                            margin: 0;
                            position: relative;
                            text-overflow: ellipsis;
                            color: #bbb;
                            display: block
                            }
                            
                            .progress-indicator>li:hover {
                            color: #6f6f6f
                            }
                            
                            .progress-indicator>li.completed,
                            .progress-indicator>li.completed .bubble {
                            color: #65d074
                            }
                            
                            .progress-indicator>li .bubble {
                            border-radius: 1000px;
                            width: 20px;
                            height: 20px;
                            background-color: #bbb;
                            display: block;
                            margin: 0 auto .5em;
                            border-bottom: 1px solid #888
                            }
                            
                            .progress-indicator>li .bubble:after,
                            .progress-indicator>li .bubble:before {
                            display: block;
                            position: absolute;
                            top: 9px;
                            width: 100%;
                            height: 3px;
                            content: '';
                            background-color: #bbb
                            }
                            
                            .progress-indicator>li.completed .bubble,
                            .progress-indicator>li.completed .bubble:after,
                            .progress-indicator>li.completed .bubble:before {
                            background-color: #65d074;
                            border-color: #247830
                            }
                            
                            .progress-indicator>li .bubble:before {
                            left: 0
                            }
                            
                            .progress-indicator>li .bubble:after {
                            right: 0
                            }
                            
                            .progress-indicator>li:first-child .bubble:after,
                            .progress-indicator>li:first-child .bubble:before {
                            width: 50%;
                            margin-left: 50%
                            }
                            
                            .progress-indicator>li:last-child .bubble:after,
                            .progress-indicator>li:last-child .bubble:before {
                            width: 50%;
                            margin-right: 50%
                            }
                            
                            .progress-indicator>li.active,
                            .progress-indicator>li.active .bubble {
                            color: #337AB7
                            }
                            
                            .progress-indicator>li.active .bubble,
                            .progress-indicator>li.active .bubble:after,
                            .progress-indicator>li.active .bubble:before {
                            background-color: #337AB7;
                            border-color: #122a3f
                            }
                            
                            .progress-indicator>li a:hover .bubble,
                            .progress-indicator>li a:hover .bubble:after,
                            .progress-indicator>li a:hover .bubble:before {
                            background-color: #5671d0;
                            border-color: #1f306e
                            }
                            
                            .progress-indicator>li a:hover .bubble {
                            color: #5671d0
                            }
                            
                            .progress-indicator>li.danger .bubble,
                            .progress-indicator>li.danger .bubble:after,
                            .progress-indicator>li.danger .bubble:before {
                            background-color: #d3140f;
                            border-color: #440605
                            }
                            
                            .progress-indicator>li.danger .bubble {
                            color: #d3140f
                            }
                            
                            .progress-indicator>li.warning .bubble,
                            .progress-indicator>li.warning .bubble:after,
                            .progress-indicator>li.warning .bubble:before {
                            background-color: #edb10a;
                            border-color: #5a4304
                            }
                            
                            .progress-indicator>li.warning .bubble {
                            color: #edb10a
                            }
                            
                            .progress-indicator>li.info .bubble,
                            .progress-indicator>li.info .bubble:after,
                            .progress-indicator>li.info .bubble:before {
                            background-color: #5b32d6;
                            border-color: #25135d
                            }
                            
                            .progress-indicator>li.info .bubble {
                            color: #5b32d6
                            }
                            
                            .progress-indicator.stacked>li {
                            text-indent: -10px;
                            text-align: center;
                            display: block
                            }
                            
                            .progress-indicator.stacked>li .bubble:after,
                            .progress-indicator.stacked>li .bubble:before {
                            left: 50%;
                            margin-left: -1.5px;
                            width: 3px;
                            height: 100%
                            }
                            
                            .progress-indicator.stacked .stacked-text {
                            position: relative;
                            z-index: 10;
                            top: 0;
                            margin-left: 60%!important;
                            width: 45%!important;
                            display: inline-block;
                            text-align: left;
                            line-height: 1.2em
                            }
                            
                            .progress-indicator.stacked>li a {
                            border: none
                            }
                            
                            .progress-indicator.stacked.nocenter>li .bubble {
                            margin-left: 0;
                            margin-right: 0
                            }
                            
                            .progress-indicator.stacked.nocenter>li .bubble:after,
                            .progress-indicator.stacked.nocenter>li .bubble:before {
                            left: 10px
                            }
                            
                            .progress-indicator.stacked.nocenter .stacked-text {
                            width: auto!important;
                            display: block;
                            margin-left: 40px!important
                            }
                            
                            @media handheld,
                            screen and (max-width:400px) {
                            .progress-indicator {
                            font-size: 60%
                            }
                            }
                        </style>
                        <ul class="progress-indicator">
                            <li class="completed">
                                <span class="bubble"></span>
                                <b>Step 1<br>Create Order</b>
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                </li>
                                <li class="<?php if ($data['qty_peserta']>0){echo 'completed';} else {}?>">
                                    <span class="bubble"></span>
                                    <b>Step 2<br>Add Participant</b>
                                    </li>
                                    <li class=" <?php
                                        // jika sudah transfer atau Confirmed
                                        if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ echo 'completed';} else {if ($data['qty_peserta']>0){echo 'active';} else {}}?>">
                                        <span class="bubble"></span>
                                    </li>
                                    <li class="<?php
                                        // jika sudah transfer atau Confirmed
                                        if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ echo 'completed';} else { echo '';}?>">
                                        <span class="bubble"></span>
                                        <b>Step 3<br>Payment Confirmation</b>
                                        </li>
                                        <li class="<?php
                                            // jika sudah transfer atau Confirmed
                                            if ($data['konfirmasi_transfer']=='Confirmed' && $data['verfikasi_lunas']=='none' ){ echo 'active';} 
                                            else if ($data['konfirmasi_transfer']=='none' && $data['verfikasi_lunas']=='none' ){ echo '';} 
                                            else if ($data['konfirmasi_transfer']=='Sudah Transfer' && $data['verfikasi_lunas']=='Belum Diverifikasi' ){ echo 'active';} 
                                            else if ($data['konfirmasi_transfer']=='Belum Transfer' && $data['verfikasi_lunas']=='Belum Diverifikasi' ){ echo '';} 
                                            else if ($data['verfikasi_lunas']=='Verified' || $data['verfikasi_lunas']=='Terverifikasi' ){ echo 'completed';}
                                            else {echo 'active';}
                                            
                                            
                                            ?>">
                                            <span class="bubble"></span>
                                        </li>
                                        <li class="<?php
                                            // jika sudah transfer atau Confirmed
                                            if ($data['verfikasi_lunas']=='Verified' || $data['verfikasi_lunas']=='Terverifikasi' || $data['verfikasi_lunas']=='Lunas'){ echo 'completed';} else {echo '';}?>">
                                            <span class="bubble"></span>
                                            <b>Step 4<br>Verification</b>
                                            </li>
                                        </ul>
                                        
                                        
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div  class="">
                    <div class="container">
                        
                        <div class="row mx-auto">
                            
                            <div class="col-md-12 comp-grid">
                                <div class=""><center>
                                    
                                    
                                    <div class="row">
                                        
                                        <div class="col">
                                            
                                            
                                            
                                            <table style="background: #f9e0ae;
                                                display: inline-block;
                                                padding: 15px 25px;
                                                padding-right: 20px;
                                                padding-left: 20px;
                                                border-radius: 5px;color: black;">
                                                
                                                
                                                <?php
                                                // jika sudah transfer atau Confirmed
                                                if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?>
                                                <tr>
                                                    <td colspan="2">
                                                    Thank you for confirming the payment you have uploaded</td>
                                                </tr>
                                                <!--
                                                <tr>
                                                    <td style="font-weight: 700;">Confirmation</td><td style="text-align:right;"><?php echo $data['konfirmasi_transfer'];?></td>
                                                </tr>-->
                                                <tr>
                                                    <td style="font-weight: 700;">Verification status</td><td style="text-align:right;"><?php echo $data['verfikasi_lunas'];?></td>
                                                </tr>
                                                <?php } else if ($data['qty_peserta']>0){ ?>
                                                <tr>
                                                    <td style="font-weight: 500;" colspan="2">
                                                        Please complete payment by bank transfer:
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 500;" >BANK</td><td>BCA</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 500;" >Acc. Num.</td><td>5235 135 768</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 500;" >Acc.Name</td><td>Evy Christina Setiawan</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td style="font-weight: 700;">Payment Amount</td>
                                                    <td style="text-align:center;font-size:20px;"><b>IDR  <?php echo approximate($data['total_transfer'],0);?>.00</b>
                                                        <br>
                                                            <p style="text-align:center;">Indonesian Rupiah</p>
                                                        </td>
                                                    </tr>
                                                    
                                                    <!--
                                                    <tr>
                                                        <td style="font-weight: 500;" >Expired</td><td align="center"><br><?php echo $data['timestamp_expired']; ?><br>
                                                            
                                                            <?php
                                                            
                                                            
                                                            
                                                            $b=date("M d, Y H:i:s", strtotime($data['timestamp_expired']));
                                                            ?>
                                                            <script type="application/javascript">
                                                                const second = 1000,
                                                                minute = second * 60,
                                                                hour = minute * 60,
                                                                day = hour * 24;
                                                                
                                                                let countDown = new Date('<?php echo $b;?>').getTime(),
                                                                x = setInterval(function() {
                                                                
                                                                let now = new Date().getTime(),
                                                                distance = countDown - now;
                                                                
                                                                document.getElementById('days').innerText = Math.floor(distance / (day)),
                                                                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                                                                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                                                                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
                                                                
                                                                
                                                                
                                                                }, second);
                                                                
                                                            </script>
                                                            
                                                            <div class="container" style="color:black; box-sizing: border-box;
                                                                margin: 0;  padding: 0;">
                                                                
                                                                <ul>
                                                                    <li style="display: inline-block; font-size: 0.5em;  list-style-type: none;  padding: 1em;  text-transform: uppercase;">
                                                                    <span style="  display: block;  font-size: 2.5rem;" id="days"></span>days</li>
                                                                    
                                                                    <li style="display: inline-block;  font-size: 0.5em;  list-style-type: none;  padding: 1em;  text-transform: uppercase;">
                                                                    <span style="  display: block;  font-size: 2.5rem;"  id="hours"></span>Hours</li>
                                                                    
                                                                    <li style="display: inline-block;  font-size: 0.5em;  list-style-type: none;  padding: 1em;  text-transform: uppercase;">
                                                                    <span style=" display: block;  font-size: 2.5rem;"  id="minutes"></span>Minutes</li>
                                                                    
                                                                    <li style="display: inline-block;  font-size: 0.5em;  list-style-type: none;  padding: 1em;  text-transform: uppercase;">
                                                                    <span style=" display: block;  font-size: 2.5rem;"  id="seconds"></span>Seconds</li>
                                                                </ul>
                                                            </div>
                                                            
                                                            
                                                            
                                                        </td>
                                                    </tr>
                                                    -->
                                                    <?php } 
                                                    else { ?>
                                                    
                                                    <tr>
                                                        <td style="font-weight: 700;text-align:right;">Please add more participant...!</td>
                                                    </tr>
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                </table>
                                            </div>
                                            
                                        </center></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div  class="p-3 mb-3">
                            <div class="container-fluid">
                                
                                <div class="row ">
                                    
                                    <div class="col-md-12 comp-grid">
                                        <div class=""><div>
                                            <?php
                                            // jika sudah transfer atau Confirmed
                                        if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?></div>
                                        <div class=" ">
                                            <?php  
                                            
                                            $this->render_page("peserta/listreadonly/peserta.kd_transaksi/$data[kd_transaksi]?orderby=peserta.kd_peserta&ordertype=DESC&limit_count=50" , array( 'show_header' => false,'show_footer' => false,'show_pagination' => false )); 
                                            ?>
                                        </div>
                                        <div class=""><?php } else { ?></div>
                                        <div class=" reset-grids">
                                            <?php  
                                            
                                            $this->render_page("peserta/listeditable/peserta.kd_transaksi/$data[kd_transaksi]?orderby=peserta.kd_peserta&ordertype=DESC&limit_count=20" , array( 'show_header' => false,'show_footer' => false,'show_pagination' => false )); 
                                            ?>
                                        </div>
                                        <div class=""><?php } ?>
                                        </div></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div  class="">
                            <div class="container">
                                
                                <div class="row ">
                                    
                                    <div class="col-md-12 comp-grid">
                                        <div class=""><center>
                                            <table style="background: #fff;
                                                display: inline-block;
                                                padding: 15px 25px;
                                                padding-right: 20px;
                                                padding-left: 20px;
                                                border-radius: 5px;color: black;">
                                                <tr>
                                                    <td style="font-weight: 700;">ID/Date</td><td style="text-align:right;"><?php echo $data['kd_transaksi'];?> / <?php echo $data['timestamp_dibuat'];?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 700;">Num/Name</td><td style="text-align:right;"><?php echo $data['kd_akun'];?> / <?php echo $data['nama_akun'];?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 700;">Email</td><td style="text-align:right;"><?php echo $data['email_akun'];?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 700;">Telephone</td><td style="text-align:right;"><?php echo $data['telp_akun'];?></td>
                                                </tr>
                                            </table>
                                        </center></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div  class="">
                            <div class="container">
                                
                                <div class="row ">
                                    
                                    <div class="col-md-12 comp-grid">
                                        <div class=""><?php
                                            // jika sudah transfer atau Confirmed
                                            if ($data['konfirmasi_transfer']=='Sudah Transfer' || $data['konfirmasi_transfer']=='Confirmed' ){ ?>
                                            <div>
                                                <div class="row">
                                                    <div class="col" align="center">
                                                        
                                                        <table style="background: #fff;
                                                            display: inline-block;
                                                            padding: 10px 15px;
                                                            padding-right: 15px;
                                                            padding-left: 10px;
                                                            border-radius: 5px;color: black;" >
                                                            
                                                            <tr>
                                                                <td width="155px" align="center" style="line-height: 1.2;">
                                                                    <div width="150px" height="150px" align="center" style="display: inline-block;height: 150px; width: 150px; overflow: hidden;" id="qrcodeA<?php echo $data['kode_booking']; ?>">
                                                                        </div><br>
                                                                        <font style="font-size:13px; font-weight:bold;line-height: 0.9;">Kode Unik: <?php echo $data['kode_booking']; ?></font>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            
                                                            <script src="<?php echo SITE_ADDR;?>assets/js/qrcode.js"></script>
                                                            <script type="text/javascript">
                                                                var qrcodeA<?php echo $data['kode_booking'];?> = new QRCode(document.getElementById("qrcodeA<?php echo $data['kode_booking'];?>"), {
                                                                text: "<?php echo $data['kode_booking'];?>",
                                                                width: 150,
                                                                height: 150,
                                                                colorDark : "#000000",
                                                                colorLight : "#ffffff",
                                                                correctLevel : QRCode.CorrectLevel.M
                                                                });
                                                            </script>
                                                            
                                                            
                                                        </div>
                                                        <div class="col" align="center">
                                                            
                                                            
                                                            <table style="background: #fff;
                                                                display: inline-block;
                                                                padding: 10px 15px;
                                                                padding-right: 15px;
                                                                padding-left: 10px;
                                                                border-radius: 5px;color: black;">
                                                                
                                                                <tr><td align="center" >
                                                                    <font style="font-size:12px;line-height: 1.0;">Barcode:<br></font>
                                                                        <img id="barcode<?php echo $data['kode_booking']; ?>"/>
                                                                            <br>
                                                                                <font style="font-size:13px; font-weight:bold;line-height: 0.9;"><?php echo $data['kode_booking']; ?></font>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
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
                                                                    
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div  class="">
                                        <div class="container">
                                            
                                            <div class="row ">
                                                
                                                <div class="col-md-12 comp-grid">
                                                    <div class=""><center><div class="col" align="center">
                                                        <table>
                                                        <tr><td style="font-weight: 700;">Status Order</td><td style="text-align:right;"><?php echo $data['status'];?></td></tr></table></div>
                                                    </div></center></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </section>
                                