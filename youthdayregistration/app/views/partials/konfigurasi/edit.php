
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
                    <h3 class="record-title">Edit  Konfigurasi</h3>
                    
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("konfigurasi/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="userbca">Userbca <span class="text-danger">*</span></label>
                                    <div id="ctrl-userbca-holder" class=""> 
                                        <input id="ctrl-userbca"  value="<?php  echo $data['userbca']; ?>" type="text" placeholder="Enter Userbca"  required="" name="userbca"  class="form-control " />
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label" for="password">Password <span class="text-danger">*</span></label>
                                        <div id="ctrl-password-holder" class=""> 
                                            <input id="ctrl-password"  value="<?php  echo $data['password']; ?>" type="password" placeholder="Enter Password"  required="" name="password"  class="form-control " />
                                                
                                                
                                                
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
                                                <input id="ctrl-jml1"  value="<?php  echo $data['jml1']; ?>" type="number" placeholder="Enter Jml1" step="1"  required="" name="jml1"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="jml2">Jml2 <span class="text-danger">*</span></label>
                                                <div id="ctrl-jml2-holder" class=""> 
                                                    <input id="ctrl-jml2"  value="<?php  echo $data['jml2']; ?>" type="number" placeholder="Enter Jml2" step="1"  required="" name="jml2"  class="form-control " />
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group ">
                                                    <label class="control-label" for="pmutasi">Pmutasi <span class="text-danger">*</span></label>
                                                    <div id="ctrl-pmutasi-holder" class=""> 
                                                        <input id="ctrl-pmutasi"  value="<?php  echo $data['pmutasi']; ?>" type="number" placeholder="Enter Pmutasi" step="1"  required="" name="pmutasi"  class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group ">
                                                        <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                                        <div id="ctrl-email-holder" class=""> 
                                                            <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <label class="control-label" for="refresh">Refresh <span class="text-danger">*</span></label>
                                                            <div id="ctrl-refresh-holder" class=""> 
                                                                <input id="ctrl-refresh"  value="<?php  echo $data['refresh']; ?>" type="number" placeholder="Enter Refresh" step="1"  required="" name="refresh"  class="form-control " />
                                                                    
                                                                    
                                                                    
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
                            