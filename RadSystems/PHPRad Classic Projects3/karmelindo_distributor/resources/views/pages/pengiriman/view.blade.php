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
                    <h5 class="font-weight-bold record-title">View Pengiriman</h5>
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
                            $rec_id = ($data['kd_pengiriman'] ? urlencode($data['kd_pengiriman']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-kd_pengiriman p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Pengiriman</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_pengiriman'] ; ?>
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
                                <div class="border-top td-kd_transaksi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Transaksi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_transaksi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-ekspedisi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Ekspedisi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['ekspedisi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-biaya p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Biaya</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['biaya'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-no_resi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> No Resi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['no_resi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-status p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Status</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['status'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-tgl_kirim p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Tgl Kirim</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['tgl_kirim'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-catatan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Catatan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['catatan'] ; ?>
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
                                <div class="border-top td-produk_edisi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Produk Edisi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['produk_edisi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jumlah p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jumlah</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jumlah'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <a class="btn btn-sm btn-info"  href="<?php print_link("pengiriman/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("pengiriman/delete/$rec_id?redirect=pengiriman"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
