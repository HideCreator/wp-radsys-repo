
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
                    <h3 class="record-title">Edit  Kamar</h3>
                    
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("kamar/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="nama_kamar">Nama Kamar <span class="text-danger">*</span></label>
                                    <div id="ctrl-nama_kamar-holder" class=""> 
                                        <input id="ctrl-nama_kamar"  value="<?php  echo $data['nama_kamar']; ?>" type="text" placeholder="Enter Nama Kamar"  required="" name="nama_kamar"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <div id="ctrl-jenis_kelamin-holder" class=""> 
                                            
                                            <?php
                                            $jenis_kelamin_options = Menu :: $jenis_kelamin;
                                            $field_value = $data['jenis_kelamin'];
                                            if(!empty($jenis_kelamin_options)){
                                            foreach($jenis_kelamin_options as $option){
                                            $value = $option['value'];
                                            $label = $option['label'];
                                            //check if value is among checked options
                                            $checked = $this->check_form_field_checked($field_value, $value);
                                            ?>
                                            
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input id="ctrl-jenis_kelamin" class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="jenis_kelamin" />
                                                    <span class="custom-control-label"><?php echo $label ?></span>
                                                </label>
                                                
                                                <?php
                                                }
                                                }
                                                ?>
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="kuota_total">Kuota Total <span class="text-danger">*</span></label>
                                            <div id="ctrl-kuota_total-holder" class=""> 
                                                <input id="ctrl-kuota_total"  value="<?php  echo $data['kuota_total']; ?>" type="number" placeholder="Enter Kuota Total" step="1"  required="" name="kuota_total"  class="form-control " />
                                                    
                                                    
                                                    
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
            