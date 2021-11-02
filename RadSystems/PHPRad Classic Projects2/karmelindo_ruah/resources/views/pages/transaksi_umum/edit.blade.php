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
                    <h5 class="font-weight-bold record-title">Edit Transaksi Umum</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("transaksi_umum/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <label class="control-label" for="kode_unik">Kode Unik </label>
                                <div id="ctrl-kode_unik-holder" class=" "> 
                                    <input id="ctrl-kode_unik"  value="<?php  echo $data['kode_unik']; ?>" type="text" placeholder="Enter Kode Unik"  name="kode_unik"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="atas_nama">Atas Nama </label>
                                <div id="ctrl-atas_nama-holder" class=" "> 
                                    <input id="ctrl-atas_nama"  value="<?php  echo $data['atas_nama']; ?>" type="text" placeholder="Enter Atas Nama"  name="atas_nama"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="alamat">Alamat </label>
                                <div id="ctrl-alamat-holder" class=" "> 
                                    <input id="ctrl-alamat"  value="<?php  echo $data['alamat']; ?>" type="text" placeholder="Enter Alamat"  name="alamat"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="kotakab">Kotakab </label>
                                <div id="ctrl-kotakab-holder" class=" "> 
                                    <input id="ctrl-kotakab"  value="<?php  echo $data['kotakab']; ?>" type="text" placeholder="Enter Kotakab"  name="kotakab"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="provinsi">Provinsi </label>
                                <div id="ctrl-provinsi-holder" class=" "> 
                                    <input id="ctrl-provinsi"  value="<?php  echo $data['provinsi']; ?>" type="text" placeholder="Enter Provinsi"  name="provinsi"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="total_bayar">Total Bayar </label>
                                <div id="ctrl-total_bayar-holder" class=" "> 
                                    <input id="ctrl-total_bayar"  value="<?php  echo $data['total_bayar']; ?>" type="text" placeholder="Enter Total Bayar"  name="total_bayar"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="status_bayar">Status Bayar </label>
                                <div id="ctrl-status_bayar-holder" class=" "> 
                                    <input id="ctrl-status_bayar"  value="<?php  echo $data['status_bayar']; ?>" type="text" placeholder="Enter Status Bayar"  name="status_bayar"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="tgl_bayar">Tgl Bayar </label>
                                <div id="ctrl-tgl_bayar-holder" class="input-group "> 
                                    <input id="ctrl-tgl_bayar" class="form-control datepicker  datepicker"  value="<?php  echo $data['tgl_bayar']; ?>" type="datetime" name="tgl_bayar" placeholder="Enter Tgl Bayar" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="catatan">Catatan </label>
                                <div id="ctrl-catatan-holder" class=" "> 
                                    <textarea placeholder="Enter Catatan" id="ctrl-catatan"  rows="5" name="catatan" class=" form-control"><?php  echo $data['catatan']; ?></textarea>
                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="dihapus">Dihapus </label>
                                <div id="ctrl-dihapus-holder" class=" "> 
                                    <input id="ctrl-dihapus"  value="<?php  echo $data['dihapus']; ?>" type="text" placeholder="Enter Dihapus"  name="dihapus"  class="form-control " />
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
