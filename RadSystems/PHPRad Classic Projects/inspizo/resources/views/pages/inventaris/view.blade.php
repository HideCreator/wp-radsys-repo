@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("inventaris/add");
    $can_edit = $user->can("inventaris/edit");
    $can_view = $user->can("inventaris/view");
    $can_delete = $user->can("inventaris/delete");
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
                    <h5 class="font-weight-bold record-title">View Inventaris</h5>
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
                            $rec_id = ($data['id_balat'] ? urlencode($data['id_balat']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-id_balat p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Id Balat</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_balat'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-nama_balat p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Nama Balat</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['nama_balat'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-tanggal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Tanggal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['tanggal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jml_awl p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jml Awl</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jml_awl'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-balat_in p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Balat In</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['balat_in'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-balat_out p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Balat Out</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['balat_out'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jml_akh p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jml Akh</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jml_akh'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-satuan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Satuan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['satuan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("inventaris/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("inventaris/delete/$rec_id?redirect=inventaris"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
