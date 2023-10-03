
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
    
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            
            <div class="row ">
                
                <div class="col-sm-4 ">
                    <h3 class="record-title">Transaksi</h3>
                    
                </div>
                
                <div class="col-sm-3 ">
                    
                </div>
                
                <div class="col-sm-5 ">
                    
                    <form  class="search" method="get">
                        <div class="input-group">
                            <input value="<?php echo get_query_str_value('search'); ?>" class="form-control" type="text" name="search"  placeholder="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                    <div class="col-md-12 comp-grid">
                        <div class="">
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
                            <div id="transaksi-list-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                
                                                <?php if($can_delete){ ?>
                                                
                                                <th class="td-sno td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                
                                                <?php } ?>
                                                
                                                <th class="td-sno">#</th>
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='kd_transaksi' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('kd_transaksi', "Order"); ?>
                                                </th>
                                                
                                                <th > Unique Code</th>
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='timestamp_dibuat' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('timestamp_dibuat', "Created Date"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='nama_akun' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('nama_akun', "Name"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='total_bayar' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('total_bayar', "Total"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='total_transfer' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('total_transfer', "Transfer"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='konfirmasi_transfer' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('konfirmasi_transfer', "Confirmation"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='konfirmasi_transfer_tanggal' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('konfirmasi_transfer_tanggal', "Tgl"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='mutasi' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('mutasi', "Mutasi"); ?>
                                                </th>
                                                
                                                
                                                <th  <?php echo (get_query_str_value('orderby')=='verfikasi_lunas' ? 'class="sortedby"' : null); ?>>
                                                    
                                                    <?php Html :: get_field_order_link('verfikasi_lunas', "Verification"); ?>
                                                </th>
                                                
                                                <th > Catatan Konfirmasi</th>
                                                <th > Status</th>
                                                
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $counter = 0;
                                            $sum_of_total_transfer = 0;
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['kd_transaksi']) ? urlencode($data['kd_transaksi']) : null);
                                            $counter++;
                                            $sum_of_total_transfer = $sum_of_total_transfer + $data['total_transfer'];
                                            
                                            ?>
                                            <tr>
                                                
                                                <?php if($can_delete){ ?>
                                                
                                                <th class=" td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                        <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_transaksi'] ?>" type="checkbox" />
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </th>
                                                    
                                                    <?php } ?>
                                                    
                                                    <th class="td-sno"><?php echo $counter; ?></th>
                                                    
                                                    
                                                    <td> <span>
                                                        <a class="btn btn-sm btn-success has-tooltip" href="<?php echo SITE_ADDR.'transaksi/view/'.$data['kd_transaksi']; ?>">View <i class="fa fa-eye"></i></a>
                                                    </span></td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['kode_booking']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['timestamp_dibuat']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        
                                                        <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("akun/view/" . urlencode($data['nama_akun'])) ?>">
                                                            <i class="fa fa-eye"></i> <?php echo $data['nama_akun'] ?>
                                                        </a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['total_bayar']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['total_transfer']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $konfirmasi_transfer); ?>' 
                                                            data-value="<?php echo $data['konfirmasi_transfer']; ?>" 
                                                            data-pk="<?php echo $data['kd_transaksi'] ?>" 
                                                            data-url="<?php print_link("transaksi/editfield/" . urlencode($data['kd_transaksi'])); ?>" 
                                                            data-name="konfirmasi_transfer" 
                                                            data-title="Enter Konfirmasi Transfer" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="radiolist" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['konfirmasi_transfer']; ?>  
                                                        </a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['konfirmasi_transfer_tanggal']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td> <?php echo $data['mutasi']; ?> </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $verfikasi_lunas); ?>' 
                                                            data-value="<?php echo $data['verfikasi_lunas']; ?>" 
                                                            data-pk="<?php echo $data['kd_transaksi'] ?>" 
                                                            data-url="<?php print_link("transaksi/editfield/" . urlencode($data['kd_transaksi'])); ?>" 
                                                            data-name="verfikasi_lunas" 
                                                            data-title="Enter Verfikasi Lunas" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="radiolist" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['verfikasi_lunas']; ?>  
                                                        </a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                            data-pk="<?php echo $data['kd_transaksi'] ?>" 
                                                            data-url="<?php print_link("transaksi/editfield/" . urlencode($data['kd_transaksi'])); ?>" 
                                                            data-name="konfirmasi_transfer_catatan" 
                                                            data-title="Enter Konfirmasi Transfer Catatan" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="textarea" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['konfirmasi_transfer_catatan']; ?>  
                                                        </a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    <td>
                                                        <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                            data-value="<?php echo $data['status']; ?>" 
                                                            data-pk="<?php echo $data['kd_transaksi'] ?>" 
                                                            data-url="<?php print_link("transaksi/editfield/" . urlencode($data['kd_transaksi'])); ?>" 
                                                            data-name="status" 
                                                            data-title="Enter Status" 
                                                            data-placement="left" 
                                                            data-toggle="click" 
                                                            data-type="text" 
                                                            data-mode="popover" 
                                                            data-showbuttons="left" 
                                                            class="is-editable" <?php } ?>>
                                                            <?php echo $data['status']; ?>  
                                                        </a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    <th class="td-btn">
                                                        
                                                        
                                                        <?php if($can_view){ ?>
                                                        
                                                        <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("transaksi/view/$rec_id"); ?>">
                                                            <i class="fa fa-eye"></i> 
                                                        </a>
                                                        
                                                        <?php } ?>
                                                        
                                                        
                                                        <?php if($can_edit){ ?>
                                                        
                                                        <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("transaksi/edit/$rec_id"); ?>">
                                                            <i class="fa fa-edit"></i> 
                                                        </a>
                                                        
                                                        <?php } ?>
                                                        
                                                        
                                                        <?php if($can_delete){ ?>
                                                        
                                                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("transaksi/delete/$rec_id/?csrf_token=$csrf_token"); ?>" data-prompt-msg="Are you sure you want to delete it?" data-display-style="confirm">
                                                            <i class="fa fa-times"></i>
                                                            
                                                        </a>
                                                        
                                                        <?php } ?>
                                                        
                                                        
                                                    </th>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                
                                                
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><h4>Total Transfer = <?php echo $sum_of_total_transfer;  ?></h4></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
                                                    
                                                    <?php if($can_delete){ ?>
                                                    
                                                    <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="confirm" data-url="<?php print_link("transaksi/delete/{sel_ids}/?csrf_token=$csrf_token"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                                        <i class="fa fa-times"></i> Delete Selected
                                                    </button>
                                                    
                                                    <?php } ?>
                                                    
                                                    
                                                    <button class="btn btn-sm btn-primary export-btn"><i class="fa fa-save"></i> File Export</button>
                                                    
                                                    
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
        