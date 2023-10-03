
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('transaksi/add');
$can_edit = PageAccessManager::is_allowed('transaksi/edit');
$can_view = PageAccessManager::is_allowed('transaksi/view');
$can_delete = PageAccessManager::is_allowed('transaksi/delete');
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
                    <h3 class="record-title">Redirect Delete</h3>
                    
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
                    <div class=""><?php
                        if (USER_ROLE=='Peserta'||USER_ROLE=='Participant')
                        {
                        // header("Location: ".SITE_ADDR."transaksi/ListRolePeserta");
                        ?>
                        <script>
                            window.location.replace('<?php
                            echo SITE_ADDR;
                            echo 'transaksi/ListPartcipant';
                            ?>');
                        </script>
                        <?php
                        }
                        else {
                        ?>
                        <script>
                            window.location.replace('<?php
                            echo SITE_ADDR;
                            echo 'transaksi/';
                            ?>');
                        </script>
                        <?php
                        }
                        
                        
                        
                        ?>
                        <!--
                    --></div>
                </div>
                
            </div>
        </div>
    </div>
    
</section>
