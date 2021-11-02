@inject('comp_model', 'App\Models\ComponentsData')
<?php
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">Edit Pelanggan</h5>
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
                <div class="col-md-9 comp-grid">
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card bg-light p-3 animated fadeIn page-content">
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("pelanggan/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="no_plg_lama">No Plg Lama </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-no_plg_lama-holder" class=" ">
                                            <input id="ctrl-no_plg_lama"  value="<?php  echo $data['no_plg_lama']; ?>" type="text" placeholder="Enter No Plg Lama"  name="no_plg_lama"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_lengkap">Nama Lengkap </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_lengkap-holder" class=" ">
                                            <input id="ctrl-nama_lengkap"  value="<?php  echo $data['nama_lengkap']; ?>" type="text" placeholder="Enter Nama Lengkap"  name="nama_lengkap"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="telp1">Telp1 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-telp1-holder" class=" ">
                                            <input id="ctrl-telp1"  value="<?php  echo $data['telp1']; ?>" type="text" placeholder="Enter Telp1"  name="telp1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="telp2">Telp2 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-telp2-holder" class=" ">
                                            <input id="ctrl-telp2"  value="<?php  echo $data['telp2']; ?>" type="text" placeholder="Enter Telp2"  name="telp2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="alamat">Alamat </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-alamat-holder" class=" ">
                                            <input id="ctrl-alamat"  value="<?php  echo $data['alamat']; ?>" type="text" placeholder="Enter Alamat"  name="alamat"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kotakab">Kotakab </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kotakab-holder" class=" ">
                                            <input id="ctrl-kotakab"  value="<?php  echo $data['kotakab']; ?>" type="text" placeholder="Enter Kotakab"  name="kotakab"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="provinsi">Provinsi </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-provinsi-holder" class=" ">
                                            <input id="ctrl-provinsi"  value="<?php  echo $data['provinsi']; ?>" type="text" placeholder="Enter Provinsi"  name="provinsi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kodepos">Kodepos </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kodepos-holder" class=" ">
                                            <input id="ctrl-kodepos"  value="<?php  echo $data['kodepos']; ?>" type="text" placeholder="Enter Kodepos"  name="kodepos"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_lembaga">Nama Lembaga </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_lembaga-holder" class=" ">
                                            <input id="ctrl-nama_lembaga"  value="<?php  echo $data['nama_lembaga']; ?>" type="text" placeholder="Enter Nama Lembaga"  name="nama_lembaga"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ekspedisi1">Ekspedisi1 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ekspedisi1-holder" class=" ">
                                            <input id="ctrl-ekspedisi1"  value="<?php  echo $data['ekspedisi1']; ?>" type="text" placeholder="Enter Ekspedisi1"  name="ekspedisi1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ekspedisi2">Ekspedisi2 </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ekspedisi2-holder" class=" ">
                                            <input id="ctrl-ekspedisi2"  value="<?php  echo $data['ekspedisi2']; ?>" type="text" placeholder="Enter Ekspedisi2"  name="ekspedisi2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="catatan_pelanggan">Catatan Pelanggan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-catatan_pelanggan-holder" class=" ">
                                            <input id="ctrl-catatan_pelanggan"  value="<?php  echo $data['catatan_pelanggan']; ?>" type="text" placeholder="Enter Catatan Pelanggan"  name="catatan_pelanggan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_pelanggan">Status Pelanggan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_pelanggan-holder" class=" ">
                                            <input id="ctrl-status_pelanggan"  value="<?php  echo $data['status_pelanggan']; ?>" type="text" placeholder="Enter Status Pelanggan"  name="status_pelanggan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kebiasaan_jenis_bayar">Kebiasaan Jenis Bayar <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kebiasaan_jenis_bayar-holder" class=" ">
                                            <input id="ctrl-kebiasaan_jenis_bayar"  value="<?php  echo $data['kebiasaan_jenis_bayar']; ?>" type="text" placeholder="Enter Kebiasaan Jenis Bayar"  required="" name="kebiasaan_jenis_bayar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="alokasi">Alokasi </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-alokasi-holder" class=" ">
                                            <input id="ctrl-alokasi"  value="<?php  echo $data['alokasi']; ?>" type="number" placeholder="Enter Alokasi" step="any"  name="alokasi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="prediksi_ongkir">Prediksi Ongkir </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-prediksi_ongkir-holder" class=" ">
                                            <input id="ctrl-prediksi_ongkir"  value="<?php  echo $data['prediksi_ongkir']; ?>" type="text" placeholder="Enter Prediksi Ongkir"  name="prediksi_ongkir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cabang">Cabang </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cabang-holder" class=" ">
                                            <input id="ctrl-cabang"  value="<?php  echo $data['cabang']; ?>" type="text" placeholder="Enter Cabang"  name="cabang"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jenis_produk">Jenis Produk </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jenis_produk-holder" class=" ">
                                            <input id="ctrl-jenis_produk"  value="<?php  echo $data['jenis_produk']; ?>" type="text" placeholder="Enter Jenis Produk"  name="jenis_produk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kloter">Kloter </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kloter-holder" class=" ">
                                            <input id="ctrl-kloter"  value="<?php  echo $data['kloter']; ?>" type="text" placeholder="Enter Kloter"  name="kloter"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tagihan">Tagihan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tagihan-holder" class=" ">
                                            <input id="ctrl-tagihan"  value="<?php  echo $data['tagihan']; ?>" type="text" placeholder="Enter Tagihan"  name="tagihan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="saldo">Saldo </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-saldo-holder" class=" ">
                                            <input id="ctrl-saldo"  value="<?php  echo $data['saldo']; ?>" type="text" placeholder="Enter Saldo"  name="saldo"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="alokasicafe">Alokasicafe <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-alokasicafe-holder" class=" ">
                                            <input id="ctrl-alokasicafe"  value="<?php  echo $data['alokasicafe']; ?>" type="number" placeholder="Enter Alokasicafe" step="any"  required="" name="alokasicafe"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            Update
                            <i class="material-icons">send</i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection
