
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
                    <h3 class="record-title">Create New Order</h3>
                    
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
                        <li class="active">
                            <span class="bubble"></span>
                            <b>Step 1<br>Create Order</b>
                            </li>
                            <li >
                                <span class="bubble"></span>
                            </li>
                            <li >
                                <span class="bubble"></span>
                                <b>Step 2<br>Add Participant</b>
                                </li>
                                <li >
                                    <span class="bubble"></span>
                                </li>
                                <li>
                                    <span class="bubble"></span>
                                    <b>Step 3<br>Payment Confirmation</b>
                                    </li><!--
                                    <li>
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
                                    <form id="transaksi-add-form" role="form" novalidate enctype="multipart/form-data" class="form form-vertical needs-validation" action="<?php print_link("transaksi/add?csrf_token=$csrf_token") ?>" method="post">
                                        <div>
                                            
                                            
                                            <div class="form-group ">
                                                <label class="control-label" for="paket_acara">Choose Event <span class="text-danger">*</span></label>
                                                <div id="ctrl-paket_acara-holder" class=""> 
                                                    
                                                    <select required=""  id="ctrl-paket_acara" name="paket_acara"  placeholder="Choose Event"    class="custom-select" >
                                                        <option value="">Choose Event</option>
                                                        
                                                        <?php 
                                                        $paket_acara_options = $comp_model -> transaksi_paket_acara_option_list();
                                                        if(!empty($paket_acara_options)){
                                                        foreach($paket_acara_options as $option){
                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                        $selected = $this->set_field_selected('paket_acara',$value, '');
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
                                            
                                            
                                            
                                        </div>
                                        <div class="form-group form-submit-btn-holder text-center">
                                            <div class="form-ajax-status"></div>
                                            <button class="btn btn-primary" type="submit">
                                                Create New order
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
            