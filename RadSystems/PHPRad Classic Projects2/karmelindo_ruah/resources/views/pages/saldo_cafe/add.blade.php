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
                    <h5 class="font-weight-bold record-title">Add New Saldo Cafe</h5>
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
                        <form id="saldo_cafe-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('saldo_cafe.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_saldo_cafe">Kd Saldo Cafe <span class="text-danger">*</span></label>
                                    <div id="ctrl-kd_saldo_cafe-holder" class=" "> 
                                        <input id="ctrl-kd_saldo_cafe"  value="<?php echo get_value('kd_saldo_cafe') ?>" type="number" placeholder="Enter Kd Saldo Cafe" step="any"  required="" name="kd_saldo_cafe"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_pelanggan_cafe">Kd Pelanggan Cafe </label>
                                    <div id="ctrl-kd_pelanggan_cafe-holder" class=" "> 
                                        <input id="ctrl-kd_pelanggan_cafe"  value="<?php echo get_value('kd_pelanggan_cafe') ?>" type="number" placeholder="Enter Kd Pelanggan Cafe" step="any"  name="kd_pelanggan_cafe"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="pemasukkan">Pemasukkan </label>
                                    <div id="ctrl-pemasukkan-holder" class=" "> 
                                        <input id="ctrl-pemasukkan"  value="<?php echo get_value('pemasukkan') ?>" type="number" placeholder="Enter Pemasukkan" step="any"  name="pemasukkan"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="pengeluaran">Pengeluaran </label>
                                    <div id="ctrl-pengeluaran-holder" class=" "> 
                                        <input id="ctrl-pengeluaran"  value="<?php echo get_value('pengeluaran') ?>" type="number" placeholder="Enter Pengeluaran" step="any"  name="pengeluaran"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="keterangan">Keterangan </label>
                                    <div id="ctrl-keterangan-holder" class=" "> 
                                        <textarea placeholder="Enter Keterangan" id="ctrl-keterangan"  rows="5" name="keterangan" class=" form-control"><?php echo get_value('keterangan') ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_trk_cafe">Kd Trk Cafe </label>
                                    <div id="ctrl-kd_trk_cafe-holder" class=" "> 
                                        <input id="ctrl-kd_trk_cafe"  value="<?php echo get_value('kd_trk_cafe') ?>" type="number" placeholder="Enter Kd Trk Cafe" step="any"  name="kd_trk_cafe"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="klasifikasi">Klasifikasi </label>
                                    <div id="ctrl-klasifikasi-holder" class=" "> 
                                        <input id="ctrl-klasifikasi"  value="<?php echo get_value('klasifikasi') ?>" type="text" placeholder="Enter Klasifikasi"  name="klasifikasi"  class="form-control " />
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
