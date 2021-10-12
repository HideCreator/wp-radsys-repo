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
                    <h5 class="font-weight-bold record-title">Add New Dinas</h5>
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
                        <form id="dinas-back-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('dinas.back_store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_pengguna">Petugas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_pengguna-holder" class=" ">
                                                <select required=""  id="ctrl-id_pengguna" name="id_pengguna"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                    $options = $comp_model->id_pengguna_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('id_pengguna', $value);
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                <?php echo $label; ?>
                                                </option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="peserta">Peserta <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-peserta-holder" class=" ">
                                                <textarea placeholder="Enter Peserta" id="ctrl-peserta"  required="" rows="5" name="peserta" class=" form-control"><?php echo get_value('peserta') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="status_dinas">Status Dinas <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-status_dinas-holder" class=" ">
                                                <?php
                                                    $options = Menu::status_dinas();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    //check if current option is checked option
                                                    $checked = Html::get_field_checked('status_dinas', $value, "");
                                                ?>
                                                <label class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="status_dinas" />
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
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama_balat">Nama Balat <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nama_balat-holder" class=" checkbox-group-required">
                                                <?php 
                                                    $options = $comp_model->nama_balat_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $checked = Html::get_field_checked('nama_balat', $value, "");
                                                ?>
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="custom-control-input" <?php echo $checked; ?> value="<?php echo $value; ?>" type="checkbox" name="nama_balat[]"    />
                                                <span class="custom-control-label"><?php echo $label; ?></span>
                                                </label>
                                                <?php
                                                    }
                                                ?>
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
                                                <input id="ctrl-balat_out"  value="<?php echo get_value('balat_out') ?>" type="number" placeholder="Enter Balat Out" step="any"  required="" name="balat_out"  class="form-control " />
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
                                                <input id="ctrl-balat_in"  value="<?php echo get_value('balat_in') ?>" type="number" placeholder="Enter Balat In" step="any"  required="" name="balat_in"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="mengetahui">Mengetahui <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-mengetahui-holder" class=" ">
                                                <select required=""  id="ctrl-mengetahui" name="mengetahui"  placeholder="Select a value ..."    class="custom-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                    $options = $comp_model->mengetahui_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('mengetahui', $value);
                                                ?>
                                                <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                <?php echo $label; ?>
                                                </option>
                                                <?php
                                                    }
                                                ?>
                                                </select>
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
