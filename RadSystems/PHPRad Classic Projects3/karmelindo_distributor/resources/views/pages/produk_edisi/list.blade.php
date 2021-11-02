@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
?>
@extends($layout)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col ">
                    <h5 class="font-weight-bold record-title">Produk Edisi</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("produk_edisi/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Produk Edisi 
                    </a>
                </div>
                <div class="col-md-3 ">
                    <form  class="search" action="{{ url()->current() }}" method="get">
                        <input type="hidden" name="page" value="1" />
                        <div class="input-group">
                            <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="Search" />
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <div class="">
                        <?php Html::page_bread_crumb("produk_edisi/index", $field_name, $field_value); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card  animated fadeIn page-content">
                        <div id="produk_edisi-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header ">
                                        <tr>
                                            <th class="td-checkbox">
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="toggle-check-all custom-control-input" type="checkbox" />
                                            <span class="custom-control-label"></span>
                                            </label>
                                            </th>
                                            <th class="td-sno">#</th>
                                            <th  class="td-kd_produk"> Kd Produk</th>
                                            <th  class="td-kd_internal"> Kd Internal</th>
                                            <th  class="td-kd_isbn_issn"> Kd Isbn Issn</th>
                                            <th  class="td-judul"> Judul</th>
                                            <th  class="td-jenis"> Jenis</th>
                                            <th  class="td-satuan"> Satuan</th>
                                            <th  class="td-harga_dasar"> Harga Dasar</th>
                                            <th  class="td-harga_jual"> Harga Jual</th>
                                            <th  class="td-stok_awal"> Stok Awal</th>
                                            <th  class="td-judul_lama"> Judul Lama</th>
                                            <th  class="td-kode_tahun"> Kode Tahun</th>
                                            <th  class="td-kode_bulan"> Kode Bulan</th>
                                            <th class="td-btn"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($total_records){
                                    ?>
                                    <tbody class="page-data">
                                        <!--record-->
                                        <?php
                                            $counter = 0;
                                            foreach($records as $data){
                                            $rec_id = ($data['kd_produk'] ? urlencode($data['kd_produk']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_produk'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_produk">
                                                <a href="<?php print_link("produk_edisi/view/$data[kd_produk]") ?>"><?php echo $data['kd_produk']; ?></a>
                                            </td>
                                            <td class="td-kd_internal">
                                                <?php echo  $data['kd_internal'] ; ?>
                                            </td>
                                            <td class="td-kd_isbn_issn">
                                                <?php echo  $data['kd_isbn_issn'] ; ?>
                                            </td>
                                            <td class="td-judul">
                                                <?php echo  $data['judul'] ; ?>
                                            </td>
                                            <td class="td-jenis">
                                                <?php echo  $data['jenis'] ; ?>
                                            </td>
                                            <td class="td-satuan">
                                                <?php echo  $data['satuan'] ; ?>
                                            </td>
                                            <td class="td-harga_dasar">
                                                <?php echo  $data['harga_dasar'] ; ?>
                                            </td>
                                            <td class="td-harga_jual">
                                                <?php echo  $data['harga_jual'] ; ?>
                                            </td>
                                            <td class="td-stok_awal">
                                                <?php echo  $data['stok_awal'] ; ?>
                                            </td>
                                            <td class="td-judul_lama">
                                                <?php echo  $data['judul_lama'] ; ?>
                                            </td>
                                            <td class="td-kode_tahun">
                                                <?php echo  $data['kode_tahun'] ; ?>
                                            </td>
                                            <td class="td-kode_bulan">
                                                <?php echo  $data['kode_bulan'] ; ?>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("produk_edisi/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("produk_edisi/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("produk_edisi/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                <i class="material-icons">clear</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                        <!--endrecord-->
                                    </tbody>
                                    <tbody class="search-data"></tbody>
                                    <?php
                                        }
                                        else{
                                    ?>
                                    <tbody class="page-data">
                                        <tr>
                                            <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                                                <i class="material-icons">block</i> No record found
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <?php
                                if($show_footer){
                            ?>
                            <div class="">
                                <div class="row justify-content-center">    
                                    <div class="col-md-auto justify-content-center">    
                                        <div class="p-3 d-flex justify-content-between">    
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("produk_edisi/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                            <i class="material-icons">clear</i> Delete Selected
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col">   
                                        <?php
                                            if($show_pagination == true){
                                            $pager = new Pagination($total_records, $record_count);
                                            $pager->show_page_count = true;
                                            $pager->show_record_count = true;
                                            $pager->show_page_limit =true;
                                            $pager->limit = $limit;
                                            $pager->show_page_number_list = true;
                                            $pager->pager_link_range=5;
                                            $pager->render();
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
