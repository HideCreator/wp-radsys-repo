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
                            $rec_id = ($data['kd_pelanggan'] ? urlencode($data['kd_pelanggan']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
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
                                <div class="border-top td-nama_lengkap p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Nama Lengkap</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['nama_lengkap'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-telp1 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Telp1</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['telp1'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-telp2 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Telp2</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['telp2'] ; ?>
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
                                <div class="border-top td-kotakab p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kotakab</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kotakab'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-provinsi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Provinsi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['provinsi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kodepos p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kodepos</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kodepos'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-nama_lembaga p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Nama Lembaga</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['nama_lembaga'] ; ?>
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
                                <div class="border-top td-catatan_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Catatan Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['catatan_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-status_pelanggan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Status Pelanggan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['status_pelanggan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kebiasaan_jenis_bayar p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kebiasaan Jenis Bayar</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kebiasaan_jenis_bayar'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-alokasi p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Alokasi</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['alokasi'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-prediksi_ongkir p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Prediksi Ongkir</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['prediksi_ongkir'] ; ?>
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
                                <div class="border-top td-cabang p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Cabang</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['cabang'] ; ?>
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
                                <div class="border-top td-tagihan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Tagihan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['tagihan'] ; ?>
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
                            <a class="btn btn-sm btn-info"  href="<?php print_link("pelanggan/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("pelanggan/delete/$rec_id?redirect=pelanggan"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
