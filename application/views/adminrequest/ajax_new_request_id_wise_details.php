<div class="box-body">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Target Number Information 
<!--                        <div class="pull-right" style="margin-top: -75px;">                            
                                <a href="" download data-toggle="download" title="Download" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-download-alt"></span></a>
                        </div>-->
                        
                    </h3>
                </div>
                <div class="panel-body">                   
                    <label for="txtFloor"><span class="errorStar"></span> Target Device :</label> &nbsp;&nbsp;
                    <span class="errorStar"><?= $search_datas['msisdn']; ?></span> <br>                                                                
                </div>
            </div>
        </div>  
    </div>  
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Requester Information</h3>
                </div>
                <div class="panel-body">
                    <label for="txtFloor"><span class="errorStar"></span> Requested For :</label> &nbsp;&nbsp;
                    <span class="errorStar"><?= $search_datas['name']; ?></span> <br>
                    <label for="txtFloor"><span class="errorStar"></span> Designation :</label> &nbsp;&nbsp;
                    <span class="errorStar"><?= $search_datas['designation']; ?></span> <br>
                    <label for="txtFloor"><span class="errorStar"></span> Requested Date :</label> &nbsp;&nbsp;
                    <span class="errorStar"><?= $search_datas['date_requested']; ?></span> <br>  
                </div>
            </div>
        </div>        
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Investigation Information</h3>
                </div>
                <div class="panel-body">                   
                        <label for="txtFloor"><span class="errorStar"></span> Crime Type :</label> &nbsp;&nbsp;
                        <span class="errorStar"><?= $search_datas['crime_name']; ?></span> <br>
                        <label for="txtFloor"><span class="errorStar"></span> Crime Sub Type :</label> &nbsp;&nbsp;
                        <span class="errorStar"><?= $search_datas['subcrime_name']; ?></span> <br>
                        <label for="txtFloor"><span class="errorStar"></span> Comments :</label> &nbsp;&nbsp;
                        <span class="errorStar"><?= $search_datas['remarks_reference']; ?></span> <br>
                                                                
                </div>
            </div>
        </div>
         </div>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Request Information</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-12 col-xs-12">
                        
                        <?php if($search_datas['cdr_voice_sms'] !='N'){ ?>
                            <label for="txtFloor"><span class="errorStar"></span> Voice/SMS/MMS CDR </label> &nbsp;&nbsp;  <br>                         
                        <?php }  else { ?>                            
                            
                        <?php  } ?>                        
                        <?php if($search_datas['recharge'] !='N'){ ?>
                            <label for="txtFloor"><span class="errorStar"></span> Payment Recharge </label> &nbsp;&nbsp; <br>                           
                          <?php }  else { ?>
                        <?php  } ?>                            
                        <?php if($search_datas['nid_pp'] !='N'){ ?>                            
                              <label for="txtFloor"><span class="errorStar"></span> Used NID/PP Info </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                        <?php  } ?> 
<!--                         <?php if($search_datas['msisdn'] !='N'){ ?>
                             <label for="txtFloor"><span class="errorStar"></span> MFS TRANX CDR </label> &nbsp;&nbsp;   <br>                            
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>      -->
                        
                         <?php if($search_datas['ipdr'] !='N'){ ?>
                              
                              <label for="txtFloor"><span class="errorStar"></span> IPDR </label> &nbsp;&nbsp; <br>
                              
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>  
                        
                         <?php if($search_datas['info_fnf'] !='N'){ ?>
                              
                             <label for="txtFloor"><span class="errorStar"></span> Configure F&F </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>        
                   
                        
                         <?php if($search_datas['gprs_data'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> GPRS/Data CDR </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?> 
                            
                        <?php if($search_datas['used_imei'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> Used IMEI :</label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>     
                              
                        <?php if($search_datas['registration'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> NID & Registrations </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>     
                        
                        <?php if($search_datas['info_scaned_pp'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> Scanned NID/PP </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>       
                        <?php if($search_datas['info_subs'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> Scanned Subscription </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>      
                        
                         <?php if($search_datas['info_ussd'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> USSD CDR </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>       
                           <?php if($search_datas['info_demographic'] !='N'){ ?>
                              
                            <label for="txtFloor"><span class="errorStar"></span> Demographic Info </label> &nbsp;&nbsp; <br>
                             
                        <?php }  else { ?>
                               
                            
                        <?php  } ?>       
                                
                                
                    </div>              
                </div>
            </div>
        </div>        
    </div>
                                           
        
    </div>      
</div>  