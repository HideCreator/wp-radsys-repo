
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
                    <h3 class="record-title">Add New Kamar</h3>
                    
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
                        <form id="kamar-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("kamar/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="nama_kamar">Nama Kamar <span class="text-danger">*</span></label>
                                    <div id="ctrl-nama_kamar-holder" class=""> 
                                        <input id="ctrl-nama_kamar"  value="<?php  echo $this->set_field_value('nama_kamar',''); ?>" type="text" placeholder="Enter Nama Kamar"  required="" name="nama_kamar"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                                        <div id="ctrl-jenis_kelamin-holder" class=""> 
                                            
                                            <?php
                                            $jenis_kelamin_options = Menu :: $jenis_kelamin;
                                            if(!empty($jenis_kelamin_options)){
                                            foreach($jenis_kelamin_options as $option){
                                            $value = $option['value'];
                                            $label = $option['label'];
                                            //check if current option is checked option
                                            $checked = $this->set_field_checked('jenis_kelamin', $value, '');
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
                                                <input id="ctrl-kuota_total"  value="<?php  echo $this->set_field_value('kuota_total','0'); ?>" type="number" placeholder="Enter Kuota Total" step="1"  required="" name="kuota_total"  class="form-control " />
                                                    
                                                    
                                                    
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
            