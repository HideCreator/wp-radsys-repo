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
                            <input id="ctrl-id_pelanggan"  value="<?php  echo $data['id_pelanggan']; ?>" type="hidden" placeholder="Enter Id Pelanggan"  required="" name="id_pelanggan"  class="form-control " />
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_pelanggan">Nama Pelanggan </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_pelanggan-holder" class="input-group ">
                                            <input id="ctrl-nama_pelanggan"  value="<?php  echo $data['nama_pelanggan']; ?>" type="text" placeholder="Enter Nama Pelanggan"  name="nama_pelanggan"  class="form-control " />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="material-icons ">person</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_tempat">Nama Tempat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_tempat-holder" class="input-group ">
                                            <input id="ctrl-nama_tempat"  value="<?php  echo $data['nama_tempat']; ?>" type="text" placeholder="Enter Nama Tempat"  required="" name="nama_tempat"  class="form-control " />
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="material-icons ">domain</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="alamat">Alamat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-alamat-holder" class=" ">
                                            <input id="ctrl-alamat"  value="<?php  echo $data['alamat']; ?>" type="text" placeholder="Enter Alamat"  required="" name="alamat"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="telp">Nomor Telepon </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-telp-holder" class="input-group ">
                                            <input id="ctrl-telp"  value="<?php  echo $data['telp']; ?>" type="number" placeholder="Enter Nomor Telepon" max="13" step="any"  name="telp"  data-url="componentsdata/pelanggan_telp_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                            <div class="check-status"></div> 
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="material-icons ">phone</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jenis_usaha">Jenis Usaha <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jenis_usaha-holder" class=" ">
                                            <?php
                                                $options = Menu::jenis_usaha();
                                                $field_value = $data['jenis_usaha'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                //check if value is among checked options
                                                $checked = Html::get_record_checked($field_value, $value);
                                            ?>
                                            <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="jenis_usaha" />
                                            <span class="custom-control-label"><?php echo $label ?></span>
                                            </label>
                                            <?php
                                                }
                                                }
                                            ?>
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
