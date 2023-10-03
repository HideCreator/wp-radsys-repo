
<?php
$comp_model = new SharedController;
$current_page = get_current_url();
$csrf_token = Csrf :: $token;

$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;

?>

<section class="page">
    
    <?php
    if( $show_header == true ){
    ?>
    
    <div  class="p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">Add More Participant</h3>
                    
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
                
                <div class="col-md-12 comp-grid">
                    <div class=""><style>
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
                            <li class="active">
                                <span class="bubble"></span>
                                <b>Step 2<br>Add Participant</b>
                                </li>
                                <li >
                                    <span class="bubble"></span>
                                </li>
                                <li>
                                    <span class="bubble"></span>
                                    <b>Step 3<br>Payment Confirmation</b>
                                    </li>
                                    <!--<li>
                                        <span class="bubble"></span>
                                    </li>
                                    <li>
                                        <span class="bubble"></span>
                                        <b>Step 4<br>Verification</b>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div  class="">
                    <div class="container">
                        
                        <div class="row ">
                            
                            <div class="col-md-12 comp-grid">
                                
                                <?php $this :: display_page_errors(); ?>
                                
                                <div  class=" animated fadeIn">
                                    <form id="peserta-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("peserta/add?csrf_token=$csrf_token") ?>" method="post">
                                        <div>
                                            
                                            <div class="row">
                                                
                                                <div class="form-group col-md-4">
                                                    <label class="control-label" for="paket_acara">Event Name <span class="text-danger">*</span></label>
                                                    <div id="ctrl-paket_acara-holder" class=""> 
                                                        <input id="ctrl-paket_acara"  value="<?php  echo $this->set_field_value('paket_acara',''); ?>" type="text" placeholder="Enter Event Name" list="paket_acara_list"  readonly required="" name="paket_acara"  class="form-control " />
                                                            
                                                            <datalist id="paket_acara_list">
                                                                
                                                                <?php 
                                                                $paket_acara_options = $comp_model -> peserta_paket_acara_option_list();
                                                                if(!empty($paket_acara_options)){
                                                                foreach($paket_acara_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                ?>
                                                                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </datalist>
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label" for="kd_transaksi">Order Number <span class="text-danger">*</span></label>
                                                        <div id="ctrl-kd_transaksi-holder" class=""> 
                                                            <input id="ctrl-kd_transaksi"  value="<?php  echo $this->set_field_value('kd_transaksi',''); ?>" type="number" placeholder="Enter Order Number" step="1"  readonly required="" name="kd_transaksi"  class="form-control " />
                                                                
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="form-group col-md-4">
                                                            <label class="control-label" for="kode_booking">Unique Code <span class="text-danger">*</span></label>
                                                            <div id="ctrl-kode_booking-holder" class=""> 
                                                                <input id="ctrl-kode_booking"  value="<?php  echo $this->set_field_value('kode_booking',''); ?>" type="text" placeholder="Enter Unique Code" list="kode_booking_list"  readonly required="" name="kode_booking"  class="form-control " />
                                                                    
                                                                    <datalist id="kode_booking_list">
                                                                        
                                                                        <?php 
                                                                        $kode_booking_options = $comp_model -> peserta_kode_booking_option_list();
                                                                        if(!empty($kode_booking_options)){
                                                                        foreach($kode_booking_options as $option){
                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                        ?>
                                                                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                                        <?php
                                                                        }
                                                                        }
                                                                        ?>
                                                                    </datalist>
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            
                                                            
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label" for="nama_panggilan">Nick Name <span class="text-danger">*</span></label>
                                                                <div id="ctrl-nama_panggilan-holder" class=""> 
                                                                    <input id="ctrl-nama_panggilan"  value="<?php  echo $this->set_field_value('nama_panggilan',''); ?>" type="text" placeholder="Enter Nick Name"  required="" name="nama_panggilan"  class="form-control " />
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label class="control-label" for="nama_lengkap">Full Name <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-nama_lengkap-holder" class=""> 
                                                                        <input id="ctrl-nama_lengkap"  value="<?php  echo $this->set_field_value('nama_lengkap',''); ?>" type="text" placeholder="Enter Full Name"  required="" name="nama_lengkap"  data-url="api/json/peserta_nama_lengkap_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                                                            
                                                                            <div class="check-status"></div> 
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                <div class="form-group ">
                                                                    <label class="control-label" for="jenis_kelamin">Gender <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-jenis_kelamin-holder" class=""> 
                                                                        
                                                                        <?php
                                                                        $jenis_kelamin_options = Menu :: $jenis_kelamin;
                                                                        if(!empty($jenis_kelamin_options)){
                                                                        foreach($jenis_kelamin_options as $option){
                                                                        $value = $option['value'];
                                                                        $label = $option['label'];
                                                                        //check if current option is checked option
                                                                        $checked = $this->set_field_checked('jenis_kelamin', $value, '');
                                                                        ?>
                                                                        
                                                                        <label class="custom-control custom-radio custom-control-inline">
                                                                            <input id="ctrl-jenis_kelamin" class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="jenis_kelamin" />
                                                                                <span class="custom-control-label"><?php echo $label ?></span>
                                                                            </label>
                                                                            
                                                                            <?php
                                                                            }
                                                                            }
                                                                            ?>
                                                                            
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="row">
                                                                        
                                                                        <div class="form-group col-md-6">
                                                                            <label class="control-label" for="email">Email </label>
                                                                            <div id="ctrl-email-holder" class=""> 
                                                                                <input id="ctrl-email"  value="<?php  echo $this->set_field_value('email',''); ?>" type="email" placeholder="Enter Email"  name="email"  class="form-control " />
                                                                                    
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            <div class="form-group col-md-6">
                                                                                <label class="control-label" for="telp">Telephone <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-telp-holder" class=""> 
                                                                                    <input id="ctrl-telp"  value="<?php  echo $this->set_field_value('telp',''); ?>" type="text" placeholder="Enter Telephone"  required="" name="telp"  class="form-control " />
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="control-label" for="asal_sel_komunitas">Cell Group/Community for non KTM <span class="text-danger">*</span></label>
                                                                                    <div id="ctrl-asal_sel_komunitas-holder" class=""> 
                                                                                        
                                                                                        <?php
                                                                                        $asal_sel_komunitas_options = Menu :: $asal_sel_komunitas;
                                                                                        if(!empty($asal_sel_komunitas_options)){
                                                                                        foreach($asal_sel_komunitas_options as $option){
                                                                                        $value = $option['value'];
                                                                                        $label = $option['label'];
                                                                                        //check if current option is checked option
                                                                                        $checked = $this->set_field_checked('asal_sel_komunitas', $value, '');
                                                                                        ?>
                                                                                        
                                                                                        <label class="custom-control custom-radio custom-control-inline">
                                                                                            <input id="ctrl-asal_sel_komunitas" class="custom-control-input" <?php echo $checked ?>  value="<?php echo $value ?>" type="radio" required=""   name="asal_sel_komunitas" />
                                                                                                <span class="custom-control-label"><?php echo $label ?></span>
                                                                                            </label>
                                                                                            
                                                                                            <?php
                                                                                            }
                                                                                            }
                                                                                            ?>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                    
                                                                                    <div class="form-group col-md-6">
                                                                                        <label class="control-label" for="asal_kota_kab">City <span class="text-danger">*</span></label>
                                                                                        <div id="ctrl-asal_kota_kab-holder" class=""> 
                                                                                            <input id="ctrl-asal_kota_kab"  value="<?php  echo $this->set_field_value('asal_kota_kab',''); ?>" type="text" placeholder="Enter City"  required="" name="asal_kota_kab"  class="form-control " />
                                                                                                
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        <div class="form-group col-md-6">
                                                                                            <label class="control-label" for="asal_negara">Country <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-asal_negara-holder" class=""> 
                                                                                                
                                                                                                <select required=""  id="ctrl-asal_negara" name="asal_negara"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                    <option value="">Select a value ...</option>
                                                                                                    
                                                                                                    <?php
                                                                                                    $asal_negara_options = Menu :: $asal_negara;
                                                                                                    if(!empty($asal_negara_options)){
                                                                                                    foreach($asal_negara_options as $option){
                                                                                                    $value = $option['value'];
                                                                                                    $label = $option['label'];
                                                                                                    $selected = $this->set_field_selected('asal_negara', $value, 'Indonesia');
                                                                                                    ?>
                                                                                                    
                                                                                                    <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                        <?php echo $label ?>
                                                                                                    </option>                                   
                                                                                                    
                                                                                                    <?php
                                                                                                    }
                                                                                                    }
                                                                                                    ?>
                                                                                                    
                                                                                                </select>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        <div class="form-group col-md-6">
                                                                                            <label class="control-label" for="tgl_lahir">Date of Birth <span class="text-danger">*</span></label>
                                                                                            <div id="ctrl-tgl_lahir-holder" class="input-group"> 
                                                                                                <input id="ctrl-tgl_lahir" class="form-control datepicker  datepicker"  required="" value="<?php  echo $this->set_field_value('tgl_lahir',date('Y-m-d', strtotime('-9000day'))); ?>" type="datetime" name="tgl_lahir" placeholder="Enter Date of Birth" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="Y-m-d" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                    
                                                                                                    
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                    </div>
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group col-md-6">
                                                                                                <label class="control-label" for="transport_pergi">Departure <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-transport_pergi-holder" class=""> 
                                                                                                    
                                                                                                    <select required=""  id="ctrl-transport_pergi" name="transport_pergi"  placeholder="Choose Departure Transport (Discount only for Two Way)"    class="custom-select" >
                                                                                                        <option value="">Choose Departure Transport (Discount only for Two Way)</option>
                                                                                                        
                                                                                                        <?php 
                                                                                                        $transport_pergi_options = $comp_model -> peserta_transport_pergi_option_list();
                                                                                                        if(!empty($transport_pergi_options)){
                                                                                                        foreach($transport_pergi_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = $this->set_field_selected('transport_pergi',$value, '');
                                                                                                        ?>
                                                                                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                                                                            <?php echo $label; ?>
                                                                                                        </option>
                                                                                                        <?php
                                                                                                        }
                                                                                                        }
                                                                                                        ?>
                                                                                                        
                                                                                                    </select>
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group col-md-6">
                                                                                                <label class="control-label" for="transport_pulang">Arrive <span class="text-danger">*</span></label>
                                                                                                <div id="ctrl-transport_pulang-holder" class=""> 
                                                                                                    
                                                                                                    <select required=""  id="ctrl-transport_pulang" name="transport_pulang"  placeholder="Choose Arrive Transport  (Discount only for Two Way)"    class="custom-select" >
                                                                                                        <option value="">Choose Arrive Transport  (Discount only for Two Way)</option>
                                                                                                        
                                                                                                        <?php 
                                                                                                        $transport_pulang_options = $comp_model -> peserta_transport_pulang_option_list();
                                                                                                        if(!empty($transport_pulang_options)){
                                                                                                        foreach($transport_pulang_options as $option){
                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                        $selected = $this->set_field_selected('transport_pulang',$value, '');
                                                                                                        ?>
                                                                                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                                                                                            <?php echo $label; ?>
                                                                                                        </option>
                                                                                                        <?php
                                                                                                        }
                                                                                                        }
                                                                                                        ?>
                                                                                                        
                                                                                                    </select>
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group col-md-6">
                                                                                                <label class="control-label" for="transport_catatan">Please write flight ticket information (Only Airplane Transport) </label>
                                                                                                <div id="ctrl-transport_catatan-holder" class=""> 
                                                                                                    
                                                                                                    <textarea placeholder="Departure & Arrival Schedule Airport" id="ctrl-transport_catatan"  rows="" name="transport_catatan" class=" form-control"><?php  echo $this->set_field_value('transport_catatan',''); ?></textarea>
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group col-md-6">
                                                                                                <label class="control-label" for="alergi_makanan">Food Allergies </label>
                                                                                                <div id="ctrl-alergi_makanan-holder" class=""> 
                                                                                                    
                                                                                                    <textarea placeholder="Enter Food Allergies" id="ctrl-alergi_makanan"  rows="" name="alergi_makanan" class=" form-control"><?php  echo $this->set_field_value('alergi_makanan',''); ?></textarea>
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                            <div class="form-group col-md-6">
                                                                                                <label class="control-label" for="riwayat_kesehatan">Medical History </label>
                                                                                                <div id="ctrl-riwayat_kesehatan-holder" class=""> 
                                                                                                    
                                                                                                    <textarea placeholder="Enter Medical History" id="ctrl-riwayat_kesehatan"  rows="" name="riwayat_kesehatan" class=" form-control"><?php  echo $this->set_field_value('riwayat_kesehatan',''); ?></textarea>
                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                    
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            
                                                                                        </div>
                                                                                        <div class="form-group form-submit-btn-holder text-center">
                                                                                            <div class="form-ajax-status"></div>
                                                                                            <button class="btn btn-primary" type="submit">
                                                                                                Submit
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
                                                            