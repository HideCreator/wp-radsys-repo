
<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

$data = $this->view_data;

//$rec_id = $data['__tableprimarykey'];
$page_id = Router :: $page_id;

$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class=" p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">Payment Confirmation</h3>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
    
    <div  class="">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-7 comp-grid">
                    <div class=""><div>
                        <style>
                            .flexer,
                            .progress-indicator {
                            display: -webkit-box;
                            display: -moz-box;
                            display: -ms-flexbox;
                            display: -webkit-flex;
                            display: flex
                            }
                            
                            .no-flexer,
                            .progress-indicator.stacked {
                            display: block
                            }
                            
                            .no-flexer-element {
                            -ms-flex: 0;
                            -webkit-flex: 0;
                            -moz-flex: 0;
                            flex: 0
                            }
                            
                            .flexer-element,
                            .progress-indicator>li {
                            -ms-flex: 1;
                            -webkit-flex: 1;
                            -moz-flex: 1;
                            flex: 1
                            }
                            
                            .progress-indicator {
                            margin: 0 0 1em;
                            padding: 0;
                            font-size: 80%;
                            text-transform: uppercase
                            }
                            
                            .progress-indicator>li {
                            list-style: none;
                            text-align: center;
                            width: auto;
                            padding: 0;
                            margin: 0;
                            position: relative;
                            text-overflow: ellipsis;
                            color: #bbb;
                            display: block
                            }
                            
                            .progress-indicator>li:hover {
                            color: #6f6f6f
                            }
                            
                            .progress-indicator>li.completed,
                            .progress-indicator>li.completed .bubble {
                            color: #65d074
                            }
                            
                            .progress-indicator>li .bubble {
                            border-radius: 1000px;
                            width: 20px;
                            height: 20px;
                            background-color: #bbb;
                            display: block;
                            margin: 0 auto .5em;
                            border-bottom: 1px solid #888
                            }
                            
                            .progress-indicator>li .bubble:after,
                            .progress-indicator>li .bubble:before {
                            display: block;
                            position: absolute;
                            top: 9px;
                            width: 100%;
                            height: 3px;
                            content: '';
                            background-color: #bbb
                            }
                            
                            .progress-indicator>li.completed .bubble,
                            .progress-indicator>li.completed .bubble:after,
                            .progress-indicator>li.completed .bubble:before {
                            background-color: #65d074;
                            border-color: #247830
                            }
                            
                            .progress-indicator>li .bubble:before {
                            left: 0
                            }
                            
                            .progress-indicator>li .bubble:after {
                            right: 0
                            }
                            
                            .progress-indicator>li:first-child .bubble:after,
                            .progress-indicator>li:first-child .bubble:before {
                            width: 50%;
                            margin-left: 50%
                            }
                            
                            .progress-indicator>li:last-child .bubble:after,
                            .progress-indicator>li:last-child .bubble:before {
                            width: 50%;
                            margin-right: 50%
                            }
                            
                            .progress-indicator>li.active,
                            .progress-indicator>li.active .bubble {
                            color: #337AB7
                            }
                            
                            .progress-indicator>li.active .bubble,
                            .progress-indicator>li.active .bubble:after,
                            .progress-indicator>li.active .bubble:before {
                            background-color: #337AB7;
                            border-color: #122a3f
                            }
                            
                            .progress-indicator>li a:hover .bubble,
                            .progress-indicator>li a:hover .bubble:after,
                            .progress-indicator>li a:hover .bubble:before {
                            background-color: #5671d0;
                            border-color: #1f306e
                            }
                            
                            .progress-indicator>li a:hover .bubble {
                            color: #5671d0
                            }
                            
                            .progress-indicator>li.danger .bubble,
                            .progress-indicator>li.danger .bubble:after,
                            .progress-indicator>li.danger .bubble:before {
                            background-color: #d3140f;
                            border-color: #440605
                            }
                            
                            .progress-indicator>li.danger .bubble {
                            color: #d3140f
                            }
                            
                            .progress-indicator>li.warning .bubble,
                            .progress-indicator>li.warning .bubble:after,
                            .progress-indicator>li.warning .bubble:before {
                            background-color: #edb10a;
                            border-color: #5a4304
                            }
                            
                            .progress-indicator>li.warning .bubble {
                            color: #edb10a
                            }
                            
                            .progress-indicator>li.info .bubble,
                            .progress-indicator>li.info .bubble:after,
                            .progress-indicator>li.info .bubble:before {
                            background-color: #5b32d6;
                            border-color: #25135d
                            }
                            
                            .progress-indicator>li.info .bubble {
                            color: #5b32d6
                            }
                            
                            .progress-indicator.stacked>li {
                            text-indent: -10px;
                            text-align: center;
                            display: block
                            }
                            
                            .progress-indicator.stacked>li .bubble:after,
                            .progress-indicator.stacked>li .bubble:before {
                            left: 50%;
                            margin-left: -1.5px;
                            width: 3px;
                            height: 100%
                            }
                            
                            .progress-indicator.stacked .stacked-text {
                            position: relative;
                            z-index: 10;
                            top: 0;
                            margin-left: 60%!important;
                            width: 45%!important;
                            display: inline-block;
                            text-align: left;
                            line-height: 1.2em
                            }
                            
                            .progress-indicator.stacked>li a {
                            border: none
                            }
                            
                            .progress-indicator.stacked.nocenter>li .bubble {
                            margin-left: 0;
                            margin-right: 0
                            }
                            
                            .progress-indicator.stacked.nocenter>li .bubble:after,
                            .progress-indicator.stacked.nocenter>li .bubble:before {
                            left: 10px
                            }
                            
                            .progress-indicator.stacked.nocenter .stacked-text {
                            width: auto!important;
                            display: block;
                            margin-left: 40px!important
                            }
                            
                            @media handheld,
                            screen and (max-width:400px) {
                            .progress-indicator {
                            font-size: 60%
                            }
                            }
                        </style>
                        
                        
                        <ul class="progress-indicator">
                            <li class="completed">
                                <span class="bubble"></span>
                                <b>Step 1<br>Create Order</b>
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                </li>
                                <li class="completed">
                                    <span class="bubble"></span>
                                    <b>Step 2<br>Add Participant</b>
                                    </li>
                                    <li class="active">
                                        <span class="bubble"></span>
                                    </li>
                                    <li class="warning">
                                        <span class="bubble"></span>
                                        <b>Step 3<br>Payment Confirmation</b>
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                        </li>
                                        <li>
                                            <span class="bubble"></span>
                                            <b>Step 4<br>Verification</b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php $this :: display_page_errors(); ?>
                                
                                <div  class=" animated fadeIn">
                                    <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("transaksi/konfirmasi/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                                        <div>
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="konfirmasi_transfer_upload">Upload proof image </label>
                                                <div id="ctrl-konfirmasi_transfer_upload-holder" class=""> 
                                                    
                                                    <div class="dropzone " id="konfirmasi_transfer_upload_upload" input="#ctrl-konfirmasi_transfer_upload" fieldname="konfirmasi_transfer_upload"    data-multiple="false"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="5" maximum="1">
                                                        <input name="konfirmasi_transfer_upload" id="ctrl-konfirmasi_transfer_upload" class="dropzone-input form-control" value="<?php  echo $data['konfirmasi_transfer_upload']; ?>" type="text"  />
                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    <?php Html :: uploaded_files_list($data['konfirmasi_transfer_upload'], '#ctrl-konfirmasi_transfer_upload', 'true'); ?>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                <div class="row">
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label" for="konfirmasi_transfer_atas_nama">Account Name <span class="text-danger">*</span></label>
                                                        <div id="ctrl-konfirmasi_transfer_atas_nama-holder" class=""> 
                                                            <input id="ctrl-konfirmasi_transfer_atas_nama"  value="<?php  echo $data['konfirmasi_transfer_atas_nama']; ?>" type="text" placeholder="Enter Account Name"  required="" name="konfirmasi_transfer_atas_nama"  class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label" for="konfirmasi_transfer_bank">Origin Bank <span class="text-danger">*</span></label>
                                                            <div id="ctrl-konfirmasi_transfer_bank-holder" class=""> 
                                                                <input id="ctrl-konfirmasi_transfer_bank"  value="<?php  echo $data['konfirmasi_transfer_bank']; ?>" type="text" placeholder="Enter Origin Bank"  required="" name="konfirmasi_transfer_bank"  class="form-control " />
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group ">
                                                            <label class="control-label" for="konfirmasi_transfer_catatan">Add a note </label>
                                                            <div id="ctrl-konfirmasi_transfer_catatan-holder" class=""> 
                                                                
                                                                <textarea placeholder="Enter Add a note" id="ctrl-konfirmasi_transfer_catatan"  rows="" name="konfirmasi_transfer_catatan" class=" form-control"><?php  echo $data['konfirmasi_transfer_catatan']; ?></textarea>
                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group ">
                                                            <label class="control-label" for="konfirmasi_transfer_tanggal">Date bank transfer <span class="text-danger">*</span></label>
                                                            <div id="ctrl-konfirmasi_transfer_tanggal-holder" class="input-group"> 
                                                                <input id="ctrl-konfirmasi_transfer_tanggal" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['konfirmasi_transfer_tanggal']; ?>" type="datetime" name="konfirmasi_transfer_tanggal" placeholder="Enter Date bank transfer" data-enable-time="false" data-min-date="<?php echo date('Y-m-d', strtotime('-90day')); ?>" data-max-date="<?php echo datetime_now(); ?>" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                    
                                                                    
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                            
                                                        </div>
                                                        <div class="form-ajax-status"></div>
                                                        <div class="form-group text-center">
                                                            <button class="btn btn-primary" type="submit">
                                                                Confirmation Now
                                                                <i class="fa fa-send"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </section>
                            