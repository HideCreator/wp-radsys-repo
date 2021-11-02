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
                    <h5 class="font-weight-bold record-title">Transaksi Umum</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("transaksi_umum/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Transaksi Umum 
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
                        <?php Html::page_bread_crumb("transaksi_umum/index", $field_name, $field_value); ?>
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
                        <div id="transaksi_umum-list-records">
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
                                            <th  class="td-kd_transaksi_umum"> Kd Transaksi Umum</th>
                                            <th  class="td-kode_unik"> Kode Unik</th>
                                            <th  class="td-tanggalwaktu"> Tanggalwaktu</th>
                                            <th  class="td-atas_nama"> Atas Nama</th>
                                            <th  class="td-alamat"> Alamat</th>
                                            <th  class="td-kotakab"> Kotakab</th>
                                            <th  class="td-provinsi"> Provinsi</th>
                                            <th  class="td-total_bayar"> Total Bayar</th>
                                            <th  class="td-status_bayar"> Status Bayar</th>
                                            <th  class="td-tgl_bayar"> Tgl Bayar</th>
                                            <th  class="td-catatan"> Catatan</th>
                                            <th  class="td-dihapus"> Dihapus</th>
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
                                            $rec_id = ($data['kd_transaksi_umum'] ? urlencode($data['kd_transaksi_umum']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_transaksi_umum'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_transaksi_umum">
                                                <a href="<?php print_link("transaksi_umum/view/$data[kd_transaksi_umum]") ?>"><?php echo $data['kd_transaksi_umum']; ?></a>
                                            </td>
                                            <td class="td-kode_unik">
                                                <span  data-value="<?php echo $data['kode_unik']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
                                                data-name="kode_unik" 
                                                data-title="Enter Kode Unik" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['kode_unik'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-tanggalwaktu">
                                                <?php echo  $data['tanggalwaktu'] ; ?>
                                            </td>
                                            <td class="td-atas_nama">
                                                <span  data-value="<?php echo $data['atas_nama']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
                                                data-name="atas_nama" 
                                                data-title="Enter Atas Nama" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['atas_nama'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-alamat">
                                                <span  data-value="<?php echo $data['alamat']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
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
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
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
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
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
                                            <td class="td-total_bayar">
                                                <span  data-value="<?php echo $data['total_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
                                                data-name="total_bayar" 
                                                data-title="Enter Total Bayar" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['total_bayar'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-status_bayar">
                                                <span  data-value="<?php echo $data['status_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
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
                                            <td class="td-tgl_bayar">
                                                <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tgl_bayar']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
                                                data-name="tgl_bayar" 
                                                data-title="Enter Tgl Bayar" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['tgl_bayar'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-catatan">
                                                <span  data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
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
                                            <td class="td-dihapus">
                                                <span  data-value="<?php echo $data['dihapus']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum'] ?>" 
                                                data-url="<?php print_link("transaksi_umum/edit/" . urlencode($data['kd_transaksi_umum'])); ?>" 
                                                data-name="dihapus" 
                                                data-title="Enter Dihapus" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['dihapus'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("transaksi_umum/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("transaksi_umum/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("transaksi_umum/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("transaksi_umum/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
                                            <?php Html :: import_form('transaksi_umum/importdata' , "Import Data", 'CSV , JSON'); ?>
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
