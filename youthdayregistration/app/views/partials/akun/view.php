
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('akun/add');
$can_edit = PageAccessManager::is_allowed('akun/edit');
$can_view = PageAccessManager::is_allowed('akun/view');
$can_delete = PageAccessManager::is_allowed('akun/delete');
?>

<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

//Page Data Information from Controller
$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router::$page_id; //Page id from url

$view_title = $this->view_title;

$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">View  Akun</h3>
                    
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
                
                <div class="col-md-12 comp-grid">
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class=" animated fadeIn">
                        <?php
                        
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['kd_akun']) ? urlencode($data['kd_akun']) : null);
                        
                        
                        
                        $counter++;
                        ?>
                        <div class="profile-bg mb-2">
                            <div class="profile">
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="avatar"><img src="<?php print_link("assets/images/avatar.png") ?>" /> </div>
                                        <h2 class="title"><?php echo $data['username']; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="page-records ">
                                <table class="table table-hover table-borderless table-striped">
                                    <tbody>
                                        
                                        <tr>
                                            <th class="title"> Account Number :</th>
                                            <td class="value"> <?php echo $data['kd_akun']; ?> </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th class="title"> Username :</th>
                                            <td class="value"> <?php echo $data['username']; ?> </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th class="title"> Email :</th>
                                            <td class="value"> <?php echo $data['email']; ?> </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th class="title"> Role :</th>
                                            <td class="value"> <?php echo $data['role']; ?> </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th class="title"> Timestamp :</th>
                                            <td class="value"> <?php echo $data['timestamp']; ?> </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <th class="title"> Telephone Number :</th>
                                            <td class="value"> <?php echo $data['telp']; ?> </td>
                                        </tr>
                                        
                                        
                                    </tbody>    
                                </table>    
                            </div>  
                            <div class="mt-2">
                                
                                
                                <?php if($can_edit){ ?>
                                
                                <a class="btn btn-sm btn-info"  href="<?php print_link("akun/edit/$rec_id"); ?>">
                                    <i class="fa fa-edit"></i> 
                                </a>
                                
                                <?php } ?>
                                
                                
                                <?php if($can_delete){ ?>
                                
                                <a class="btn btn-sm btn-danger record-delete-btn"  href="<?php print_link("akun/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete it?" data-display-style="none">
                                    <i class="fa fa-times"></i> 
                                </a>
                                
                                <?php } ?>
                                
                                
                                <button class="btn btn-sm btn-primary export-btn">
                                    <i class="fa fa-save"></i> 
                                </button>
                                
                                
                            </div>
                            <?php
                            }
                            else{
                            ?>
                            <!-- Empty Record Message -->
                            <div class="text-muted p-3">
                                <i class="fa fa-ban"></i> No Record Found
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
    