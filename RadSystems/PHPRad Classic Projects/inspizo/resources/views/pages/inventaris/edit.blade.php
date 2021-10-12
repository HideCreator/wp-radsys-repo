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
                    <h5 class="font-weight-bold record-title">Edit Inventaris</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("inventaris/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_balat">Nama Balat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_balat-holder" class=" ">
                                            <input id="ctrl-nama_balat"  value="<?php  echo $data['nama_balat']; ?>" type="text" placeholder="Enter Nama Balat"  required="" name="nama_balat"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tanggal-holder" class="input-group ">
                                            <input id="ctrl-tanggal" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tanggal']; ?>" type="datetime" name="tanggal" placeholder="Enter Tanggal" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jml_awl">Jml Awl <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jml_awl-holder" class=" ">
                                            <input id="ctrl-jml_awl"  value="<?php  echo $data['jml_awl']; ?>" type="number" placeholder="Enter Jml Awl" step="any"  required="" name="jml_awl"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="balat_in">Balat In <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-balat_in-holder" class=" ">
                                            <input id="ctrl-balat_in"  value="<?php  echo $data['balat_in']; ?>" type="number" placeholder="Enter Balat In" step="any"  required="" name="balat_in"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="balat_out">Balat Out <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-balat_out-holder" class=" ">
                                            <input id="ctrl-balat_out"  value="<?php  echo $data['balat_out']; ?>" type="number" placeholder="Enter Balat Out" step="any"  required="" name="balat_out"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jml_akh">Jml Akh <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jml_akh-holder" class=" ">
                                            <input id="ctrl-jml_akh"  value="<?php  echo $data['jml_akh']; ?>" type="number" placeholder="Enter Jml Akh" step="any"  required="" name="jml_akh"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="satuan">Satuan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-satuan-holder" class=" ">
                                            <input id="ctrl-satuan"  value="<?php  echo $data['satuan']; ?>" type="text" placeholder="Enter Satuan"  required="" name="satuan"  class="form-control " />
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
