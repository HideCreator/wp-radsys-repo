
<?php
$comp_model = new SharedController;
$view_data = $this->view_data; //array of all  data passed from controller
$field_name = $view_data['field_name'];
$field_value = $view_data['field_value'];
$form_data = $this->form_data; //$_GET request pass to the page as form fields values

$can_view = PageAccessManager :: is_allowed("kamar/view/$field_value");
$can_add = PageAccessManager :: is_allowed("kamar/add/?kd_kamar=$field_value");

$page_id = random_str(6);
?>
<div>
    <div class="card">
        <div class="card-header p-0 pt-2 px-2">
            <ul class="nav nav-tabs">
                
                <?php if($can_view){ ?>
                
                <li class="nav-item">
                    <a data-toggle="tab" href="#peserta_kamar_View_<?php echo $page_id ?>" class="nav-link active">
                        View
                    </a>
                </li>
                
                <?php } ?>
                
                <?php if($can_add){ ?>
                
                <li class="nav-item">
                    <a data-toggle="tab" href="#peserta_kamar_Add_<?php echo $page_id ?>" class="nav-link ">
                        Add
                    </a>
                </li>
                
                <?php } ?>
                
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                
                <?php if($can_view){ ?>
                
                <div class="tab-pane fade show active show" id="peserta_kamar_View_<?php echo $page_id ?>" role="tabpanel">
                    
                    <?php $this->render_page("kamar/view/$field_value"); ?>
                    
                </div>
                
                <?php } ?>
                
                <?php if($can_add){ ?>
                
                <div class="tab-pane fade show " id="peserta_kamar_Add_<?php echo $page_id ?>" role="tabpanel">
                    
                    <?php $this->render_page("kamar/add/?kd_kamar=$field_value"); ?>
                    
                </div>
                
                <?php } ?>
                
            </div>
        </div>
    </div>
</div>
