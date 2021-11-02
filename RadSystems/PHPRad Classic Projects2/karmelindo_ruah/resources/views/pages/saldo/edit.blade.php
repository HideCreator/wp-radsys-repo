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
                    <h5 class="font-weight-bold record-title">Edit Saldo</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("saldo/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kd_pelanggan">Kd Pelanggan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kd_pelanggan-holder" class=" ">
                                            <input id="ctrl-kd_pelanggan"  value="<?php  echo $data['kd_pelanggan']; ?>" type="number" placeholder="Enter Kd Pelanggan" step="any"  name="kd_pelanggan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pemasukkan">Pemasukkan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pemasukkan-holder" class=" ">
                                            <input id="ctrl-pemasukkan"  value="<?php  echo $data['pemasukkan']; ?>" type="number" placeholder="Enter Pemasukkan" step="any"  name="pemasukkan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pengeluaran">Pengeluaran </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pengeluaran-holder" class=" ">
                                            <input id="ctrl-pengeluaran"  value="<?php  echo $data['pengeluaran']; ?>" type="number" placeholder="Enter Pengeluaran" step="any"  name="pengeluaran"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan">Keterangan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan-holder" class=" ">
                                            <textarea placeholder="Enter Keterangan" id="ctrl-keterangan"  rows="5" name="keterangan" class=" form-control"><?php  echo $data['keterangan']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kd_trk_ruah">Kd Trk Ruah </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kd_trk_ruah-holder" class=" ">
                                            <input id="ctrl-kd_trk_ruah"  value="<?php  echo $data['kd_trk_ruah']; ?>" type="number" placeholder="Enter Kd Trk Ruah" step="any"  name="kd_trk_ruah"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="klasifikasi">Klasifikasi </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-klasifikasi-holder" class=" ">
                                            <input id="ctrl-klasifikasi"  value="<?php  echo $data['klasifikasi']; ?>" type="text" placeholder="Enter Klasifikasi"  name="klasifikasi"  class="form-control " />
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
