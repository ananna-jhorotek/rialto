<style>
    .left-inner-addon {
    position: relative;
}
.left-inner-addon input {
    padding-left: 28px;    
}
.left-inner-addon span {
    position: absolute;
    padding: 8px 5px;
    pointer-events: none;
}

.right-inner-addon {
    position: relative;
}
.right-inner-addon input {
    padding-right: 30px;    
}
.right-inner-addon span {
    position: absolute;
    right: 0px;
    padding: 7px 12px;
    pointer-events: none;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Add Reference<a href="<?= site_url('settings/reference_details_list') ?>" class="btn btn-success add-btn pull-right">Reference List</a></h1>      
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">    
                <div class="box box-info">
                    <div class="box-header">        
                    </div>      
                    <div class="box-body">
                        <form action="<?= site_url('settings/save_reference_details'); ?>"  class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">                   
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">                                    
                                    <div class="panel-body">                   
                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Reference Type : </label>
												 <select class="form-control custom-select" name="reference_type" id="reference_type" required>
													<option value="">Please Select</option>
													<?php
													$ref_types = $this->db
																	->get('tbl_reference_type')->result_array();
													foreach ($ref_types as $ref_type):
														?>                                                
														<option value="<?= $ref_type['category']; ?>"><?= $ref_type['category']; ?></option>
													<?php endforeach; ?> 
												</select>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Owner Reference :</label>
                                                <input type="text" name="owner_reference" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Designation/Rank :</label>
                                                <input type="text" name="designation" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>                                   
                                        </div> 


                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Organization :</label>
                                                <input type="text" name="org" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <label>Contact Number :</label>
													<div class="left-inner-addon">
														<span style="font-weight: bold; font-size: 12px;">+88</span>
														<input type="number" name="contact_no" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
													</div>
                                            </div>

                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Contact E-Mail :</label>
                                                <input type="email" name="contact_email" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>                                           
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Reference Number :</label>
													<div class="left-inner-addon">
														<span style="font-weight: bold; font-size: 12px;">+88</span>
														<input type="text" name="reference_number" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
													</div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Relation :</label>
                                                <input type="relation" name="relation" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Priority :</label>
                                                <select required class="form-control" name="priority">
                                                    <option value="">Select Priority </option>
                                                    <option value="low">Low </option>
                                                    <option value="medium">Medium </option>
                                                    <option value="high">High </option>
                                                </select>
                                            </div>                                         
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-4">
                                                <input type="submit" value="Submit" name="submit" id="sub" class="btn btn-warning add-btn">
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>


                                    </div>
                                    
                                </div>  
                            </div>
                            
                       </form>
                    </div>

                </div>  
            </div>       

   </div>
               

<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>    
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>

