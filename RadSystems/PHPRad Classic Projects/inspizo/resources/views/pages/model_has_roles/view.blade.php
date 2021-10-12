@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("model_has_roles/add");
    $can_edit = $user->can("model_has_roles/edit");
    $can_view = $user->can("model_has_roles/view");
    $can_delete = $user->can("model_has_roles/delete");
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
                    <h5 class="font-weight-bold record-title">View Model Has Roles</h5>
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
                            $rec_id = ($data['role_id'] ? urlencode($data['role_id']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-role_id p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">supervisor_account</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Kode Peran</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['role_id'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-model_type p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">subject</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Model Tipe</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['model_type'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-model_id p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">fiber_manual_record</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Kode Model Pengguna</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['model_id'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("model_has_roles/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("model_has_roles/delete/$rec_id?redirect=model_has_roles"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
