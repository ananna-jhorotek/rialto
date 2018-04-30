 
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('settings/update_reference_details');?>">
                 <input type="hidden" value="<?= $reference_details['reference_details_id']?>" name="reference_details_id">
                
                 
                 <div class="row">
                                <div class="col-lg-12 col-xs-12">                                    
                                    <div class="panel-body">                   
                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Reference Type : </label>
                                                <input type="text" name="reference_type" value="<?= $reference_details['reference_type']?>"   required class="form-control">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Owner Reference :</label>
                                                <input type="text" name="owner_reference" value="<?= $reference_details['owner_of_reference']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Designation/Rank :</label>
                                                <input type="text" name="designation" value="<?= $reference_details['designation']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>                                   
                                        </div> 


                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">      
                                                <label>Organization :</label>
                                                <input type="text" name="org" value="<?= $reference_details['organization']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">
                                                <label>Contact Number :</label>
                                                <input type="number" name="contact_no" value="<?= $reference_details['contact_no']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>

                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Contact E-Mail :</label>
                                                <input type="email" name="contact_email" value="<?= $reference_details['contact_email']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>                                           
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Reference Number :</label>
                                                <input type="text" name="reference_number" value="<?= $reference_details['reference_number']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Relation :</label>
                                                <input type="relation" name="relation" value="<?= $reference_details['relation']?>" class="form-control" required data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4">   
                                                <label>Priority :</label>
                                                <select required class="form-control" name="priority">
                                                    <option value="">Select Priority </option>
                                                    <option value="low" <?php if($reference_details['priority'] == 'low') echo 'selected="selected"'; ?>>Low</option>
                                                    <option value="medium" <?php if($reference_details['priority'] == 'medium') echo 'selected="selected"'; ?>>Medium</option>
                                                    <option value="high" <?php if($reference_details['priority'] == 'high') echo 'selected="selected"'; ?>>High</option>
                                                </select>
                                            </div>                                         
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-4">
                                                <input type="submit" value="Update" name="submit" id="sub" class="btn btn-danger add-btn">
                                            </div>
                                            <div class="col-sm-3"></div>
                                        </div>


                                    </div>
                                    
                                </div>  
                            </div>
                 
                 
                                                                            
                                
                              </form>
                            
               