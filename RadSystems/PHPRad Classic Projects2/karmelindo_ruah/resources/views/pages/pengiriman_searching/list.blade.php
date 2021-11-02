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
                    <h5 class="font-weight-bold record-title">Pengiriman Searching</h5>
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
                        <?php Html::page_bread_crumb("pengiriman_searching/index", $field_name, $field_value); ?>
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
                        <div id="pengiriman_searching-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header ">
                                        <tr>
                                            <th class="td-sno">#</th>
                                            <th  class="td-kd_pengiriman"> Kd Pengiriman</th>
                                            <th  class="td-timestamp"> Timestamp</th>
                                            <th  class="td-kd_transaksi"> Kd Transaksi</th>
                                            <th  class="td-ekspedisi"> Ekspedisi</th>
                                            <th  class="td-biaya"> Biaya</th>
                                            <th  class="td-no_resi"> No Resi</th>
                                            <th  class="td-status"> Status</th>
                                            <th  class="td-tgl_kirim"> Tgl Kirim</th>
                                            <th  class="td-catatan"> Catatan</th>
                                            <th  class="td-jenis_produk"> Jenis Produk</th>
                                            <th  class="td-produk_edisi"> Produk Edisi</th>
                                            <th  class="td-jumlah"> Jumlah</th>
                                            <th  class="td-nama_pelanggan"> Nama Pelanggan</th>
                                            <th  class="td-nama_lengkap"> Nama Lengkap</th>
                                            <th  class="td-cabangtrk"> Cabangtrk</th>
                                            <th  class="td-jumlah_total"> Jumlah Total</th>
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
                                            $counter++;
                                        ?>
                                        <tr>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_pengiriman">
                                                <?php echo  $data['kd_pengiriman'] ; ?>
                                            </td>
                                            <td class="td-timestamp">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </td>
                                            <td class="td-kd_transaksi">
                                                <?php echo  $data['kd_transaksi'] ; ?>
                                            </td>
                                            <td class="td-ekspedisi">
                                                <?php echo  $data['ekspedisi'] ; ?>
                                            </td>
                                            <td class="td-biaya">
                                                <?php echo  $data['biaya'] ; ?>
                                            </td>
                                            <td class="td-no_resi">
                                                <?php echo  $data['no_resi'] ; ?>
                                            </td>
                                            <td class="td-status">
                                                <?php echo  $data['status'] ; ?>
                                            </td>
                                            <td class="td-tgl_kirim">
                                                <?php echo  $data['tgl_kirim'] ; ?>
                                            </td>
                                            <td class="td-catatan">
                                                <?php echo  $data['catatan'] ; ?>
                                            </td>
                                            <td class="td-jenis_produk">
                                                <?php echo  $data['jenis_produk'] ; ?>
                                            </td>
                                            <td class="td-produk_edisi">
                                                <?php echo  $data['produk_edisi'] ; ?>
                                            </td>
                                            <td class="td-jumlah">
                                                <?php echo  $data['jumlah'] ; ?>
                                            </td>
                                            <td class="td-nama_pelanggan">
                                                <?php echo  $data['nama_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-nama_lengkap">
                                                <?php echo  $data['nama_lengkap'] ; ?>
                                            </td>
                                            <td class="td-cabangtrk">
                                                <?php echo  $data['cabangtrk'] ; ?>
                                            </td>
                                            <td class="td-jumlah_total">
                                                <?php echo  $data['jumlah_total'] ; ?>
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
