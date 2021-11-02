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
                    <h5 class="font-weight-bold record-title">Transaksi Umum Detail</h5>
                </div>
                <div class="col-md-auto ">
                    <a  class="btn btn btn-primary btn-block" href="<?php print_link("transaksi_umum_detail/add") ?>">
                    <i class="material-icons">add</i>                               
                    Add New Transaksi Umum Detail 
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
                        <?php Html::page_bread_crumb("transaksi_umum_detail/index", $field_name, $field_value); ?>
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
                        <div id="transaksi_umum_detail-list-records">
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
                                            <th  class="td-kd_transaksi_umum_detail"> Kd Transaksi Umum Detail</th>
                                            <th  class="td-kode_unik"> Kode Unik</th>
                                            <th  class="td-nama"> Nama</th>
                                            <th  class="td-harga"> Harga</th>
                                            <th  class="td-diskon"> Diskon</th>
                                            <th  class="td-jumlah"> Jumlah</th>
                                            <th  class="td-timestamp"> Timestamp</th>
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
                                            $rec_id = ($data['kd_transaksi_umum_detail'] ? urlencode($data['kd_transaksi_umum_detail']) : null);
                                            $counter++;
                                        ?>
                                        <tr>
                                            <td class=" td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['kd_transaksi_umum_detail'] ?>" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                            </td>
                                            <th class="td-sno"><?php echo $counter; ?></th>
                                            <td class="td-kd_transaksi_umum_detail">
                                                <a href="<?php print_link("transaksi_umum_detail/view/$data[kd_transaksi_umum_detail]") ?>"><?php echo $data['kd_transaksi_umum_detail']; ?></a>
                                            </td>
                                            <td class="td-kode_unik">
                                                <span  data-value="<?php echo $data['kode_unik']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum_detail'] ?>" 
                                                data-url="<?php print_link("transaksi_umum_detail/edit/" . urlencode($data['kd_transaksi_umum_detail'])); ?>" 
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
                                            <td class="td-nama">
                                                <span  data-value="<?php echo $data['nama']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum_detail'] ?>" 
                                                data-url="<?php print_link("transaksi_umum_detail/edit/" . urlencode($data['kd_transaksi_umum_detail'])); ?>" 
                                                data-name="nama" 
                                                data-title="Enter Nama" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo  $data['nama'] ; ?>
                                                </span>
                                            </td>
                                            <td class="td-harga">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['harga']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum_detail'] ?>" 
                                                data-url="<?php print_link("transaksi_umum_detail/edit/" . urlencode($data['kd_transaksi_umum_detail'])); ?>" 
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
                                                data-pk="<?php echo $data['kd_transaksi_umum_detail'] ?>" 
                                                data-url="<?php print_link("transaksi_umum_detail/edit/" . urlencode($data['kd_transaksi_umum_detail'])); ?>" 
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
                                            <td class="td-jumlah">
                                                <span  data-step="any" 
                                                data-value="<?php echo $data['jumlah']; ?>" 
                                                data-pk="<?php echo $data['kd_transaksi_umum_detail'] ?>" 
                                                data-url="<?php print_link("transaksi_umum_detail/edit/" . urlencode($data['kd_transaksi_umum_detail'])); ?>" 
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
                                            <td class="td-timestamp">
                                                <?php echo  $data['timestamp'] ; ?>
                                            </td>
                                            <td class="td-btn">
                                                <a class="btn btn-sm btn-success has-tooltip" title="View Record" href="<?php print_link("transaksi_umum_detail/view/$rec_id"); ?>">
                                                <i class="material-icons">visibility</i> 
                                                </a>
                                                <a class="btn btn-sm btn-info has-tooltip" title="Edit This Record" href="<?php print_link("transaksi_umum_detail/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> 
                                                </a>
                                                <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" title="Delete this record" href="<?php print_link("transaksi_umum_detail/delete/$rec_id"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
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
                                            <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("transaksi_umum_detail/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
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
                                            <?php Html :: import_form('transaksi_umum_detail/importdata' , "Import Data", 'CSV , JSON'); ?>
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
