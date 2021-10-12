@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("agenda/add");
    $can_edit = $user->can("agenda/edit");
    $can_view = $user->can("agenda/view");
    $can_delete = $user->can("agenda/delete");
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
                    <h5 class="font-weight-bold record-title">View Agenda</h5>
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
                            $rec_id = ($data['id_agenda'] ? urlencode($data['id_agenda']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-id_agenda p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">fiber_manual_record</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Kode Agenda</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_agenda'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-id_pengguna p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">person</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Kode Pengguna</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_pengguna'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-tanggal p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">event_note</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Tanggal</div>
                                            <div class="font-weight-bold">
                                                <?php echo relative_date( $data['tanggal'] ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-uraian p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">assignment</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Uraian</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['uraian'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-id_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">people</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Kode Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-keterangan p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">assessment</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Keterangan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['keterangan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-tanggal_kunjungan p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">event</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Tanggal Kunjungan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['tanggal_kunjungan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("agenda/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("agenda/delete/$rec_id?redirect=agenda"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
