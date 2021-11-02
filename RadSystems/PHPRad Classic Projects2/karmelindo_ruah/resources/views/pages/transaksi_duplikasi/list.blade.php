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
                    <h5 class="font-weight-bold record-title">Transaksi Duplikasi</h5>
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
                        <?php Html::page_bread_crumb("transaksi_duplikasi/index", $field_name, $field_value); ?>
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
                        <div id="transaksi_duplikasi-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header ">
                                        <tr>
                                            <th class="td-sno">#</th>
                                            <th  class="td-kd_pelanggan"> Kd Pelanggan</th>
                                            <th  class="td-duplikasi"> Duplikasi</th>
                                            <th  class="td-kd_trk_ruah"> Kd Trk Ruah</th>
                                            <th  class="td-produk_edisi"> Produk Edisi</th>
                                            <th  class="td-jumlah"> Jumlah</th>
                                            <th  class="td-subtotal"> Subtotal</th>
                                            <th  class="td-status_bayar"> Status Bayar</th>
                                            <th  class="td-dihapus"> Dihapus</th>
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
                                            <td class="td-kd_pelanggan">
                                                <?php echo  $data['kd_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-duplikasi">
                                                <?php echo  $data['duplikasi'] ; ?>
                                            </td>
                                            <td class="td-kd_trk_ruah">
                                                <?php echo  $data['kd_trk_ruah'] ; ?>
                                            </td>
                                            <td class="td-produk_edisi">
                                                <?php echo  $data['produk_edisi'] ; ?>
                                            </td>
                                            <td class="td-jumlah">
                                                <?php echo  $data['jumlah'] ; ?>
                                            </td>
                                            <td class="td-subtotal">
                                                <?php echo  $data['subtotal'] ; ?>
                                            </td>
                                            <td class="td-status_bayar">
                                                <?php echo  $data['status_bayar'] ; ?>
                                            </td>
                                            <td class="td-dihapus">
                                                <?php echo  $data['dihapus'] ; ?>
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
