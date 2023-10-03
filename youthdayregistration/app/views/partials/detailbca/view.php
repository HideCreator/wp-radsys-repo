
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('detailbca/add');
$can_edit = PageAccessManager::is_allowed('detailbca/edit');
$can_view = PageAccessManager::is_allowed('detailbca/view');
$can_delete = PageAccessManager::is_allowed('detailbca/delete');
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
                    <h3 class="record-title">View  Detailbca</h3>
                    
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
                                        <th class="title"> Id :</th>
                                        <td class="value"> <?php echo $data['id']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Tgl :</th>
                                        <td class="value"> <?php echo $data['tgl']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Ket :</th>
                                        <td class="value"> <?php echo $data['ket']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Mutasi :</th>
                                        <td class="value"> <?php echo $data['mutasi']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Mkode :</th>
                                        <td class="value"> <?php echo $data['mkode']; ?> </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th class="title"> Userbca :</th>
                                        <td class="value"> <?php echo $data['userbca']; ?> </td>
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
                            
                            <a class="btn btn-sm btn-info"  href="<?php print_link("detailbca/edit/$rec_id"); ?>">
                                <i class="fa fa-edit"></i> 
                            </a>
                            
                            <?php } ?>
                            
                            
                            <?php if($can_delete){ ?>
                            
                            <a class="btn btn-sm btn-danger record-delete-btn"  href="<?php print_link("detailbca/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete it?" data-display-style="none">
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
