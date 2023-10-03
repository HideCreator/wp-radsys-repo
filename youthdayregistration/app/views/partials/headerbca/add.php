
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
                    <h3 class="record-title">Add New Headerbca</h3>
                    
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
                        <form id="headerbca-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("headerbca/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="norek">Norek <span class="text-danger">*</span></label>
                                    <div id="ctrl-norek-holder" class=""> 
                                        <input id="ctrl-norek"  value="<?php  echo $this->set_field_value('norek',''); ?>" type="text" placeholder="Enter Norek"  required="" name="norek"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="nama">Nama <span class="text-danger">*</span></label>
                                        <div id="ctrl-nama-holder" class=""> 
                                            <input id="ctrl-nama"  value="<?php  echo $this->set_field_value('nama',''); ?>" type="text" placeholder="Enter Nama"  required="" name="nama"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="tgl">Tgl <span class="text-danger">*</span></label>
                                            <div id="ctrl-tgl-holder" class=""> 
                                                <input id="ctrl-tgl"  value="<?php  echo $this->set_field_value('tgl',''); ?>" type="text" placeholder="Enter Tgl"  required="" name="tgl"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="muang">Muang <span class="text-danger">*</span></label>
                                                <div id="ctrl-muang-holder" class=""> 
                                                    <input id="ctrl-muang"  value="<?php  echo $this->set_field_value('muang',''); ?>" type="text" placeholder="Enter Muang"  required="" name="muang"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="saldo">Saldo <span class="text-danger">*</span></label>
                                                    <div id="ctrl-saldo-holder" class=""> 
                                                        <input id="ctrl-saldo"  value="<?php  echo $this->set_field_value('saldo',''); ?>" type="text" placeholder="Enter Saldo"  required="" name="saldo"  class="form-control " />
                                                            
                                                            
                                                            
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
                    