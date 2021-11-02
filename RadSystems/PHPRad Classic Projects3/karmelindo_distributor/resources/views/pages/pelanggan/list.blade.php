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
                    <h5 class="font-weight-bold record-title">Pelanggan</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("pelanggan/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Pelanggan 
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
                        <?php Html::page_bread_crumb("pelanggan/index", $field_name, $field_value); ?>
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
                        <div id="pelanggan-list-records">
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
                                            <th  class="td-kd_pelanggan"> Kd Pelanggan</th>
                                            <th  class="td-nama_lengkap"> Nama Lengkap</th>
                                            <th  class="td-telp1"> Telp1</th>
                                            <th  class="td-telp2"> Telp2</th>
                                            <th  class="td-alamat"> Alamat</th>
                                            <th  class="td-kotakab"> Kotakab</th>
                                            <th  class="td-provinsi"> Provinsi</th>
                                            <th  class="td-kodepos"> Kodepos</th>
                                            <th  class="td-nama_lembaga"> Nama Lembaga</th>
                                            <th  class="td-ekspedisi1"> Ekspedisi1</th>
                                            <th  class="td-ekspedisi2"> Ekspedisi2</th>
                                            <th  class="td-catatan_pelanggan"> Catatan Pelanggan</th>
                                            <th  class="td-status_pelanggan"> Status Pelanggan</th>
                                            <th  class="td-kebiasaan_jenis_bayar"> Kebiasaan Jenis Bayar</th>
                                            <th  class="td-alokasi"> Alokasi</th>
                                            <th  class="td-prediksi_ongkir"> Prediksi Ongkir</th>
                                            <th  class="td-timestamp"> Timestamp</th>
                                            <th  class="td-cabang"> Cabang</th>
                                            <th  class="td-jenis_produk"> Jenis Produk</th>
                                            <th  class="td-tagihan"> Tagihan</th>
                                            <th  class="td-simpanan"> Simpanan</th>
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
                                            $rec_id = ($data['kd_pelanggan'] ? urlencode($data['kd_pelanggan']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_pelanggan'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_pelanggan">
                                                <a href="<?php print_link("pelanggan/view/$data[kd_pelanggan]") ?>"><?php echo $data['kd_pelanggan']; ?></a>
                                            </td>
                                            <td class="td-nama_lengkap">
                                                <?php echo  $data['nama_lengkap'] ; ?>
                                            </td>
                                            <td class="td-telp1">
                                                <?php echo  $data['telp1'] ; ?>
                                            </td>
                                            <td class="td-telp2">
                                                <?php echo  $data['telp2'] ; ?>
                                            </td>
                                            <td class="td-alamat">
                                                <?php echo  $data['alamat'] ; ?>
                                            </td>
                                            <td class="td-kotakab">
                                                <?php echo  $data['kotakab'] ; ?>
                                            </td>
                                            <td class="td-provinsi">
                                                <?php echo  $data['provinsi'] ; ?>
                                            </td>
                                            <td class="td-kodepos">
                                                <?php echo  $data['kodepos'] ; ?>
                                            </td>
                                            <td class="td-nama_lembaga">
                                                <?php echo  $data['nama_lembaga'] ; ?>
                                            </td>
                                            <td class="td-ekspedisi1">
                                                <?php echo  $data['ekspedisi1'] ; ?>
                                            </td>
                                            <td class="td-ekspedisi2">
                                                <?php echo  $data['ekspedisi2'] ; ?>
                                            </td>
                                            <td class="td-catatan_pelanggan">
                                                <?php echo  $data['catatan_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-status_pelanggan">
                                                <?php echo  $data['status_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-kebiasaan_jenis_bayar">
                                                <?php echo  $data['kebiasaan_jenis_bayar'] ; ?>
                                            </td>
                                            <td class="td-alokasi">
                                                <?php echo  $data['alokasi'] ; ?>
                                            </td>
                                            <td class="td-prediksi_ongkir">
                                                <?php echo  $data['prediksi_ongkir'] ; ?>
                                            </td>
                                            <td class="td-timestamp">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </td>
                                            <td class="td-cabang">
                                                <?php echo  $data['cabang'] ; ?>
                                            </td>
                                            <td class="td-jenis_produk">
                                                <?php echo  $data['jenis_produk'] ; ?>
                                            </td>
                                            <td class="td-tagihan">
                                                <?php echo  $data['tagihan'] ; ?>
                                            </td>
                                            <td class="td-simpanan">
                                                <?php echo  $data['simpanan'] ; ?>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("pelanggan/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("pelanggan/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("pelanggan/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("pelanggan/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
