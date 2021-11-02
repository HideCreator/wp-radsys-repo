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
                    <h5 class="font-weight-bold record-title">Edit Transaksi</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("transaksi/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kd_trk">Kd Trk <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kd_trk-holder" class=" ">
                                            <input id="ctrl-kd_trk"  value="<?php  echo $data['kd_trk']; ?>" type="text" placeholder="Enter Kd Trk"  required="" name="kd_trk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ekspedisi1">Ekspedisi1 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ekspedisi1-holder" class=" ">
                                            <input id="ctrl-ekspedisi1"  value="<?php  echo $data['ekspedisi1']; ?>" type="text" placeholder="Enter Ekspedisi1"  required="" name="ekspedisi1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ekspedisi2">Ekspedisi2 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ekspedisi2-holder" class=" ">
                                            <input id="ctrl-ekspedisi2"  value="<?php  echo $data['ekspedisi2']; ?>" type="text" placeholder="Enter Ekspedisi2"  required="" name="ekspedisi2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="catatan">Catatan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-catatan-holder" class=" ">
                                            <textarea placeholder="Enter Catatan" id="ctrl-catatan"  required="" rows="5" name="catatan" class=" form-control"><?php  echo $data['catatan']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="produk_edisi">Produk Edisi <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-produk_edisi-holder" class=" ">
                                            <input id="ctrl-produk_edisi"  value="<?php  echo $data['produk_edisi']; ?>" type="text" placeholder="Enter Produk Edisi"  required="" name="produk_edisi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jenis_produk">Jenis Produk <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jenis_produk-holder" class=" ">
                                            <input id="ctrl-jenis_produk"  value="<?php  echo $data['jenis_produk']; ?>" type="text" placeholder="Enter Jenis Produk"  required="" name="jenis_produk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jumlah">Jumlah <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jumlah-holder" class=" ">
                                            <input id="ctrl-jumlah"  value="<?php  echo $data['jumlah']; ?>" type="number" placeholder="Enter Jumlah" step="any"  required="" name="jumlah"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="harga">Harga <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-harga-holder" class=" ">
                                            <input id="ctrl-harga"  value="<?php  echo $data['harga']; ?>" type="number" placeholder="Enter Harga" step="any"  required="" name="harga"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diskon">Diskon <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diskon-holder" class=" ">
                                            <input id="ctrl-diskon"  value="<?php  echo $data['diskon']; ?>" type="number" placeholder="Enter Diskon" step="any"  required="" name="diskon"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="subtotal">Subtotal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-subtotal-holder" class=" ">
                                            <input id="ctrl-subtotal"  value="<?php  echo $data['subtotal']; ?>" type="number" placeholder="Enter Subtotal" step="any"  required="" name="subtotal"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ongkir">Ongkir <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ongkir-holder" class=" ">
                                            <input id="ctrl-ongkir"  value="<?php  echo $data['ongkir']; ?>" type="number" placeholder="Enter Ongkir" step="any"  required="" name="ongkir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_bayar">Status Bayar <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_bayar-holder" class=" ">
                                            <input id="ctrl-status_bayar"  value="<?php  echo $data['status_bayar']; ?>" type="text" placeholder="Enter Status Bayar"  required="" name="status_bayar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="total_bayar">Total Bayar <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-total_bayar-holder" class=" ">
                                            <input id="ctrl-total_bayar"  value="<?php  echo $data['total_bayar']; ?>" type="number" placeholder="Enter Total Bayar" step="any"  required="" name="total_bayar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="piutangtotal">Piutangtotal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-piutangtotal-holder" class=" ">
                                            <input id="ctrl-piutangtotal"  value="<?php  echo $data['piutangtotal']; ?>" type="number" placeholder="Enter Piutangtotal" step="any"  required="" name="piutangtotal"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bayartotal">Bayartotal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bayartotal-holder" class=" ">
                                            <input id="ctrl-bayartotal"  value="<?php  echo $data['bayartotal']; ?>" type="number" placeholder="Enter Bayartotal" step="any"  required="" name="bayartotal"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="dihapus">Dihapus <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-dihapus-holder" class=" ">
                                            <input id="ctrl-dihapus"  value="<?php  echo $data['dihapus']; ?>" type="number" placeholder="Enter Dihapus" step="any"  required="" name="dihapus"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kategori">Kategori <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kategori-holder" class=" ">
                                            <input id="ctrl-kategori"  value="<?php  echo $data['kategori']; ?>" type="text" placeholder="Enter Kategori"  required="" name="kategori"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kd_pelanggan">Kd Pelanggan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kd_pelanggan-holder" class=" ">
                                            <input id="ctrl-kd_pelanggan"  value="<?php  echo $data['kd_pelanggan']; ?>" type="number" placeholder="Enter Kd Pelanggan" step="any"  required="" name="kd_pelanggan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cabang">Cabang <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cabang-holder" class=" ">
                                            <input id="ctrl-cabang"  value="<?php  echo $data['cabang']; ?>" type="text" placeholder="Enter Cabang"  required="" name="cabang"  class="form-control " />
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
