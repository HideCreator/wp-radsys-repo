
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
                            <div id="peserta-listcetak-records">
                                
                                <?php
                                if(!empty($records)){
                                ?>
                                <div class="page-records table-responsive">
                                    <table class="table  table-striped table-sm">
                                        <thead class="table-header bg-light">
                                            <tr>
                                                
                                                <th class="td-sno">#</th>
                                                <th > Nick Name</th>
                                                <th > Full Name</th>
                                                <th > Email</th>
                                                <th > Telp</th>
                                                <th > Origin Cell</th>
                                                <th > Origin city</th>
                                                <th > Date of Birth</th>
                                                <th > Gender</th>
                                                <th > Departure Transport</th>
                                                <th > Departure Price</th>
                                                <th > Arrival Transport</th>
                                                <th > Arrival Price</th>
                                                <th > Sub Total</th>
                                                
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
                                                
                                                
                                                <td> <?php echo $data['nama_panggilan']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['nama_lengkap']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td><a href="<?php print_link("mailto:$data[email]") ?>"><?php echo $data['email']; ?></a></td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['telp']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['asal_sel_komunitas']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['asal_kota_kab']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['tgl_lahir']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['jenis_kelamin']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['transport_pergi']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['harga_transport_pergi']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['transport_pulang']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['harga_transport_pulang']; ?> </td>
                                                
                                                
                                                
                                                
                                                <td> <?php echo $data['sub_total']; ?> </td>
                                                
                                                
                                                
                                                
                                                <th class="td-btn">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </th>
                                            </tr>
                                            <?php 
                                            }
                                            ?>
                                            
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
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
    