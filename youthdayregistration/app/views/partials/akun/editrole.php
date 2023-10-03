
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
                    <h3 class="record-title">Ganti Role</h3>
                    
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("akun/editrole/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                
                                <div class="form-group ">
                                    <label class="control-label" for="role">Role <span class="text-danger">*</span></label>
                                    <div id="ctrl-role-holder" class=""> 
                                        
                                        <select required=""  id="ctrl-role" name="role"  placeholder="Pilih Role"    class="custom-select" >
                                            <option value="">Pilih Role</option>
                                            
                                            <?php
                                            $role_options = Menu :: $role;
                                            $field_value = $data['role'];
                                            if(!empty($role_options)){
                                            foreach($role_options as $option){
                                            $value = $option['value'];
                                            $label = $option['label'];
                                            $selected = ( $value == $field_value ? 'selected' : null );
                                            ?>
                                            
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                            </option>                                   
                                            
                                            <?php
                                            }
                                            }
                                            ?>
                                            
                                        </select>
                                        
                                        
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
