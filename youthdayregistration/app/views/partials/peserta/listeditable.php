
<?php 
//check if current user role is allowed access to the pages
$can_add = PageAccessManager::is_allowed('peserta/add');
$can_edit = PageAccessManager::is_allowed('peserta/edit');
$can_view = PageAccessManager::is_allowed('peserta/view');
$can_delete = PageAccessManager::is_allowed('peserta/delete');
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
                    <h3 class="record-title">Peserta</h3>
                    
                </div>
                
                <div class="col-sm-3 ">
                    
                    <?php if($can_add){ ?>
                    
                    <a  class="btn btn btn-primary my-1" href="<?php print_link("peserta/add") ?>">
                        <i class="fa fa-plus"></i>                              
                        Add New Peserta 
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
                                        <a class="text-capitalize" href="<?php print_link('peserta'); ?>">
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
                                        <a class="text-capitalize" href="<?php print_link('peserta') ?>">Search</a>
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
                            <div id="peserta-listeditable-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-primary text-light">
                                            <tr>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Full Name</th>
                                                <th > Email</th>
                                                <th > Telp</th>
                                                <th > Cell Group</th>
                                                <th > Date of Birth</th>
                                                <th > Gender</th>
                                                <th > Departure</th>
                                                <th > Arrival</th>
                                                
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                            $counter = 0;
                                            
                                            foreach($records as $data){
                                            $rec_id = (!empty($data['kd_peserta']) ? urlencode($data['kd_peserta']) : null);
                                            $counter++;
                                            
                                            
                                            ?>
                                            <tr>
                                                
                                                <th class="td-sno"><?php echo $counter; ?></th>
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['nama_lengkap']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="nama_lengkap" 
                                                        data-title="Enter Full Name" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['nama_lengkap']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td><a href="<?php print_link("mailto:$data[email]") ?>"><?php echo $data['email']; ?></a></td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['telp']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="telp" 
                                                        data-title="Enter Telephone" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="text" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['telp']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $asal_sel_komunitas); ?>' 
                                                        data-value="<?php echo $data['asal_sel_komunitas']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="asal_sel_komunitas" 
                                                        data-title="Enter Cell Group/Community for non KTM" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['asal_sel_komunitas']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-flatpickr="{altFormat: 'Y-m-d', enableTime: false, minDate: '', maxDate: ''}" 
                                                        data-source='<?php echo json_encode_quote(Menu :: $kd_akun); ?>' 
                                                        data-value="<?php echo $data['tgl_lahir']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="tgl_lahir" 
                                                        data-title="Enter Date of Birth" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="flatdatetimepicker" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['tgl_lahir']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php echo json_encode_quote(Menu :: $jenis_kelamin); ?>' 
                                                        data-value="<?php echo $data['jenis_kelamin']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="jenis_kelamin" 
                                                        data-title="Enter Gender" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="radiolist" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['jenis_kelamin']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php print_link('api/json/peserta_transport_pergi_option_list'); ?>' 
                                                        data-value="<?php echo $data['transport_pergi']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="transport_pergi" 
                                                        data-title="Choose Departure Transport (Discount only for Two Way)" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="select" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['transport_pergi']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <td>
                                                    <a <?php if($can_edit){ ?> data-source='<?php print_link('api/json/peserta_transport_pulang_option_list'); ?>' 
                                                        data-value="<?php echo $data['transport_pulang']; ?>" 
                                                        data-pk="<?php echo $data['kd_peserta'] ?>" 
                                                        data-url="<?php print_link("peserta/editfield/" . urlencode($data['kd_peserta'])); ?>" 
                                                        data-name="transport_pulang" 
                                                        data-title="Choose Arrive Transport  (Discount only for Two Way)" 
                                                        data-placement="left" 
                                                        data-toggle="click" 
                                                        data-type="select" 
                                                        data-mode="popover" 
                                                        data-showbuttons="left" 
                                                        class="is-editable" <?php } ?>>
                                                        <?php echo $data['transport_pulang']; ?>  
                                                    </a>
                                                </td>
                                                
                                                
                                                
                                                
                                                <th class="td-btn">
                                                    
                                                    
                                                    
                                                    <?php if($can_edit){ ?>
                                                    
                                                    <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("peserta/edit/$rec_id"); ?>">
                                                        <i class="fa fa-edit"></i> 
                                                    </a>
                                                    
                                                    <?php } ?>
                                                    
                                                    
                                                    <?php if($can_delete){ ?>
                                                    
                                                    <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("peserta/delete/$rec_id/?csrf_token=$csrf_token"); ?>" data-prompt-msg="Are you sure you want to delete it?" data-display-style="confirm">
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
                                                
                                                <?php if($can_delete){ ?>
                                                
                                                <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="confirm" data-url="<?php print_link("peserta/delete/{sel_ids}/?csrf_token=$csrf_token"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
                                            $pager->page_name='peserta';
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
                                    <h4><i class="fa fa-ban"></i> Please Add more Participant</h4>
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
    