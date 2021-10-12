@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("role_has_permissions/add");
    $can_edit = $user->can("role_has_permissions/edit");
    $can_view = $user->can("role_has_permissions/view");
    $can_delete = $user->can("role_has_permissions/delete");
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">Role Has Permissions</h5>
                </div>
                <div class="col-md-auto ">
                    <?php if($can_add){ ?>
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("role_has_permissions/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Role Has Permissions 
                    </a>
                    <?php } ?>
                </div>
                <div class="col-md-3 ">
                    <form  class="search" action="{{ url()->current() }}" method="get">
                        <input type="hidden" name="page" value="1" />
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="Search" />
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>
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
                    <div class="">
                        <?php Html::page_bread_crumb("role_has_permissions/index", $field_name, $field_value); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card  animated fadeIn page-content">
                        <div id="role_has_permissions-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header ">
                                        <tr>
                                            <?php if($can_delete){ ?>
                                            <th class="td-checkbox">
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="toggle-check-all custom-control-input" type="checkbox" />
                                            <span class="custom-control-label"></span>
                                            </label>
                                            </th>
                                            <?php } ?>
                                            <th class="td-sno">#</th>
                                            <th  class="td-permission_id"> Permission Id</th>
                                            <th  class="td-role_id"> Role Id</th>
                                            <th class="td-btn"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($total_records){
                                    ?>
                                    <tbody class="page-data">
                                        <!--record-->
                                        <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = ($data['permission_id'] ? urlencode($data['permission_id']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <?php if($can_delete){ ?>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['permission_id'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <?php } ?>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-permission_id">
                                                <?php echo  $data['permission_id'] ; ?>
                                            </td>
                                            <td class="td-role_id">
                                                <a href="<?php print_link("role_has_permissions/view/$data[permission_id]") ?>"><?php echo $data['role_id']; ?></a>
                                            </td>
                                            <td class="td-btn">
                                                <?php if($can_view){ ?>
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("role_has_permissions/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <?php } ?>
                                                <?php if($can_edit){ ?>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("role_has_permissions/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <?php } ?>
                                                <?php if($can_delete){ ?>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("role_has_permissions/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                <i class="material-icons">clear</i>
                                                </a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data"></tbody>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <tbody class="page-data">
                                        <tr>
                                            <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                                                <i class="material-icons">block</i> No record found
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <?php
                                if($show_footer){
                            ?>
                            <div class="">
                                <div class="row justify-content-center">    
                                    <div class="col-md-auto justify-content-center">    
                                        <div class="p-3 d-flex justify-content-between">    
                                            <?php if($can_delete){ ?>
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("role_has_permissions/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                            <i class="material-icons">clear</i> Delete Selected
                                            </button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col">   
                                        <?php
                                            if($show_pagination == true){
                                            $pager = new Pagination($total_records, $record_count);
                                            $pager->show_page_count = true;
                                            $pager->show_record_count = true;
                                            $pager->show_page_limit =true;
                                            $pager->limit = $limit;
                                            $pager->show_page_number_list = true;
                                            $pager->pager_link_range=5;
                                            $pager->render();
                                            }
                                        ?>
                                    </div>
                                </div>
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


@endsection
