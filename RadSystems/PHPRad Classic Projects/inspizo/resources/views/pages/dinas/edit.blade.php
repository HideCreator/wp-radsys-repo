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
                    <h5 class="font-weight-bold record-title">Edit Dinas</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("dinas/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
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
                                                $selected = ( $value == $data['id_pengguna'] ? 'selected' : null );
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
                                            <textarea placeholder="Enter Peserta" id="ctrl-peserta"  required="" rows="5" name="peserta" class=" form-control"><?php  echo $data['peserta']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="waktu">Waktu <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-waktu-holder" class="input-group ">
                                            <input id="ctrl-waktu" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['waktu']; ?>" type="time" name="waktu" placeholder="Enter Waktu" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i:S" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="material-icons">access_time</i></span>
                                            </div>
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
                                                $field_value = $data['status_dinas'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                //check if value is among checked options
                                                $checked = Html::get_record_checked($field_value, $value);
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
                                                $arr_recs = explode(',', $data['nama_balat']);
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $checked = (in_array($value , $arr_recs) ? 'checked' : null);
                                            ?>
                                            <label class="custom-control custom-checkbox custom-control-inline option-btn">
                                            <input class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value; ?>" type="checkbox"  name="nama_balat[]"  />
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
                                            <input id="ctrl-balat_out"  value="<?php  echo $data['balat_out']; ?>" type="number" placeholder="Enter Balat Out" step="any"  required="" name="balat_out"  class="form-control " />
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
                                                $selected = ( $value == $data['mengetahui'] ? 'selected' : null );
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
