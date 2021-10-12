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
                    <h5 class="font-weight-bold record-title">Add New Model Has Roles</h5>
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
                        <form id="model_has_roles-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('model_has_roles.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="role_id">Kode Peran <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-role_id-holder" class=" ">
                                                <input id="ctrl-role_id"  value="<?php echo get_value('role_id') ?>" type="number" placeholder="Enter Kode Peran" step="any"  required="" name="role_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="model_type">Model Tipe <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-model_type-holder" class=" ">
                                                <input id="ctrl-model_type"  value="<?php echo get_value('model_type') ?>" type="text" placeholder="Enter Model Tipe"  required="" name="model_type"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="model_id">Kode Model Pengguna <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-model_id-holder" class=" ">
                                                <input id="ctrl-model_id"  value="<?php echo get_value('model_id') ?>" type="number" placeholder="Enter Kode Model Pengguna" step="any"  required="" name="model_id"  class="form-control " />
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
