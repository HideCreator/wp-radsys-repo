
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
                    <h3 class="record-title">Add New Tmp Detailbca</h3>
                    
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
                        <form id="tmp_detailbca-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("tmp_detailbca/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="tgl">Tgl <span class="text-danger">*</span></label>
                                    <div id="ctrl-tgl-holder" class=""> 
                                        <input id="ctrl-tgl"  value="<?php  echo $this->set_field_value('tgl',''); ?>" type="text" placeholder="Enter Tgl"  required="" name="tgl"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="ket">Ket <span class="text-danger">*</span></label>
                                        <div id="ctrl-ket-holder" class=""> 
                                            <input id="ctrl-ket"  value="<?php  echo $this->set_field_value('ket',''); ?>" type="text" placeholder="Enter Ket"  required="" name="ket"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="mutasi">Mutasi <span class="text-danger">*</span></label>
                                            <div id="ctrl-mutasi-holder" class=""> 
                                                <input id="ctrl-mutasi"  value="<?php  echo $this->set_field_value('mutasi',''); ?>" type="text" placeholder="Enter Mutasi"  required="" name="mutasi"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="mkode">Mkode <span class="text-danger">*</span></label>
                                                <div id="ctrl-mkode-holder" class=""> 
                                                    <input id="ctrl-mkode"  value="<?php  echo $this->set_field_value('mkode',''); ?>" type="text" placeholder="Enter Mkode"  required="" name="mkode"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="userbca">Userbca <span class="text-danger">*</span></label>
                                                    <div id="ctrl-userbca-holder" class=""> 
                                                        <input id="ctrl-userbca"  value="<?php  echo $this->set_field_value('userbca',''); ?>" type="text" placeholder="Enter Userbca"  required="" name="userbca"  class="form-control " />
                                                            
                                                            
                                                            
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
                    