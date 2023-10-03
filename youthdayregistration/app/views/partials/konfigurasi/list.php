
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
                    <h3 class="record-title">Konfigurasi</h3>
                    
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
                                        <a class="text-capitalize" href="<?php print_link('konfigurasi'); ?>">
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
                                        <a class="text-capitalize" href="<?php print_link('konfigurasi') ?>">Search</a>
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
                            <div id="konfigurasi-list-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Id</th>
                                                <th > Userbca</th>
                                                <th > Password</th>
                                                <th > Jml1</th>
                                                <th > Jml2</th>
                                                <th > Pmutasi</th>
                                                <th > Email</th>
                                                <th > Refresh</th>
                                                
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $counter = 0;
                                            
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                                            $counter++;
                                            
                                            
                                            ?>
                                            <tr>
                                                
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                
                                                
                                                <td><a href="<?php print_link("konfigurasi/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['userbca']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("konfigurasi/editfield/" . urlencode($data['id'])); ?>" 
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
                                                
                                                
                                                
                                                
                                                <td> <span><?php echo $data['password']; ?></span></td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-step="1" 
                                                        data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['jml1']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("konfigurasi/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="jml1" 
                                                        data-title="Enter Jml1" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="number" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['jml1']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-step="1" 
                                                        data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['jml2']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("konfigurasi/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="jml2" 
                                                        data-title="Enter Jml2" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="number" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['jml2']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-step="1" 
                                                        data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['pmutasi']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("konfigurasi/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="pmutasi" 
                                                        data-title="Enter Pmutasi" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="number" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['pmutasi']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td><a href="<?php print_link("mailto:$data[email]") ?>"><?php echo $data['email']; ?></a></td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-step="1" 
                                                        data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['refresh']; ?>" 
                                                        data-pk="<?php echo $data['id'] ?>" 
                                                        data-url="<?php print_link("konfigurasi/editfield/" . urlencode($data['id'])); ?>" 
                                                        data-name="refresh" 
                                                        data-title="Enter Refresh" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="number" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['refresh']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <th class="td-btn">
                                                    
                                                    
                                                    <?php if($can_view){ ?>
                                                    
                                                    <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("konfigurasi/view/$rec_id"); ?>">
                                                        <i class="fa fa-eye"></i> 
                                                    </a>
                                                    
                                                    <?php } ?>
                                                    
                                                    
                                                    <?php if($can_edit){ ?>
                                                    
                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("konfigurasi/edit/$rec_id"); ?>">
                                                        <i class="fa fa-edit"></i> 
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
                                                
                                                
                                                <button class="btn btn-sm btn-primary export-btn"><i class="fa fa-save"></i> File Export</button>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="col">   
                                            
                                            <?php
                                            if( $show_pagination == true ){
                                            $pager = new Pagination($total_records,$record_count);
                                            $pager->page_name='konfigurasi';
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
    