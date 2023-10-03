
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
                    <h3 class="record-title">Edit  Paket Acara</h3>
                    
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("paket_acara/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="paket_acara">Paket Acara <span class="text-danger">*</span></label>
                                    <div id="ctrl-paket_acara-holder" class=""> 
                                        <input id="ctrl-paket_acara"  value="<?php  echo $data['paket_acara']; ?>" type="text" placeholder="Enter Paket Acara"  required="" name="paket_acara"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="kuota_paket_acara">Kuota Paket Acara <span class="text-danger">*</span></label>
                                        <div id="ctrl-kuota_paket_acara-holder" class=""> 
                                            <input id="ctrl-kuota_paket_acara"  value="<?php  echo $data['kuota_paket_acara']; ?>" type="number" placeholder="Enter Kuota Paket Acara" step="1"  required="" name="kuota_paket_acara"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="harga_paket_acara">Harga Paket Acara <span class="text-danger">*</span></label>
                                            <div id="ctrl-harga_paket_acara-holder" class=""> 
                                                <input id="ctrl-harga_paket_acara"  value="<?php  echo $data['harga_paket_acara']; ?>" type="number" placeholder="Enter Harga Paket Acara" step="1"  required="" name="harga_paket_acara"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="deskripsi_paket_acara">Deskripsi Paket Acara <span class="text-danger">*</span></label>
                                                <div id="ctrl-deskripsi_paket_acara-holder" class=""> 
                                                    
                                                    <textarea placeholder="Enter Deskripsi Paket Acara" id="ctrl-deskripsi_paket_acara"  required="" rows="" name="deskripsi_paket_acara" class=" form-control"><?php  echo $data['deskripsi_paket_acara']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="tgl_mulai_daftar">Tgl Mulai Daftar <span class="text-danger">*</span></label>
                                                <div id="ctrl-tgl_mulai_daftar-holder" class="input-group"> 
                                                    <input id="ctrl-tgl_mulai_daftar" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tgl_mulai_daftar']; ?>" type="datetime" name="tgl_mulai_daftar" placeholder="Enter Tgl Mulai Daftar" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                        
                                                        
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="tgl_selesai_daftar">Tgl Selesai Daftar <span class="text-danger">*</span></label>
                                                    <div id="ctrl-tgl_selesai_daftar-holder" class="input-group"> 
                                                        <input id="ctrl-tgl_selesai_daftar" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tgl_selesai_daftar']; ?>" type="datetime" name="tgl_selesai_daftar" placeholder="Enter Tgl Selesai Daftar" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                            
                                                            
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <label class="control-label" for="tgl_mulai_acara">Tgl Mulai Acara <span class="text-danger">*</span></label>
                                                        <div id="ctrl-tgl_mulai_acara-holder" class="input-group"> 
                                                            
                                                            <input id="ctrl-tgl_mulai_acara" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['tgl_mulai_acara']; ?>" type="datetime"  name="tgl_mulai_acara" placeholder="Enter Tgl Mulai Acara" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <label class="control-label" for="tgl_selesai_acara">Tgl Selesai Acara <span class="text-danger">*</span></label>
                                                            <div id="ctrl-tgl_selesai_acara-holder" class="input-group"> 
                                                                
                                                                <input id="ctrl-tgl_selesai_acara" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['tgl_selesai_acara']; ?>" type="datetime"  name="tgl_selesai_acara" placeholder="Enter Tgl Selesai Acara" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                                    
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                    
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
                                    