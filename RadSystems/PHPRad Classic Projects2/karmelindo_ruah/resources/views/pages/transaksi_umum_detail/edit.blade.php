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
                    <h5 class="font-weight-bold record-title">Edit Transaksi Umum Detail</h5>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-vertical needs-validation" action="<?php print_link("transaksi_umum_detail/edit/$rec_id"); ?>" method="post">
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
                                <label class="control-label" for="nama">Nama </label>
                                <div id="ctrl-nama-holder" class=" "> 
                                    <input id="ctrl-nama"  value="<?php  echo $data['nama']; ?>" type="text" placeholder="Enter Nama"  name="nama"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="harga">Harga </label>
                                <div id="ctrl-harga-holder" class=" "> 
                                    <input id="ctrl-harga"  value="<?php  echo $data['harga']; ?>" type="number" placeholder="Enter Harga" step="any"  name="harga"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="diskon">Diskon </label>
                                <div id="ctrl-diskon-holder" class=" "> 
                                    <input id="ctrl-diskon"  value="<?php  echo $data['diskon']; ?>" type="number" placeholder="Enter Diskon" step="any"  name="diskon"  class="form-control " />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="jumlah">Jumlah </label>
                                <div id="ctrl-jumlah-holder" class=" "> 
                                    <input id="ctrl-jumlah"  value="<?php  echo $data['jumlah']; ?>" type="number" placeholder="Enter Jumlah" step="any"  name="jumlah"  class="form-control " />
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
