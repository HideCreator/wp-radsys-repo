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
                    <h5 class="font-weight-bold record-title">Transaksi Ruah</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("transaksi_ruah/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Transaksi Ruah 
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
                        <?php Html::page_bread_crumb("transaksi_ruah/index", $field_name, $field_value); ?>
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
                        <div id="transaksi_ruah-list-records">
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
                                            <th  class="td-kd_db_trk_ruah"> Kd Db Trk Ruah</th>
                                            <th  class="td-kd_trk_ruah"> Kd Trk Ruah</th>
                                            <th  class="td-kd_pelanggan"> Kd Pelanggan</th>
                                            <th  class="td-ekspedisi1"> Ekspedisi1</th>
                                            <th  class="td-ekspedisi2"> Ekspedisi2</th>
                                            <th  class="td-catatan"> Catatan</th>
                                            <th  class="td-produk_edisi"> Produk Edisi</th>
                                            <th  class="td-jumlah"> Jumlah</th>
                                            <th  class="td-harga"> Harga</th>
                                            <th  class="td-diskon"> Diskon</th>
                                            <th  class="td-subtotal"> Subtotal</th>
                                            <th  class="td-ongkir"> Ongkir</th>
                                            <th  class="td-status_bayar"> Status Bayar</th>
                                            <th  class="td-total_bayar"> Total Bayar</th>
                                            <th  class="td-piutangtotal"> Piutangtotal</th>
                                            <th  class="td-bayartotal"> Bayartotal</th>
                                            <th  class="td-timestamp_create"> Timestamp Create</th>
                                            <th  class="td-timestamp_modified"> Timestamp Modified</th>
                                            <th  class="td-dihapus"> Dihapus</th>
                                            <th  class="td-kategori"> Kategori</th>
                                            <th  class="td-klot"> Klot</th>
                                            <th  class="td-cabangtrk"> Cabangtrk</th>
                                            <th  class="td-jumlahruah"> Jumlahruah</th>
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
                                            $rec_id = ($data['kd_db_trk_ruah'] ? urlencode($data['kd_db_trk_ruah']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_db_trk_ruah'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_db_trk_ruah">
                                                <a href="<?php print_link("transaksi_ruah/view/$data[kd_db_trk_ruah]") ?>"><?php echo $data['kd_db_trk_ruah']; ?></a>
                                            </td>
                                            <td class="td-kd_trk_ruah">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['kd_trk_ruah']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="kd_trk_ruah" 
                                                data-title="Enter Kd Trk Ruah" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kd_trk_ruah'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kd_pelanggan">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['kd_pelanggan']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="kd_pelanggan" 
                                                data-title="Enter Kd Pelanggan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kd_pelanggan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-ekspedisi1">
                                                <span  data-value="<?php echo $data['ekspedisi1']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
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
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
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
                                            <td class="td-catatan">
                                                <span  data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="catatan" 
                                                data-title="Enter Catatan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['catatan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-produk_edisi">
                                                <span  data-value="<?php echo $data['produk_edisi']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="produk_edisi" 
                                                data-title="Enter Produk Edisi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['produk_edisi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-jumlah">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['jumlah']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="jumlah" 
                                                data-title="Enter Jumlah" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['jumlah'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-harga">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['harga']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="harga" 
                                                data-title="Enter Harga" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['harga'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-diskon">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['diskon']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="diskon" 
                                                data-title="Enter Diskon" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['diskon'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-subtotal">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['subtotal']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="subtotal" 
                                                data-title="Enter Subtotal" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['subtotal'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-ongkir">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['ongkir']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="ongkir" 
                                                data-title="Enter Ongkir" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['ongkir'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-status_bayar">
                                                <span  data-value="<?php echo $data['status_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="status_bayar" 
                                                data-title="Enter Status Bayar" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['status_bayar'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-total_bayar">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['total_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="total_bayar" 
                                                data-title="Enter Total Bayar" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['total_bayar'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-piutangtotal">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['piutangtotal']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="piutangtotal" 
                                                data-title="Enter Piutangtotal" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['piutangtotal'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-bayartotal">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['bayartotal']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="bayartotal" 
                                                data-title="Enter Bayartotal" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['bayartotal'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-timestamp_create">
                                                <?php echo  $data['timestamp_create'] ; ?>
                                            </td>
                                            <td class="td-timestamp_modified">
                                                <?php echo  $data['timestamp_modified'] ; ?>
                                            </td>
                                            <td class="td-dihapus">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['dihapus']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="dihapus" 
                                                data-title="Enter Dihapus" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['dihapus'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-kategori">
                                                <span  data-value="<?php echo $data['kategori']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="kategori" 
                                                data-title="Enter Kategori" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kategori'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-klot">
                                                <span  data-value="<?php echo $data['klot']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="klot" 
                                                data-title="Enter Klot" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['klot'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-cabangtrk">
                                                <span  data-value="<?php echo $data['cabangtrk']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="cabangtrk" 
                                                data-title="Enter Cabangtrk" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['cabangtrk'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-jumlahruah">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['jumlahruah']; ?>" 
                                                data-pk="<?php echo $data['kd_db_trk_ruah'] ?>" 
                                                data-url="<?php print_link("transaksi_ruah/edit/" . urlencode($data['kd_db_trk_ruah'])); ?>" 
                                                data-name="jumlahruah" 
                                                data-title="Enter Jumlahruah" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['jumlahruah'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("transaksi_ruah/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("transaksi_ruah/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("transaksi_ruah/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("transaksi_ruah/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
                                            <?php Html :: import_form('transaksi_ruah/importdata' , "Import Data", 'CSV , JSON'); ?>
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
