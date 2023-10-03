
<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = get_current_url();
?>
<div>
    
    <div  class=" p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-md-12 comp-grid">
                    <h3 ><strong>Welcome</strong><br><?php echo USER_NAME; ?> - Participant !</h3>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div  class="">
            <div class="container">
                
                <div class="row ">
                    
                    <div class="col-md-12 comp-grid">
                        <div class=""></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div  class="">
            <div class="container">
                
                <div class="row ">
                    
                    <div class="col comp-grid">
                        
                        <?php $rec_count = $comp_model->getcount_confirmed();  ?>
                        <a class="animated zoomIn record-count card bg-success text-white"  href="<?php print_link("transaksi/ListPartcipant") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-check-square "></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Confirmed</div>
                                        
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                            
                        </a>
                        
                    </div>
                    
                    <div class="col comp-grid">
                        
                        <?php $rec_count = $comp_model->getcount_unpaid();  ?>
                        <a class="animated zoomIn record-count <?php echo ($rec_count==0 ? 'card bg-success text-white' : 'card bg-danger text-white'); ?>"  href="<?php print_link("transaksi/ListPartcipant") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-question-circle "></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Unpaid</div>
                                        
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                            
                        </a>
                        
                    </div>
                    
                    <div class="col comp-grid">
                        
                        <?php $rec_count = $comp_model->getcount_ordercount();  ?>
                        <a class="animated zoomIn record-count alert alert-info"  href="<?php print_link("transaksi/ListPartcipant") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-calculator "></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Order Count</div>
                                        
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                            
                        </a>
                        
                    </div>
                    
                    <div class="col comp-grid">
                        
                        <?php $rec_count = $comp_model->getcount_peserta();  ?>
                        <a class="animated zoomIn record-count alert alert-secondary"  href="<?php print_link("transaksi/ListPartcipant") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-user "></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Peserta</div>
                                        
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                            
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div  class="">
            <div class="container">
                
                <div class="page-header"><h3>Navigation</h3></div>
                
                <div class="row ">
                    
                    <div class="col-md-3 comp-grid">
                        
                        <a  class="btn btn-primary" href="<?php print_link("transaksi/listpartcipant") ?>">
                            <i class="fa fa-shopping-cart "></i>                                
                            My Order List 
                        </a>
                        
                    </div>
                    
                    <div class="col-md-4 comp-grid">
                        
                        <a  class="btn btn-primary" href="<?php print_link("transaksi/add") ?>">
                            <i class="fa fa-plus "></i>                             
                            Create New Order 
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div  class="">
            <div class="container">
                
                <div class="row ">
                    
                    <div class="col-md-12 comp-grid">
                        <div class=""><div><blockquote class="blockquote">
                        <h4 style="color:#f6aa1c">Step by step to Register</h4></blockquote>
                        <table>
                            <tr><td>1. </td><td>Click Order List on the Menu</td></tr>
                            <tr><td>2. </td><td>Create New Order</td></tr>
                            <tr><td>3. </td><td>Add a participant</td></tr>
                            <tr><td>4. </td><td>Checkout and Payment</td></tr>
                            <tr><td>5. </td><td>Confirmation & E-Ticket</td></tr>
                            <tr><td>6. </td><td>Verified</td></tr>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

</div>
