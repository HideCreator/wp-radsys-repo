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
                    <h5 class="font-weight-bold record-title">Add New Pengiriman</h5>
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
                        <form id="pengiriman-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('pengiriman.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_transaksi">Kd Transaksi </label>
                                    <div id="ctrl-kd_transaksi-holder" class=" "> 
                                        <input id="ctrl-kd_transaksi"  value="<?php echo get_value('kd_transaksi') ?>" type="number" placeholder="Enter Kd Transaksi" step="any"  name="kd_transaksi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="ekspedisi">Ekspedisi <span class="text-danger">*</span></label>
                                    <div id="ctrl-ekspedisi-holder" class=" "> 
                                        <input id="ctrl-ekspedisi"  value="<?php echo get_value('ekspedisi') ?>" type="text" placeholder="Enter Ekspedisi"  required="" name="ekspedisi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="biaya">Biaya <span class="text-danger">*</span></label>
                                    <div id="ctrl-biaya-holder" class=" "> 
                                        <input id="ctrl-biaya"  value="<?php echo get_value('biaya') ?>" type="number" placeholder="Enter Biaya" step="any"  required="" name="biaya"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="no_resi">No Resi <span class="text-danger">*</span></label>
                                    <div id="ctrl-no_resi-holder" class=" "> 
                                        <input id="ctrl-no_resi"  value="<?php echo get_value('no_resi') ?>" type="text" placeholder="Enter No Resi"  required="" name="no_resi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="status">Status </label>
                                    <div id="ctrl-status-holder" class=" "> 
                                        <input id="ctrl-status"  value="<?php echo get_value('status', "Telah Diterima Ekspedisi") ?>" type="text" placeholder="Enter Status"  name="status"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="tgl_kirim">Tgl Kirim </label>
                                    <div id="ctrl-tgl_kirim-holder" class="input-group "> 
                                        <input id="ctrl-tgl_kirim" class="form-control datepicker  datepicker"  value="<?php echo get_value('tgl_kirim') ?>" type="datetime" name="tgl_kirim" placeholder="Enter Tgl Kirim" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="catatan">Catatan </label>
                                    <div id="ctrl-catatan-holder" class=" "> 
                                        <input id="ctrl-catatan"  value="<?php echo get_value('catatan') ?>" type="text" placeholder="Enter Catatan"  name="catatan"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="jenis_produk">Jenis Produk </label>
                                    <div id="ctrl-jenis_produk-holder" class=" "> 
                                        <input id="ctrl-jenis_produk"  value="<?php echo get_value('jenis_produk') ?>" type="text" placeholder="Enter Jenis Produk"  name="jenis_produk"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="produk_edisi">Produk Edisi </label>
                                    <div id="ctrl-produk_edisi-holder" class=" "> 
                                        <input id="ctrl-produk_edisi"  value="<?php echo get_value('produk_edisi') ?>" type="text" placeholder="Enter Produk Edisi"  name="produk_edisi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="jumlah">Jumlah </label>
                                    <div id="ctrl-jumlah-holder" class=" "> 
                                        <input id="ctrl-jumlah"  value="<?php echo get_value('jumlah', "0") ?>" type="number" placeholder="Enter Jumlah" step="any"  name="jumlah"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="nama_pelanggan">Nama Pelanggan </label>
                                    <div id="ctrl-nama_pelanggan-holder" class=" "> 
                                        <input id="ctrl-nama_pelanggan"  value="<?php echo get_value('nama_pelanggan') ?>" type="text" placeholder="Enter Nama Pelanggan"  name="nama_pelanggan"  class="form-control " />
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
