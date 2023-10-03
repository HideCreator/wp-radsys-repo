
<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

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
                    <h3 class="record-title">Add New Transport Pergi</h3>
                    
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
                        <form id="transport_pergi-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("transport_pergi/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="paket_acara">Paket Acara <span class="text-danger">*</span></label>
                                    <div id="ctrl-paket_acara-holder" class=""> 
                                        <input id="ctrl-paket_acara"  value="<?php  echo $this->set_field_value('paket_acara',''); ?>" type="text" placeholder="Enter Paket Acara" list="paket_acara_list"  required="" name="paket_acara"  class="form-control " />
                                            
                                            <datalist id="paket_acara_list">
                                                
                                                <?php 
                                                $paket_acara_options = $comp_model -> transport_pergi_paket_acara_option_list();
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
                                        <label class="control-label" for="nama_transport_pergi">Nama Transport Pergi <span class="text-danger">*</span></label>
                                        <div id="ctrl-nama_transport_pergi-holder" class=""> 
                                            <input id="ctrl-nama_transport_pergi"  value="<?php  echo $this->set_field_value('nama_transport_pergi',''); ?>" type="text" placeholder="Enter Nama Transport Pergi"  required="" name="nama_transport_pergi"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="harga">Harga <span class="text-danger">*</span></label>
                                            <div id="ctrl-harga-holder" class=""> 
                                                <input id="ctrl-harga"  value="<?php  echo $this->set_field_value('harga','0'); ?>" type="number" placeholder="Enter Harga" step="1"  required="" name="harga"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="kd_akun">Kd Akun <span class="text-danger">*</span></label>
                                                <div id="ctrl-kd_akun-holder" class=""> 
                                                    <input id="ctrl-kd_akun"  value="<?php  echo $this->set_field_value('kd_akun',''); ?>" type="number" placeholder="Enter Kd Akun" step="1"  required="" name="kd_akun"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="diskon_pp">Diskon Pp <span class="text-danger">*</span></label>
                                                    <div id="ctrl-diskon_pp-holder" class=""> 
                                                        <input id="ctrl-diskon_pp"  value="<?php  echo $this->set_field_value('diskon_pp','0'); ?>" type="number" placeholder="Enter Diskon Pp" step="1"  required="" name="diskon_pp"  class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="form-group form-submit-btn-holder text-center">
                                                    <div class="form-ajax-status"></div>
                                                    <button class="btn btn-primary" type="submit">
                                                        Submit
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
                    