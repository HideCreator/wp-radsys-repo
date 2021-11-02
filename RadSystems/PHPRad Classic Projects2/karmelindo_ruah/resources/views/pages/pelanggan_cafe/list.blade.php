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
                    <h5 class="font-weight-bold record-title">Pelanggan Cafe</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("pelanggan_cafe/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Pelanggan Cafe 
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
                        <?php Html::page_bread_crumb("pelanggan_cafe/index", $field_name, $field_value); ?>
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
                        <div id="pelanggan_cafe-list-records">
                            <div id="page-report-body" class="table-responsive">
                                <table class="table  table-striped table-sm text-left">
                                    <thead class="table-header bg-light">
                                        <tr>
                                            <th class="td-checkbox">
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="toggle-check-all custom-control-input" type="checkbox" />
                                            <span class="custom-control-label"></span>
                                            </label>
                                            </th>
                                            <th class="td-sno">#</th>
                                            <th  class="td-kd_pelanggan_cafe"> Kd Pelanggan Cafe</th>
                                            <th  class="td-no_plg_lama"> No Plg Lama</th>
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
                                            <th  class="td-kloter"> Kloter</th>
                                            <th  class="td-tagihan"> Tagihan</th>
                                            <th  class="td-saldo"> Saldo</th>
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
                                            $rec_id = ($data['kd_pelanggan_cafe'] ? urlencode($data['kd_pelanggan_cafe']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_pelanggan_cafe'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_pelanggan_cafe">
                                                <a href="<?php print_link("pelanggan_cafe/view/$data[kd_pelanggan_cafe]") ?>"><?php echo $data['kd_pelanggan_cafe']; ?></a>
                                            </td>
                                            <td class="td-no_plg_lama">
                                                <span  data-value="<?php echo $data['no_plg_lama']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="no_plg_lama" 
                                                data-title="Enter No Plg Lama" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['no_plg_lama'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-nama_lengkap">
                                                <span  data-value="<?php echo $data['nama_lengkap']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="nama_lengkap" 
                                                data-title="Enter Nama Lengkap" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['nama_lengkap'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-telp1">
                                                <span  data-value="<?php echo $data['telp1']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="telp1" 
                                                data-title="Enter Telp1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['telp1'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-telp2">
                                                <span  data-value="<?php echo $data['telp2']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="telp2" 
                                                data-title="Enter Telp2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['telp2'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-alamat">
                                                <span  data-value="<?php echo $data['alamat']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="alamat" 
                                                data-title="Enter Alamat" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['alamat'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kotakab">
                                                <span  data-value="<?php echo $data['kotakab']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="kotakab" 
                                                data-title="Enter Kotakab" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kotakab'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-provinsi">
                                                <span  data-value="<?php echo $data['provinsi']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="provinsi" 
                                                data-title="Enter Provinsi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['provinsi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kodepos">
                                                <span  data-value="<?php echo $data['kodepos']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="kodepos" 
                                                data-title="Enter Kodepos" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kodepos'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-nama_lembaga">
                                                <span  data-value="<?php echo $data['nama_lembaga']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="nama_lembaga" 
                                                data-title="Enter Nama Lembaga" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['nama_lembaga'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-ekspedisi1">
                                                <span  data-value="<?php echo $data['ekspedisi1']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="ekspedisi1" 
                                                data-title="Enter Ekspedisi1" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['ekspedisi1'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-ekspedisi2">
                                                <span  data-value="<?php echo $data['ekspedisi2']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="ekspedisi2" 
                                                data-title="Enter Ekspedisi2" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['ekspedisi2'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-catatan_pelanggan">
                                                <span  data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="catatan_pelanggan" 
                                                data-title="Enter Catatan Pelanggan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['catatan_pelanggan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-status_pelanggan">
                                                <span  data-value="<?php echo $data['status_pelanggan']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="status_pelanggan" 
                                                data-title="Enter Status Pelanggan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['status_pelanggan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kebiasaan_jenis_bayar">
                                                <span  data-value="<?php echo $data['kebiasaan_jenis_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="kebiasaan_jenis_bayar" 
                                                data-title="Enter Kebiasaan Jenis Bayar" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kebiasaan_jenis_bayar'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-alokasi">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['alokasi']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="alokasi" 
                                                data-title="Enter Alokasi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['alokasi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-prediksi_ongkir">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['prediksi_ongkir']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="prediksi_ongkir" 
                                                data-title="Enter Prediksi Ongkir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['prediksi_ongkir'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-timestamp">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </td>
                                            <td class="td-cabang">
                                                <span  data-value="<?php echo $data['cabang']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="cabang" 
                                                data-title="Enter Cabang" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['cabang'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-jenis_produk">
                                                <span  data-value="<?php echo $data['jenis_produk']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="jenis_produk" 
                                                data-title="Enter Jenis Produk" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['jenis_produk'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kloter">
                                                <span  data-value="<?php echo $data['kloter']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="kloter" 
                                                data-title="Enter Kloter" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kloter'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-tagihan">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['tagihan']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="tagihan" 
                                                data-title="Enter Tagihan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['tagihan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-saldo">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['saldo']; ?>" 
                                                data-pk="<?php echo $data['kd_pelanggan_cafe'] ?>" 
                                                data-url="<?php print_link("pelanggan_cafe/edit/" . urlencode($data['kd_pelanggan_cafe'])); ?>" 
                                                data-name="saldo" 
                                                data-title="Enter Saldo" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['saldo'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("pelanggan_cafe/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("pelanggan_cafe/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("pelanggan_cafe/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("pelanggan_cafe/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                            <i class="material-icons">clear</i> Delete Selected
                                            </button>
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
                                                    <?php $export_csv_link = add_query_params(['export' => 'csv']); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="{{ asset('/images/csv.png') }}" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = add_query_params(['export' => 'excel']); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                    <img src="{{ asset('images/xsl.png') }}" class="mr-2" /> EXCEL
                                                    </a>
                                                </div>
                                            </div>
                                            <?php Html :: import_form('pelanggan_cafe/importdata' , "Import Data", 'CSV , JSON'); ?>
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
