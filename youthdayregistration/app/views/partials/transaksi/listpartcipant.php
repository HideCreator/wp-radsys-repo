
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

//Page Data From Controller
$view_data = $this->view_data;

$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;

$field_name = Router :: $field_name;
$field_value = Router :: $field_value;

$view_title = $this->view_title;
$show_header = $this->show_header;
$show_footer = $this->show_footer;
$show_pagination = $this->show_pagination;


?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="p-3 mb-3">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-sm-4 ">
                    <h3 class="record-title">Order List for Participant</h3>
                    
                </div>
                
                <div class="col-sm-3 ">
                    <div class=""><script>
                        document.body.style.backgroundColor = "#f9ede1";
                    </script>
                    <?php
                    if(!empty($field_name) || !empty($_GET['search'])){
                    ?>
                    <hr class="sm d-block d-sm-none" />
                    <nav class="page-header-breadcrumbs mt-2" aria-label="breadcrumb">
                        <ul class="breadcrumb m-0 p-1">
                            <?php
                            if(!empty($field_name)){
                            ?>
                            <li class="breadcrumb-item">
                                <a class="text-capitalize" href="<?php print_link('transaksi'); ?>">
                                    <i class="fa fa-angle-left"></i> <?php echo make_readable($field_name); ?>
                                </a>
                            </li>
                            <li  class="breadcrumb-item active text-capitalize"><?php echo make_readable(urldecode($field_value)); ?></li>
                            <?php 
                            }   
                            ?>
                            
                            <?php
                            if(!empty($_GET['search'])){
                            ?>
                            <li class="breadcrumb-item">
                                <a class="text-capitalize" href="<?php print_link('transaksi') ?>">Search</a>
                            </li>
                            <li  class="breadcrumb-item active text-capitalize"> <strong><?php echo get_value('search'); ?></strong></li>
                            <?php
                            }
                            ?>
                            
                        </ul>
                    </nav>  
                    <?php
                    }
                    ?>
                </div>
            </div>
            
            <div class="col-sm-5 ">
                
                <?php if($can_add){ ?>
                
                <a  class="btn btn btn-primary my-1" href="<?php print_link("transaksi/add") ?>">
                    <i class="fa fa-plus"></i>                              
                    Create New Order 
                </a>
                
                <?php } ?>
                
            </div>
            
            <div class="col-md-12 comp-grid">
                
            </div>
            
        </div>
    </div>
</div>

<?php
}
?>

<div  class="">
    <div class="container-fluid">
        
        <div class="row ">
            
            <div class="col-md-12 comp-grid">
                
                <?php $this :: display_page_errors(); ?>
                
                <div  class=" animated fadeIn">
                    <div id="transaksi-listpartcipant-records">
                        
                        <?php
                        if(!empty($records)){
                        ?>
                        <div class="page-records table-responsive">
                            <table class="table  table-striped table-sm">
                                <thead class="table-header bg-warning text-light">
                                    <tr>
                                        
                                        <th class="td-sno">#</th>
                                        <th > View Detail</th>
                                        <th > Event Name</th>
                                        <th > Created Date</th>
                                        <th > Amount Bank Transfer</th>
                                        <th > Payment Confirmation</th>
                                        <th > Verification</th>
                                        <th > Status</th>
                                        <th > Count Participant</th>
                                        
                                        <th class="td-btn"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                    $counter = 0;
                                    
                                    foreach($records as $data){
                                    $rec_id = (!empty($data['kd_transaksi']) ? urlencode($data['kd_transaksi']) : null);
                                    $counter++;
                                    
                                    
                                    ?>
                                    <tr>
                                        
                                        <th class="td-sno"><?php echo $counter; ?></th>
                                        
                                        
                                        <td> <span>
                                            <a class="btn btn-sm btn-success has-tooltip" href="<?php echo SITE_ADDR.'transaksi/view/'.$data['kd_transaksi']; ?>">View <i class="fa fa-eye"></i></a>
                                        </span></td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['paket_acara']; ?> </td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['timestamp_dibuat']; ?> </td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['total_transfer']; ?> </td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['konfirmasi_transfer']; ?> </td>
                                        
                                        
                                        
                                        
                                        <td> <span><?php echo $data['verfikasi_lunas']; ?></span></td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['status']; ?> </td>
                                        
                                        
                                        
                                        
                                        <td> <?php echo $data['qty_peserta']; ?> </td>
                                        
                                        
                                        
                                        
                                        <th class="td-btn">
                                            
                                            
                                            
                                            
                                            
                                        </th>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                    
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <?php
                        if( $show_footer == true ){
                        ?>
                        <div class="">
                            <div class="row">   
                                <div class="col-sm-4">  
                                    <div class="py-2">  
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">   
                                    
                                    <?php
                                    if( $show_pagination == true ){
                                    $pager = new Pagination($total_records,$record_count);
                                    $pager->page_name='transaksi';
                                    $pager->show_page_count=true;
                                    $pager->show_record_count=true;
                                    $pager->show_page_limit=true;
                                    $pager->show_page_number_list=true;
                                    $pager->pager_link_range=5;
                                    
                                    $pager->render();
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        }
                        else{
                        ?>
                        <div class="text-muted animated bounce  p-3">
                            <h4><i class="fa fa-ban"></i> Empty Data</h4>
                        </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

</section>
