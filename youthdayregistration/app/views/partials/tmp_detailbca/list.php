
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('tmp_detailbca/add');
$can_edit = PageAccessManager::is_allowed('tmp_detailbca/edit');
$can_view = PageAccessManager::is_allowed('tmp_detailbca/view');
$can_delete = PageAccessManager::is_allowed('tmp_detailbca/delete');
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
                    <h3 class="record-title">Tmp Detailbca</h3>
                    
                </div>
                
                <div class="col-sm-3 ">
                    
                    <?php if($can_add){ ?>
                    
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("tmp_detailbca/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Tmp Detailbca 
                    </a>
                    
                    <?php } ?>
                    
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
                                        <a class="text-capitalize" href="<?php print_link('tmp_detailbca'); ?>">
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
                                        <a class="text-capitalize" href="<?php print_link('tmp_detailbca') ?>">Search</a>
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
                            <div id="tmp_detailbca-list-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Tgl</th>
                                                <th > Ket</th>
                                                <th > Mutasi</th>
                                                <th > Mkode</th>
                                                <th > Userbca</th>
                                                
                                                
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
                                                        data-value="<?php echo $data['ket']; ?>" 
                                                        data-name="ket" 
                                                        data-title="Enter Ket" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['ket']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['mutasi']; ?>" 
                                                        data-name="mutasi" 
                                                        data-title="Enter Mutasi" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['mutasi']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['mkode']; ?>" 
                                                        data-name="mkode" 
                                                        data-title="Enter Mkode" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['mkode']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['userbca']; ?>" 
                                                        data-name="userbca" 
                                                        data-title="Enter Userbca" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['userbca']; ?>  
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
                                            $pager->page_name='tmp_detailbca';
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
    