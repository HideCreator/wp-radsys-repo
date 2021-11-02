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
                    <h5 class="font-weight-bold record-title">View Transaksi Ruah</h5>
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
                            $rec_id = ($data['kd_db_trk_ruah'] ? urlencode($data['kd_db_trk_ruah']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-kd_db_trk_ruah p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Db Trk Ruah</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_db_trk_ruah'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_trk_ruah p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Trk Ruah</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_trk_ruah'] ; ?>
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
                                <div class="border-top td-ekspedisi1 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Ekspedisi1</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['ekspedisi1'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-ekspedisi2 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Ekspedisi2</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['ekspedisi2'] ; ?>
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
                                <div class="border-top td-harga p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Harga</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['harga'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-diskon p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Diskon</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['diskon'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-subtotal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Subtotal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['subtotal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-ongkir p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Ongkir</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['ongkir'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-status_bayar p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Status Bayar</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['status_bayar'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-total_bayar p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Total Bayar</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['total_bayar'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-piutangtotal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Piutangtotal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['piutangtotal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-bayartotal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Bayartotal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['bayartotal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-timestamp_create p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Timestamp Create</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['timestamp_create'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-timestamp_modified p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Timestamp Modified</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['timestamp_modified'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-dihapus p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Dihapus</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['dihapus'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kategori p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kategori</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kategori'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-klot p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Klot</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['klot'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-cabangtrk p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Cabangtrk</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['cabangtrk'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jumlahruah p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jumlahruah</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jumlahruah'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">save</i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = add_query_params(['export' => 'print']); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                    <img src="{{ asset('images/print.png') }}" class="mr-2" /> PRINT
                                    </a>
                                    <?php $export_pdf_link = add_query_params(['export' => 'pdf']); ?>
                                    <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                    <img src="{{ asset('images/pdf.png') }}" class="mr-2" /> PDF
                                    </a>
                                </div>
                            </div>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("transaksi_ruah/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("transaksi_ruah/delete/$rec_id?redirect=transaksi_ruah"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
