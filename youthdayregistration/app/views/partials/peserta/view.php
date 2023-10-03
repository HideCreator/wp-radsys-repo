
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('peserta/add');
$can_edit = PageAccessManager::is_allowed('peserta/edit');
$can_view = PageAccessManager::is_allowed('peserta/view');
$can_delete = PageAccessManager::is_allowed('peserta/delete');
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
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">View  Peserta</h3>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class=" animated fadeIn">
                        <?php
                        
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['kd_peserta']) ? urlencode($data['kd_peserta']) : null);
                        
                        
                        
                        $counter++;
                        ?>
                        <div class="page-records ">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody>
                                    
                                    <tr>
                                        <th class="title"> Kd Peserta :</th>
                                        <td class="value"> <?php echo $data['kd_peserta']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Paket Acara :</th>
                                        <td class="value"> <?php echo $data['paket_acara']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Harga Paket Acara :</th>
                                        <td class="value"> <?php echo $data['harga_paket_acara']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kd Akun :</th>
                                        <td class="value"> <?php echo $data['kd_akun']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Nama Akun :</th>
                                        <td class="value"> <?php echo $data['nama_akun']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kd Transaksi :</th>
                                        <td class="value"> <?php echo $data['kd_transaksi']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kode Booking :</th>
                                        <td class="value"> <?php echo $data['kode_booking']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Nama Lengkap :</th>
                                        <td class="value"> <?php echo $data['nama_lengkap']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Email :</th>
                                        <td class="value"> <?php echo $data['email']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Telp :</th>
                                        <td class="value"> <?php echo $data['telp']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Asal Sel Komunitas :</th>
                                        <td class="value"> <?php echo $data['asal_sel_komunitas']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Asal Kota Kab :</th>
                                        <td class="value"> <?php echo $data['asal_kota_kab']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Asal Negara :</th>
                                        <td class="value"> <?php echo $data['asal_negara']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Tgl Lahir :</th>
                                        <td class="value"> <?php echo $data['tgl_lahir']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Jenis Kelamin :</th>
                                        <td class="value"> <?php echo $data['jenis_kelamin']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Transport Pergi :</th>
                                        <td class="value"> <?php echo $data['transport_pergi']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Harga Transport Pergi :</th>
                                        <td class="value"> <?php echo $data['harga_transport_pergi']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Transport Pulang :</th>
                                        <td class="value"> <?php echo $data['transport_pulang']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Harga Transport Pulang :</th>
                                        <td class="value"> <?php echo $data['harga_transport_pulang']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Sub Total :</th>
                                        <td class="value"> <?php echo $data['sub_total']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Konfirmasi Transfer :</th>
                                        <td class="value"> <?php echo $data['konfirmasi_transfer']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Verifikasi Lunas :</th>
                                        <td class="value"> <?php echo $data['verifikasi_lunas']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Alergi Makanan :</th>
                                        <td class="value"> <?php echo $data['alergi_makanan']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Catatan :</th>
                                        <td class="value"> <?php echo $data['catatan']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kehadiran :</th>
                                        <td class="value"> <?php echo $data['kehadiran']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Timestamp :</th>
                                        <td class="value"> <?php echo $data['timestamp']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Status :</th>
                                        <td class="value"> <?php echo $data['status']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kd Kamar :</th>
                                        <td class="value"> <?php echo $data['kd_kamar']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kd Kelompok :</th>
                                        <td class="value"> <?php echo $data['kd_kelompok']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Kd Kelas :</th>
                                        <td class="value"> <?php echo $data['kd_kelas']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Nama Panggilan :</th>
                                        <td class="value"> <?php echo $data['nama_panggilan']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Riwayat Kesehatan :</th>
                                        <td class="value"> <?php echo $data['riwayat_kesehatan']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Transport Catatan :</th>
                                        <td class="value"> <?php echo $data['transport_catatan']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                                <tfoot>
                                    <tr>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <?php if($can_edit){ ?>
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("peserta/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            <?php } ?>
                            
                            
                            <?php if($can_delete){ ?>
                            
                            <a class="btn btn-sm btn-danger record-delete-btn"  href="<?php print_link("peserta/delete/$rec_id/?csrf_token=$csrf_token"); ?>" data-prompt-msg="Are you sure you want to delete it?" data-display-style="confirm">
                                <i class="fa fa-times"></i> 
                            </a>
                            
                            <?php } ?>
                            
                            
                            <button class="btn btn-sm btn-primary export-btn">
                                <i class="fa fa-save"></i> 
                            </button>
                            
                            
                        </div>
                        <?php
                        }
                        else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="fa fa-ban"></i> No Record Found
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
