
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
    
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            
            <div class="row ">
                
                <div class="col-12 ">
                    <h3 class="record-title">Edit  Peserta</h3>
                    
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
                    
                    <?php $this :: display_page_errors(); ?>
                    
                    <div  class=" animated fadeIn">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form form-vertical needs-validation" action="<?php print_link("peserta/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                
                                <div class="row">
                                    
                                    <div class="form-group col-md-4">
                                        <label class="control-label" for="paket_acara">Event Name <span class="text-danger">*</span></label>
                                        <div id="ctrl-paket_acara-holder" class=""> 
                                            <input id="ctrl-paket_acara"  value="<?php  echo $data['paket_acara']; ?>" type="text" placeholder="Enter Event Name" list="paket_acara_list"  readonly required="" name="paket_acara"  class="form-control " />
                                                
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
                                                <input id="ctrl-kd_transaksi"  value="<?php  echo $data['kd_transaksi']; ?>" type="number" placeholder="Enter Order Number" step="1"  readonly required="" name="kd_transaksi"  class="form-control " />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group col-md-4">
                                                <label class="control-label" for="kode_booking">Unique Code <span class="text-danger">*</span></label>
                                                <div id="ctrl-kode_booking-holder" class=""> 
                                                    <input id="ctrl-kode_booking"  value="<?php  echo $data['kode_booking']; ?>" type="text" placeholder="Enter Unique Code" list="kode_booking_list"  readonly required="" name="kode_booking"  class="form-control " />
                                                        
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
                                                        <input id="ctrl-nama_panggilan"  value="<?php  echo $data['nama_panggilan']; ?>" type="text" placeholder="Enter Nick Name"  required="" name="nama_panggilan"  class="form-control " />
                                                            
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label" for="nama_lengkap">Full Name <span class="text-danger">*</span></label>
                                                        <div id="ctrl-nama_lengkap-holder" class=""> 
                                                            <input id="ctrl-nama_lengkap"  value="<?php  echo $data['nama_lengkap']; ?>" type="text" placeholder="Enter Full Name"  required="" name="nama_lengkap"  data-url="api/json/peserta_nama_lengkap_value_exist/" data-loading-msg="Checking availability ..." data-available-msg="Available" data-unavailable-msg="Not available" class="form-control  ctrl-check-duplicate" />
                                                                
                                                                <div class="check-status"></div> 
                                                                
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group ">
                                                        <label class="control-label" for="jenis_kelamin">Gender <span class="text-danger">*</span></label>
                                                        <div id="ctrl-jenis_kelamin-holder" class=""> 
                                                            
                                                            <?php
                                                            $jenis_kelamin_options = Menu :: $jenis_kelamin;
                                                            $field_value = $data['jenis_kelamin'];
                                                            if(!empty($jenis_kelamin_options)){
                                                            foreach($jenis_kelamin_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            //check if value is among checked options
                                                            $checked = $this->check_form_field_checked($field_value, $value);
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
                                                                    <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="Enter Email"  name="email"  class="form-control " />
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                                
                                                                
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label class="control-label" for="telp">Telephone <span class="text-danger">*</span></label>
                                                                    <div id="ctrl-telp-holder" class=""> 
                                                                        <input id="ctrl-telp"  value="<?php  echo $data['telp']; ?>" type="text" placeholder="Enter Telephone"  required="" name="telp"  class="form-control " />
                                                                            
                                                                            
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    <div class="form-group col-md-6">
                                                                        <label class="control-label" for="asal_sel_komunitas">Cell Group/Community for non KTM <span class="text-danger">*</span></label>
                                                                        <div id="ctrl-asal_sel_komunitas-holder" class=""> 
                                                                            
                                                                            <?php
                                                                            $asal_sel_komunitas_options = Menu :: $asal_sel_komunitas;
                                                                            $field_value = $data['asal_sel_komunitas'];
                                                                            if(!empty($asal_sel_komunitas_options)){
                                                                            foreach($asal_sel_komunitas_options as $option){
                                                                            $value = $option['value'];
                                                                            $label = $option['label'];
                                                                            //check if value is among checked options
                                                                            $checked = $this->check_form_field_checked($field_value, $value);
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
                                                                                <input id="ctrl-asal_kota_kab"  value="<?php  echo $data['asal_kota_kab']; ?>" type="text" placeholder="Enter City"  required="" name="asal_kota_kab"  class="form-control " />
                                                                                    
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            <div class="form-group col-md-6">
                                                                                <label class="control-label" for="asal_negara">Country <span class="text-danger">*</span></label>
                                                                                <div id="ctrl-asal_negara-holder" class=""> 
                                                                                    
                                                                                    <select required=""  id="ctrl-asal_negara" name="asal_negara"  placeholder="Select a value ..."    class="custom-select" >
                                                                                        <option value="">Select a value ...</option>
                                                                                        
                                                                                        <?php
                                                                                        $asal_negara_options = Menu :: $asal_negara;
                                                                                        $field_value = $data['asal_negara'];
                                                                                        if(!empty($asal_negara_options)){
                                                                                        foreach($asal_negara_options as $option){
                                                                                        $value = $option['value'];
                                                                                        $label = $option['label'];
                                                                                        $selected = ( $value == $field_value ? 'selected' : null );
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
                                                                                    <input id="ctrl-tgl_lahir" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tgl_lahir']; ?>" type="datetime" name="tgl_lahir" placeholder="Enter Date of Birth" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="Y-m-d" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                        
                                                                                        
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
                                                                                            $rec = $data['transport_pergi'];
                                                                                            $transport_pergi_options = $comp_model -> peserta_transport_pergi_option_list();
                                                                                            if(!empty($transport_pergi_options)){
                                                                                            foreach($transport_pergi_options as $option){
                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                            $selected = ( $value == $rec ? 'selected' : null );
                                                                                            ?>
                                                                                            <option 
                                                                                                <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
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
                                                                                            $rec = $data['transport_pulang'];
                                                                                            $transport_pulang_options = $comp_model -> peserta_transport_pulang_option_list();
                                                                                            if(!empty($transport_pulang_options)){
                                                                                            foreach($transport_pulang_options as $option){
                                                                                            $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                            $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                            $selected = ( $value == $rec ? 'selected' : null );
                                                                                            ?>
                                                                                            <option 
                                                                                                <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
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
                                                                                        
                                                                                        <textarea placeholder="Departure & Arrival Schedule Airport" id="ctrl-transport_catatan"  rows="" name="transport_catatan" class=" form-control"><?php  echo $data['transport_catatan']; ?></textarea>
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="control-label" for="alergi_makanan">Food Allergies </label>
                                                                                    <div id="ctrl-alergi_makanan-holder" class=""> 
                                                                                        
                                                                                        <textarea placeholder="Enter Food Allergies" id="ctrl-alergi_makanan"  rows="" name="alergi_makanan" class=" form-control"><?php  echo $data['alergi_makanan']; ?></textarea>
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                                <div class="form-group col-md-6">
                                                                                    <label class="control-label" for="riwayat_kesehatan">Medical History </label>
                                                                                    <div id="ctrl-riwayat_kesehatan-holder" class=""> 
                                                                                        
                                                                                        <textarea placeholder="Enter Medical History" id="ctrl-riwayat_kesehatan"  rows="" name="riwayat_kesehatan" class=" form-control"><?php  echo $data['riwayat_kesehatan']; ?></textarea>
                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                            <div class="form-ajax-status"></div>
                                                                            <div class="form-group text-center">
                                                                                <button class="btn btn-primary" type="submit">
                                                                                    Edit
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
                                                