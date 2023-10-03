
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
                    <h3 class="record-title">Add New Konfigurasi</h3>
                    
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
                        <form id="konfigurasi-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("konfigurasi/add?csrf_token=$csrf_token") ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="userbca">Userbca <span class="text-danger">*</span></label>
                                    <div id="ctrl-userbca-holder" class=""> 
                                        <input id="ctrl-userbca"  value="<?php  echo $this->set_field_value('userbca',''); ?>" type="text" placeholder="Enter Userbca"  required="" name="userbca"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                                        <div id="ctrl-password-holder" class=""> 
                                            <input id="ctrl-password"  value="<?php  echo $this->set_field_value('password',''); ?>" type="password" placeholder="Enter Password"  required="" name="password"  class="form-control " />
                                                
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                            <div id="ctrl-confirm_password-holder" class=""> 
                                                
                                                <input id="-confirm"  class="form-control " type="password" name="confirm_password" required placeholder="Confirm Password" />
                                                
                                                
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group ">
                                            <label class="control-label" for="jml1">Jml1 <span class="text-danger">*</span></label>
                                            <div id="ctrl-jml1-holder" class=""> 
                                                <input id="ctrl-jml1"  value="<?php  echo $this->set_field_value('jml1','0'); ?>" type="number" placeholder="Enter Jml1" step="1"  required="" name="jml1"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="jml2">Jml2 <span class="text-danger">*</span></label>
                                                <div id="ctrl-jml2-holder" class=""> 
                                                    <input id="ctrl-jml2"  value="<?php  echo $this->set_field_value('jml2','0'); ?>" type="number" placeholder="Enter Jml2" step="1"  required="" name="jml2"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="pmutasi">Pmutasi <span class="text-danger">*</span></label>
                                                    <div id="ctrl-pmutasi-holder" class=""> 
                                                        <input id="ctrl-pmutasi"  value="<?php  echo $this->set_field_value('pmutasi','29'); ?>" type="number" placeholder="Enter Pmutasi" step="1"  required="" name="pmutasi"  class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                        <div id="ctrl-email-holder" class=""> 
                                                            <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <label class="control-label" for="refresh">Refresh <span class="text-danger">*</span></label>
                                                            <div id="ctrl-refresh-holder" class=""> 
                                                                <input id="ctrl-refresh"  value="<?php  echo $this->set_field_value('refresh','60'); ?>" type="number" placeholder="Enter Refresh" step="1"  required="" name="refresh"  class="form-control " />
                                                                    
                                                                    
                                                                    
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
                            