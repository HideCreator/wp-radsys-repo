
<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router :: $page_id;

$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">Edit  Transport Pulang</h3>
                    
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
                
                <div class="col-md-7 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class=" animated fadeIn">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("transport_pulang/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="paket_acara">Paket Acara <span class="text-danger">*</span></label>
                                    <div id="ctrl-paket_acara-holder" class=""> 
                                        <input id="ctrl-paket_acara"  value="<?php  echo $data['paket_acara']; ?>" type="text" placeholder="Enter Paket Acara" list="paket_acara_list"  required="" name="paket_acara"  class="form-control " />
                                            
                                            <datalist id="paket_acara_list">
                                                
                                                <?php 
                                                $paket_acara_options = $comp_model -> transport_pulang_paket_acara_option_list();
                                                if(!empty($paket_acara_options)){
                                                foreach($paket_acara_options as $option){
                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                ?>
                                                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                <?php
                                                }
                                                }
                                                ?>
                                            </datalist>
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="nama_transport_pulang">Nama Transport Pulang <span class="text-danger">*</span></label>
                                        <div id="ctrl-nama_transport_pulang-holder" class=""> 
                                            <input id="ctrl-nama_transport_pulang"  value="<?php  echo $data['nama_transport_pulang']; ?>" type="text" placeholder="Enter Nama Transport Pulang"  required="" name="nama_transport_pulang"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="harga">Harga <span class="text-danger">*</span></label>
                                            <div id="ctrl-harga-holder" class=""> 
                                                <input id="ctrl-harga"  value="<?php  echo $data['harga']; ?>" type="number" placeholder="Enter Harga" step="1"  required="" name="harga"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="nama_baru">Nama Baru </label>
                                                <div id="ctrl-nama_baru-holder" class=""> 
                                                    <input id="ctrl-nama_baru"  value="<?php  echo $data['nama_baru']; ?>" type="text" placeholder="Enter Nama Baru"  name="nama_baru"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="kd_akun">Kd Akun <span class="text-danger">*</span></label>
                                                    <div id="ctrl-kd_akun-holder" class=""> 
                                                        <input id="ctrl-kd_akun"  value="<?php  echo $data['kd_akun']; ?>" type="number" placeholder="Enter Kd Akun" step="1"  required="" name="kd_akun"  class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                                        <div id="ctrl-status-holder" class=""> 
                                                            <input id="ctrl-status"  value="<?php  echo $data['status']; ?>" type="text" placeholder="Enter Status"  required="" name="status"  class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="form-ajax-status"></div>
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary" type="submit">
                                                            Ubah
                                                            <i class="fa fa-send"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </section>
                        