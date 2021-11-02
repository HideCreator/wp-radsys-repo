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
                    <h5 class="font-weight-bold record-title">Add New Pengepakan</h5>
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
                        <form id="pengepakan-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('pengepakan.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="kd_transaksi">Kd Transaksi </label>
                                    <div id="ctrl-kd_transaksi-holder" class=" "> 
                                        <input id="ctrl-kd_transaksi"  value="<?php echo get_value('kd_transaksi') ?>" type="number" placeholder="Enter Kd Transaksi" step="any"  name="kd_transaksi"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="status">Status </label>
                                    <div id="ctrl-status-holder" class=" "> 
                                        <input id="ctrl-status"  value="<?php echo get_value('status', "Selesai") ?>" type="text" placeholder="Enter Status"  name="status"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="catatan">Catatan </label>
                                    <div id="ctrl-catatan-holder" class=" "> 
                                        <input id="ctrl-catatan"  value="<?php echo get_value('catatan') ?>" type="text" placeholder="Enter Catatan"  name="catatan"  class="form-control " />
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
