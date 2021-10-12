@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("permissions/add");
    $can_edit = $user->can("permissions/edit");
    $can_view = $user->can("permissions/view");
    $can_delete = $user->can("permissions/delete");
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">View Permissions</h5>
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
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card  animated fadeIn page-content">
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-id p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Id</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-name p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Name</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['name'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-guard_name p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Guard Name</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['guard_name'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-created_at p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Created At</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['created_at'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-updated_at p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Updated At</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['updated_at'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("permissions/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("permissions/delete/$rec_id?redirect=permissions"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                            <i class="material-icons">clear</i> Delete
                            </a>
                            <?php } ?>
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="material-icons">block</i> No Record Found
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
