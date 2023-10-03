
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('headerbca/add');
$can_edit = PageAccessManager::is_allowed('headerbca/edit');
$can_view = PageAccessManager::is_allowed('headerbca/view');
$can_delete = PageAccessManager::is_allowed('headerbca/delete');
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
                    <h3 class="record-title">Informasi Rekening</h3>
                    
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
                                        <a class="text-capitalize" href="<?php print_link('headerbca'); ?>">
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
                                        <a class="text-capitalize" href="<?php print_link('headerbca') ?>">Search</a>
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
                            <div id="headerbca-list-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Norek</th>
                                                <th > Nama</th>
                                                <th > Tgl</th>
                                                <th > Mata Uang</th>
                                                <th > Saldo</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $counter = 0;
                                            
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['']) ? urlencode($data['']) : null);
                                            $counter++;
                                            
                                            
                                            ?>
                                            <tr>
                                                
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['norek']; ?>" 
                                                        data-name="norek" 
                                                        data-title="Enter Norek" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['norek']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['nama']; ?>" 
                                                        data-name="nama" 
                                                        data-title="Enter Nama" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['nama']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['tgl']; ?>" 
                                                        data-name="tgl" 
                                                        data-title="Enter Tgl" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['tgl']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['muang']; ?>" 
                                                        data-name="muang" 
                                                        data-title="Enter Muang" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['muang']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['saldo']; ?>" 
                                                        data-name="saldo" 
                                                        data-title="Enter Saldo" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['saldo']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td><td></td><td></td><td></td><td></td><td></td>
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
                                                
                                                
                                                <button class="btn btn-sm btn-primary export-btn"><i class="fa fa-save"></i> File Export</button>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col">   
                                            
                                            <?php
                                            if( $show_pagination == true ){
                                            $pager = new Pagination($total_records,$record_count);
                                            $pager->page_name='headerbca';
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
    