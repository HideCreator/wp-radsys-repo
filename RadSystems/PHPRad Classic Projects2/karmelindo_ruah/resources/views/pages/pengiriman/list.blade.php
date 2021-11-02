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
                    <h5 class="font-weight-bold record-title">Pengiriman</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("pengiriman/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Pengiriman 
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
                        <?php Html::page_bread_crumb("pengiriman/index", $field_name, $field_value); ?>
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
                        <div id="pengiriman-list-records">
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
                                            $rec_id = ($data['kd_pengiriman'] ? urlencode($data['kd_pengiriman']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_pengiriman'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_pengiriman">
                                                <a href="<?php print_link("pengiriman/view/$data[kd_pengiriman]") ?>"><?php echo $data['kd_pengiriman']; ?></a>
                                            </td>
                                            <td class="td-timestamp">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </td>
                                            <td class="td-kd_transaksi">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['kd_transaksi']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="kd_transaksi" 
                                                data-title="Enter Kd Transaksi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kd_transaksi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-ekspedisi">
                                                <span  data-value="<?php echo $data['ekspedisi']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="ekspedisi" 
                                                data-title="Enter Ekspedisi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['ekspedisi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-biaya">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['biaya']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="biaya" 
                                                data-title="Enter Biaya" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="number" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['biaya'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-no_resi">
                                                <span  data-value="<?php echo $data['no_resi']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="no_resi" 
                                                data-title="Enter No Resi" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['no_resi'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-status">
                                                <span  data-value="<?php echo $data['status']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="status" 
                                                data-title="Enter Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['status'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-tgl_kirim">
                                                <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tgl_kirim']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="tgl_kirim" 
                                                data-title="Enter Tgl Kirim" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['tgl_kirim'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-catatan">
                                                <span  data-value="<?php echo $data['catatan']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="catatan" 
                                                data-title="Enter Catatan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['catatan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-jenis_produk">
                                                <span  data-value="<?php echo $data['jenis_produk']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
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
                                            <td class="td-produk_edisi">
                                                <span  data-value="<?php echo $data['produk_edisi']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
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
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
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
                                            <td class="td-nama_pelanggan">
                                                <span  data-value="<?php echo $data['nama_pelanggan']; ?>" 
                                                data-pk="<?php echo $data['kd_pengiriman'] ?>" 
                                                data-url="<?php print_link("pengiriman/edit/" . urlencode($data['kd_pengiriman'])); ?>" 
                                                data-name="nama_pelanggan" 
                                                data-title="Enter Nama Pelanggan" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['nama_pelanggan'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip page-modal" title="View Record" href="<?php print_link("pengiriman/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip page-modal" title="Edit This Record" href="<?php print_link("pengiriman/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("pengiriman/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("pengiriman/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
                                            <?php Html :: import_form('pengiriman/importdata' , "Import Data", 'CSV , JSON'); ?>
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
