@inject('comp_model', 'App\Models\ComponentsData')
<?php
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">Add New Transaksi Cafe</h5>
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
                        <form id="transaksi_cafe-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('transaksi_cafe.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_trk_cafe">Kd Trk Cafe <span class="text-danger">*</span></label>
                                    <div id="ctrl-kd_trk_cafe-holder" class=" "> 
                                        <input id="ctrl-kd_trk_cafe"  value="<?php echo get_value('kd_trk_cafe') ?>" type="number" placeholder="Enter Kd Trk Cafe" step="any"  required="" name="kd_trk_cafe"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_pelanggan_cafe">Kd Pelanggan Cafe </label>
                                    <div id="ctrl-kd_pelanggan_cafe-holder" class=" "> 
                                        <input id="ctrl-kd_pelanggan_cafe"  value="<?php echo get_value('kd_pelanggan_cafe') ?>" type="number" placeholder="Enter Kd Pelanggan Cafe" step="any"  name="kd_pelanggan_cafe"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="ekspedisi1">Ekspedisi1 </label>
                                    <div id="ctrl-ekspedisi1-holder" class=" "> 
                                        <input id="ctrl-ekspedisi1"  value="<?php echo get_value('ekspedisi1') ?>" type="text" placeholder="Enter Ekspedisi1"  name="ekspedisi1"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="ekspedisi2">Ekspedisi2 </label>
                                    <div id="ctrl-ekspedisi2-holder" class=" "> 
                                        <input id="ctrl-ekspedisi2"  value="<?php echo get_value('ekspedisi2') ?>" type="text" placeholder="Enter Ekspedisi2"  name="ekspedisi2"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="catatan">Catatan </label>
                                    <div id="ctrl-catatan-holder" class=" "> 
                                        <textarea placeholder="Enter Catatan" id="ctrl-catatan"  rows="5" name="catatan" class=" form-control"><?php echo get_value('catatan') ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="produk_edisi">Produk Edisi </label>
                                    <div id="ctrl-produk_edisi-holder" class=" "> 
                                        <input id="ctrl-produk_edisi"  value="<?php echo get_value('produk_edisi', "RUAH EDISI") ?>" type="text" placeholder="Enter Produk Edisi"  name="produk_edisi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="jumlah">Jumlah </label>
                                    <div id="ctrl-jumlah-holder" class=" "> 
                                        <input id="ctrl-jumlah"  value="<?php echo get_value('jumlah', "0") ?>" type="number" placeholder="Enter Jumlah" step="any"  name="jumlah"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="harga">Harga </label>
                                    <div id="ctrl-harga-holder" class=" "> 
                                        <input id="ctrl-harga"  value="<?php echo get_value('harga', "0") ?>" type="number" placeholder="Enter Harga" step="any"  name="harga"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="diskon">Diskon </label>
                                    <div id="ctrl-diskon-holder" class=" "> 
                                        <input id="ctrl-diskon"  value="<?php echo get_value('diskon', "0") ?>" type="number" placeholder="Enter Diskon" step="any"  name="diskon"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="subtotal">Subtotal </label>
                                    <div id="ctrl-subtotal-holder" class=" "> 
                                        <input id="ctrl-subtotal"  value="<?php echo get_value('subtotal', "0") ?>" type="number" placeholder="Enter Subtotal" step="any"  name="subtotal"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="ongkir">Ongkir </label>
                                    <div id="ctrl-ongkir-holder" class=" "> 
                                        <input id="ctrl-ongkir"  value="<?php echo get_value('ongkir', "0") ?>" type="number" placeholder="Enter Ongkir" step="any"  name="ongkir"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="status_bayar">Status Bayar </label>
                                    <div id="ctrl-status_bayar-holder" class=" "> 
                                        <input id="ctrl-status_bayar"  value="<?php echo get_value('status_bayar', "Belum Dipilih") ?>" type="text" placeholder="Enter Status Bayar"  name="status_bayar"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="total_bayar">Total Bayar </label>
                                    <div id="ctrl-total_bayar-holder" class=" "> 
                                        <input id="ctrl-total_bayar"  value="<?php echo get_value('total_bayar', "0") ?>" type="number" placeholder="Enter Total Bayar" step="any"  name="total_bayar"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="piutangtotal">Piutangtotal </label>
                                    <div id="ctrl-piutangtotal-holder" class=" "> 
                                        <input id="ctrl-piutangtotal"  value="<?php echo get_value('piutangtotal', "0") ?>" type="number" placeholder="Enter Piutangtotal" step="any"  name="piutangtotal"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="bayartotal">Bayartotal </label>
                                    <div id="ctrl-bayartotal-holder" class=" "> 
                                        <input id="ctrl-bayartotal"  value="<?php echo get_value('bayartotal', "0") ?>" type="number" placeholder="Enter Bayartotal" step="any"  name="bayartotal"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="dihapus">Dihapus </label>
                                    <div id="ctrl-dihapus-holder" class=" "> 
                                        <input id="ctrl-dihapus"  value="<?php echo get_value('dihapus', "0") ?>" type="number" placeholder="Enter Dihapus" step="any"  name="dihapus"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kategori">Kategori </label>
                                    <div id="ctrl-kategori-holder" class=" "> 
                                        <input id="ctrl-kategori"  value="<?php echo get_value('kategori', "baru") ?>" type="text" placeholder="Enter Kategori"  name="kategori"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="klot">Klot </label>
                                    <div id="ctrl-klot-holder" class=" "> 
                                        <input id="ctrl-klot"  value="<?php echo get_value('klot') ?>" type="text" placeholder="Enter Klot"  name="klot"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="cabangtrk">Cabangtrk </label>
                                    <div id="ctrl-cabangtrk-holder" class=" "> 
                                        <input id="ctrl-cabangtrk"  value="<?php echo get_value('cabangtrk', "cabang") ?>" type="text" placeholder="Enter Cabangtrk"  name="cabangtrk"  class="form-control " />
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                Submit
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
