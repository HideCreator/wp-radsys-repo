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
                    <h5 class="font-weight-bold record-title">Add New Produk Edisi</h5>
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
                        <form id="produk_edisi-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('produk_edisi.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kd_internal">Kd Internal </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kd_internal-holder" class=" ">
                                                <input id="ctrl-kd_internal"  value="<?php echo get_value('kd_internal') ?>" type="text" placeholder="Enter Kd Internal"  name="kd_internal"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kd_isbn_issn">Kd Isbn Issn </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kd_isbn_issn-holder" class=" ">
                                                <input id="ctrl-kd_isbn_issn"  value="<?php echo get_value('kd_isbn_issn') ?>" type="text" placeholder="Enter Kd Isbn Issn"  name="kd_isbn_issn"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="judul">Judul </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-judul-holder" class=" ">
                                                <input id="ctrl-judul"  value="<?php echo get_value('judul') ?>" type="text" placeholder="Enter Judul"  name="judul"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="jenis">Jenis </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-jenis-holder" class=" ">
                                                <input id="ctrl-jenis"  value="<?php echo get_value('jenis', "Produk") ?>" type="text" placeholder="Enter Jenis"  name="jenis"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="satuan">Satuan </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-satuan-holder" class=" ">
                                                <input id="ctrl-satuan"  value="<?php echo get_value('satuan', "eks") ?>" type="text" placeholder="Enter Satuan"  name="satuan"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="harga_dasar">Harga Dasar </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-harga_dasar-holder" class=" ">
                                                <input id="ctrl-harga_dasar"  value="<?php echo get_value('harga_dasar', "0") ?>" type="number" placeholder="Enter Harga Dasar" step="any"  name="harga_dasar"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="harga_jual">Harga Jual </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-harga_jual-holder" class=" ">
                                                <input id="ctrl-harga_jual"  value="<?php echo get_value('harga_jual', "0") ?>" type="number" placeholder="Enter Harga Jual" step="any"  name="harga_jual"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="stok_awal">Stok Awal </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-stok_awal-holder" class=" ">
                                                <input id="ctrl-stok_awal"  value="<?php echo get_value('stok_awal', "0") ?>" type="number" placeholder="Enter Stok Awal" step="any"  name="stok_awal"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="judul_lama">Judul Lama </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-judul_lama-holder" class=" ">
                                                <input id="ctrl-judul_lama"  value="<?php echo get_value('judul_lama') ?>" type="text" placeholder="Enter Judul Lama"  name="judul_lama"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kode_tahun">Kode Tahun </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kode_tahun-holder" class=" ">
                                                <input id="ctrl-kode_tahun"  value="<?php echo get_value('kode_tahun', "20") ?>" type="text" placeholder="Enter Kode Tahun"  name="kode_tahun"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kode_bulan">Kode Bulan </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kode_bulan-holder" class=" ">
                                                <input id="ctrl-kode_bulan"  value="<?php echo get_value('kode_bulan') ?>" type="text" placeholder="Enter Kode Bulan"  name="kode_bulan"  class="form-control " />
                                            </div>
                                        </div>
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
