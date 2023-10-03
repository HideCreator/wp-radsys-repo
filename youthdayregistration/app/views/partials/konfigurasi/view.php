
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('konfigurasi/add');
$can_edit = PageAccessManager::is_allowed('konfigurasi/edit');
$can_view = PageAccessManager::is_allowed('konfigurasi/view');
$can_delete = PageAccessManager::is_allowed('konfigurasi/delete');
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
                    <h3 class="record-title">View  Konfigurasi</h3>
                    
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
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        
                        
                        
                        $counter++;
                        ?>
                        <div class="page-records ">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody>
                                    
                                    <tr>
                                        <th class="title"> Userbca :</th>
                                        <td class="value"> <?php echo $data['userbca']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Password :</th>
                                        <td class="value"> <?php echo $data['password']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Jml1 :</th>
                                        <td class="value"> <?php echo $data['jml1']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Jml2 :</th>
                                        <td class="value"> <?php echo $data['jml2']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Pmutasi :</th>
                                        <td class="value"> <?php echo $data['pmutasi']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Email :</th>
                                        <td class="value"> <?php echo $data['email']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Refresh :</th>
                                        <td class="value"> <?php echo $data['refresh']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Id :</th>
                                        <td class="value"> <?php echo $data['id']; ?> </td>
                                    </tr>
                                    
                                    
                                </tbody>
                                <!-- Table Body End -->
                                <tfoot>
                                    <tr>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="p-3">
                            
                            
                            <?php if($can_edit){ ?>
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("konfigurasi/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> 
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
    
    <div  class="">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    
                    <a  class="btn btn-primary" href="<?php print_link("periksamutasi") ?>">
                        
                        Cek Mutasi Sekarang 
                    </a>
                    
                </div>
                
            </div>
        </div>
    </div>
    
</section>
