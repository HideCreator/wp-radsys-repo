@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->can("pelanggan/add");
    $can_edit = $user->can("pelanggan/edit");
    $can_view = $user->can("pelanggan/view");
    $can_delete = $user->can("pelanggan/delete");
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
                    <h5 class="font-weight-bold record-title">View Pelanggan</h5>
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
                            $rec_id = ($data['id_pelanggan'] ? urlencode($data['id_pelanggan']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-id_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kode Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['id_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-nama_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">people</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Nama Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['nama_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-nama_tempat p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">domain</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Nama Tempat</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['nama_tempat'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-alamat p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Alamat</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['alamat'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-telp p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">phone</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Nomor Telepon</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['telp'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jenis_usaha p-2">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><i class="material-icons ">domain</i></div>
                                        <div class="col">
                                            <div class="text-muted"> Jenis Usaha</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jenis_usaha'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("pelanggan/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <?php } ?>
                            <?php if($can_delete){ ?>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("pelanggan/delete/$rec_id?redirect=pelanggan"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
