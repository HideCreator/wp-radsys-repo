@inject('comp_model', 'App\Models\ComponentsData')
<?php
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">View Produk Edisi</h5>
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
                <div class="col-md-12 comp-grid">
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card  animated fadeIn page-content">
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['kd_produk'] ? urlencode($data['kd_produk']) : null);
                            $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <!-- Table Body Start -->
                            <div class="page-data">
                                <div class="border-top td-kd_produk p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Produk</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_produk'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_internal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Internal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_internal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kd_isbn_issn p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kd Isbn Issn</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kd_isbn_issn'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-judul p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Judul</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['judul'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-jenis p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Jenis</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['jenis'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-satuan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Satuan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['satuan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-harga_dasar p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Harga Dasar</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['harga_dasar'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-harga_jual p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Harga Jual</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['harga_jual'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-stok_awal p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Stok Awal</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['stok_awal'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-judul_lama p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Judul Lama</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['judul_lama'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kode_tahun p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kode Tahun</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kode_tahun'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top td-kode_bulan p-2">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="text-muted"> Kode Bulan</div>
                                            <div class="font-weight-bold">
                                                <?php echo  $data['kode_bulan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">save</i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = add_query_params(['export' => 'print']); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                    <img src="{{ asset('images/print.png') }}" class="mr-2" /> PRINT
                                    </a>
                                    <?php $export_pdf_link = add_query_params(['export' => 'pdf']); ?>
                                    <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                    <img src="{{ asset('images/pdf.png') }}" class="mr-2" /> PDF
                                    </a>
                                </div>
                            </div>
                            <a class="btn btn-sm btn-info"  href="<?php print_link("produk_edisi/edit/$rec_id"); ?>">
                            <i class="material-icons">edit</i> Edit
                            </a>
                            <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("produk_edisi/delete/$rec_id?redirect=produk_edisi"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                            <i class="material-icons">clear</i> Delete
                            </a>
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="material-icons">block</i> No Record Found
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
