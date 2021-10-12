@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("dinas/add");
    $can_edit = $user->can("dinas/edit");
    $can_view = $user->can("dinas/view");
    $can_delete = $user->can("dinas/delete");
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
                    <h5 class="font-weight-bold record-title">View Dinas</h5>
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
                            $rec_id = ($data['id_dinas'] ? urlencode($data['id_dinas']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-id_dinas p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kode Dinas</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_dinas'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-id_pengguna p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kode Pengguna</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_pengguna'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-peserta p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Peserta</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['peserta'] ; ?>
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
                                <div class="border-top td-waktu p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Waktu</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['waktu'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-status_dinas p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Status Dinas</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['status_dinas'] ; ?>
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
                                <div class="border-top td-mengetahui p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Mengetahui</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['mengetahui'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("dinas/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("dinas/delete/$rec_id?redirect=dinas"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
