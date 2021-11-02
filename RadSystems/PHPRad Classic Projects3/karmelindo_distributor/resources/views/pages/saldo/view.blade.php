@inject('comp_model', 'App\Models\ComponentsData')
<?php
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
                    <h5 class="font-weight-bold record-title">View Saldo</h5>
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
                            $rec_id = ($data['kd_db_saldo'] ? urlencode($data['kd_db_saldo']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-kd_db_saldo p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Db Saldo</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_db_saldo'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_saldo p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Saldo</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_saldo'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-timestamp p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Timestamp</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-pemasukkan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Pemasukkan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['pemasukkan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-pengeluaran p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Pengeluaran</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['pengeluaran'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-keterangan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Keterangan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['keterangan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_trk p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Trk</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_trk'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-klasifikasi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Klasifikasi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['klasifikasi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jenis_produk p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jenis Produk</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jenis_produk'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-simpanan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Simpanan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['simpanan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <a class="btn btn-sm btn-info"  href="<?php print_link("saldo/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("saldo/delete/$rec_id?redirect=saldo"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                            <i class="material-icons">clear</i> Delete
                            </a>
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
