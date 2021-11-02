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
                    <h5 class="font-weight-bold record-title">Transaksi Cafe Pelanggan</h5>
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
                        <?php Html::page_bread_crumb("transaksi_cafe_pelanggan/index", $field_name, $field_value); ?>
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
                        <div id="transaksi_cafe_pelanggan-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header ">
                                        <tr>
                                            <th class="td-sno">#</th>
                                            <th  class="td-kd_trk_cafe"> Kd Trk Cafe</th>
                                            <th  class="td-produk_edisi"> Produk Edisi</th>
                                            <th  class="td-kategori"> Kategori</th>
                                            <th  class="td-tr_kd_plg"> Tr Kd Plg</th>
                                            <th  class="td-p_kd_plg"> P Kd Plg</th>
                                            <th  class="td-no_plg_lama"> No Plg Lama</th>
                                            <th  class="td-nama_lembaga"> Nama Lembaga</th>
                                            <th  class="td-nama_lengkap"> Nama Lengkap</th>
                                            <th  class="td-telp1"> Telp1</th>
                                            <th  class="td-telp2"> Telp2</th>
                                            <th  class="td-alamat"> Alamat</th>
                                            <th  class="td-kotakab"> Kotakab</th>
                                            <th  class="td-provinsi"> Provinsi</th>
                                            <th  class="td-kodepos"> Kodepos</th>
                                            <th  class="td-ekspedisi1"> Ekspedisi1</th>
                                            <th  class="td-ekspedisi2"> Ekspedisi2</th>
                                            <th  class="td-status_pelanggan"> Status Pelanggan</th>
                                            <th  class="td-status_bayar"> Status Bayar</th>
                                            <th  class="td-jumlah"> Jumlah</th>
                                            <th  class="td-diskon"> Diskon</th>
                                            <th  class="td-bayartotal"> Bayartotal</th>
                                            <th  class="td-ongkir"> Ongkir</th>
                                            <th  class="td-total_bayar"> Total Bayar</th>
                                            <th  class="td-klot"> Klot</th>
                                            <th  class="td-cabangtrk"> Cabangtrk</th>
                                            <th  class="td-catatan"> Catatan</th>
                                            <th  class="td-harga"> Harga</th>
                                            <th  class="td-subtotal"> Subtotal</th>
                                            <th  class="td-piutangtotal"> Piutangtotal</th>
                                            <th  class="td-timestamp_create"> Timestamp Create</th>
                                            <th  class="td-timestamp_modified"> Timestamp Modified</th>
                                            <th  class="td-dihapus"> Dihapus</th>
                                            <th  class="td-plg_ekspedisi1"> Plg Ekspedisi1</th>
                                            <th  class="td-plg_ekspedisi2"> Plg Ekspedisi2</th>
                                            <th  class="td-catatan_pelanggan"> Catatan Pelanggan</th>
                                            <th  class="td-alokasi"> Alokasi</th>
                                            <th  class="td-cabang"> Cabang</th>
                                            <th  class="td-kloter"> Kloter</th>
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
                                            <td class="td-kd_trk_cafe">
                                                <?php echo  $data['kd_trk_cafe'] ; ?>
                                            </td>
                                            <td class="td-produk_edisi">
                                                <?php echo  $data['produk_edisi'] ; ?>
                                            </td>
                                            <td class="td-kategori">
                                                <?php echo  $data['kategori'] ; ?>
                                            </td>
                                            <td class="td-tr_kd_plg">
                                                <?php echo  $data['tr_kd_plg'] ; ?>
                                            </td>
                                            <td class="td-p_kd_plg">
                                                <?php echo  $data['p_kd_plg'] ; ?>
                                            </td>
                                            <td class="td-no_plg_lama">
                                                <?php echo  $data['no_plg_lama'] ; ?>
                                            </td>
                                            <td class="td-nama_lembaga">
                                                <?php echo  $data['nama_lembaga'] ; ?>
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
                                            <td class="td-ekspedisi1">
                                                <?php echo  $data['ekspedisi1'] ; ?>
                                            </td>
                                            <td class="td-ekspedisi2">
                                                <?php echo  $data['ekspedisi2'] ; ?>
                                            </td>
                                            <td class="td-status_pelanggan">
                                                <?php echo  $data['status_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-status_bayar">
                                                <?php echo  $data['status_bayar'] ; ?>
                                            </td>
                                            <td class="td-jumlah">
                                                <?php echo  $data['jumlah'] ; ?>
                                            </td>
                                            <td class="td-diskon">
                                                <?php echo  $data['diskon'] ; ?>
                                            </td>
                                            <td class="td-bayartotal">
                                                <?php echo  $data['bayartotal'] ; ?>
                                            </td>
                                            <td class="td-ongkir">
                                                <?php echo  $data['ongkir'] ; ?>
                                            </td>
                                            <td class="td-total_bayar">
                                                <?php echo  $data['total_bayar'] ; ?>
                                            </td>
                                            <td class="td-klot">
                                                <?php echo  $data['klot'] ; ?>
                                            </td>
                                            <td class="td-cabangtrk">
                                                <?php echo  $data['cabangtrk'] ; ?>
                                            </td>
                                            <td class="td-catatan">
                                                <?php echo  $data['catatan'] ; ?>
                                            </td>
                                            <td class="td-harga">
                                                <?php echo  $data['harga'] ; ?>
                                            </td>
                                            <td class="td-subtotal">
                                                <?php echo  $data['subtotal'] ; ?>
                                            </td>
                                            <td class="td-piutangtotal">
                                                <?php echo  $data['piutangtotal'] ; ?>
                                            </td>
                                            <td class="td-timestamp_create">
                                                <?php echo  $data['timestamp_create'] ; ?>
                                            </td>
                                            <td class="td-timestamp_modified">
                                                <?php echo  $data['timestamp_modified'] ; ?>
                                            </td>
                                            <td class="td-dihapus">
                                                <?php echo  $data['dihapus'] ; ?>
                                            </td>
                                            <td class="td-plg_ekspedisi1">
                                                <?php echo  $data['plg_ekspedisi1'] ; ?>
                                            </td>
                                            <td class="td-plg_ekspedisi2">
                                                <?php echo  $data['plg_ekspedisi2'] ; ?>
                                            </td>
                                            <td class="td-catatan_pelanggan">
                                                <?php echo  $data['catatan_pelanggan'] ; ?>
                                            </td>
                                            <td class="td-alokasi">
                                                <?php echo  $data['alokasi'] ; ?>
                                            </td>
                                            <td class="td-cabang">
                                                <?php echo  $data['cabang'] ; ?>
                                            </td>
                                            <td class="td-kloter">
                                                <?php echo  $data['kloter'] ; ?>
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
