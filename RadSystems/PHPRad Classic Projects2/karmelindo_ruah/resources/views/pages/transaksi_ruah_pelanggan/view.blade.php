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
                    <h5 class="font-weight-bold record-title">View Transaksi Ruah Pelanggan</h5>
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
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
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
                                <div class="border-top td-tr_kd_plg p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Tr Kd Plg</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['tr_kd_plg'] ; ?>
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
                                <div class="border-top td-p_kd_plg p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> P Kd Plg</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['p_kd_plg'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-no_plg_lama p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> No Plg Lama</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['no_plg_lama'] ; ?>
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
                                <div class="border-top td-plg_ekspedisi1 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Plg Ekspedisi1</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['plg_ekspedisi1'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-plg_ekspedisi2 p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Plg Ekspedisi2</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['plg_ekspedisi2'] ; ?>
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
                                <div class="border-top td-kloter p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kloter</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kloter'] ; ?>
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
                                <div class="border-top td-saldo p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Saldo</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['saldo'] ; ?>
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
                                <div class="border-top td-alokasicafe p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Alokasicafe</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['alokasicafe'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
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
