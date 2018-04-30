  <style type="text/css">
  #wait {
  padding: 20px;
  background: rgb(34,34,34); /* for IE */
  background: rgba(34,34,34,0.75);
}
</style>


<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <div id="wait" style="display:none; width:100%; height:100%; margin-top: 85px;" align="center">
                    <img src='<?= base_url('assets/inspiroo_logo_loader_pop.gif') ?>' width="100" height="100" /><br>Searching..</div>
        <!-- Content Header (Page header) -->
        <section class="content-header"> 
            <h1>Completed Request Details
                <!--<a href="<?= site_url('settings/create_user') ?>" class="btn btn-warning add-btn pull-right">Add New Group</a>-->
            </h1>      
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">              
                <div class="col-md-12">    
                    <div class="box box-info">
                        <div class="box-header"></div>      
                        <div class="box-body">          
                            <div class="form-group">
                                <div class="col-sm-3"> 
                                    <label>Target Number:</label>
                                    <input type="text" placeholder="Type Your Target Number" id="target_number" name="fname" class="form-control" >
                                </div>
                                <div class="col-sm-3">  
                                    <label>Requested By:</label>
                                    <input type="text" name="lname" placeholder="Type Your Requested By" id="request_by" class="form-control" >
                                </div>
                                <div class="col-sm-2">
                                    <label>Crime Type:</label>
                                    <input type="email" placeholder="Type Your Crime Type" name="username" id="crime_type" class="form-control" >
                                </div>
                                <div class="col-sm-2">
                                    <label>Start date:</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text'id="start_date" required="required" id="start_date" class="form-control" placeholder="Select Date"/>
                                        <span class="input-group-addon"> <span  class="glyphicon glyphicon-calendar"></span> </span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>End Date:</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text'  required="required" id="end_date" class="form-control" placeholder="Select Date"/>
                                        <span class="input-group-addon"> <span  class="glyphicon glyphicon-calendar"></span> </span>
                                    </div>
                                </div>                               
                            </div>                                               
                            <div class="form-group">
                               <div class="col-sm-6"></div>
                                <div class="col-sm-3">
                                    <input  style="margin-top: 20px;" type="submit" value="Search" name="submit" id="search_button" class="btn btn-success add-btn btn-lg">
                                </div>
                               <div class="col-sm-3"></div>
                            </div>    
                            
                           


                        </div>
                    </div>
                </div>           
            </div>
        </section>
        
        <section class="content" id="default_data" style="margin-top: -50px;">
            <div class="row">              
                <div class="col-md-12">    
                    <div class="box box-info">   
                        <div class="box-header"></div> 
                        <div class="box-body">             

                            <div class="table-responsive"> 
                                <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr> 
                                            <th><center>Sl No</center></th>
                                            <th><center>Target Number</center></th>
                                            <th><center>Requested By</center></th>
                                            <th><center>Crime Type</center></th>                                                                            
                                            <th><center>Requested Date</center></th>
                                            <th><center>Completed By</center></th>
                                            <th><center>Completed Date</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>                                
                                    <tbody>
                                    <?php $default_datas = $this->db
                                                                ->select('t1.name as usersname,t2.name as users_name,t1.*,t2.*,tbl_req_mno_msisdn.*,designations.*,tbl_crimeinfo.*,battalions.*')
                                                                ->join('users as t1','t1.id=tbl_req_mno_msisdn.completed_by')
                                                                ->join('users as t2','t2.id=tbl_req_mno_msisdn.requested_for')
                                                                ->join('battalions', 'battalions.battalions_id=t2.battalions_id')
                                                                ->join('designations', 'designations.designations_id=t2.designations_id')
                                                                ->join('tbl_crimeinfo', 'tbl_crimeinfo.id=tbl_req_mno_msisdn.reason_crime_type')
                                                                ->where('request_status', 'Completed')                                                                
                                                                 ->where('tbl_req_mno_msisdn.battalions_id', $this->session->userdata('battalion_id'))
                                                                ->get('tbl_req_mno_msisdn')                                            
                                                                ->result_array();?>
                                      <?php $i=1; foreach($default_datas as $default_data):?>
                                            <tr>
                                                <td align="center"> <?php echo $i;?> </td>        
                                                <td align="center"><?= $default_data['msisdn'] ?>  </td>                                        
                                                <td align="center"><?= $default_data['users_name'].' - '.$default_data['designation'].' - '.$default_data['battalion']; ?></td> 
                                                <td align="center"><?= $default_data['crime_name'] ?>  </td>      
                                                <td align="center"><?= $default_data['date_requested'] ?>  </td> 
                                                <td align="center"><?= $default_data['usersname'] ?>  </td>      
                                                <td align="center"><?= $default_data['completed_date'] ?>  </td> 
                                                <td align="center"> 
                                                        <a class="btn btn-info btn-xs" data-toggle="tooltip"
                                                           onclick="$('#nurse_view_5').modal('show');" id="details_page"
                                                           data-transaction_id="<?= $default_data['request_id'] ?>"
                                                           title="Details"><i class="fa fa-eye"></i> 
                                                        </a>  
                                                </td>
                                            </tr>                                             
                                            <?php $i++; endforeach;?>                                         
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>                    
                </div>           
            </div>
        </section>  
        
        <section class="content" id="search_results" style="margin-top: -50px;">
            
        </section>  
        
    </div>
      
      <div id="nurse_view_5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Pending Request Information</h4>
                </div>
                <div class="modal-body" id="new_request_details_page">

                </div>
            </div>
        </div>
    </div>
<script src="<?= base_url('assets/js/jQuery-2.1.4.min.js');?>"></script>

<script>
$(document).ready(function(){           
        $('body').on('click','#search_button',function(){ 
        //alert('ok');
         var target_number = $('#target_number').val();
         var request_by = $('#request_by').val();
         var crime_type = $('#crime_type').val();         
         var start_date = $('#start_date').val();
         var end_date = $('#end_date').val();         
         
        $.ajax({
            type: 'post',
               data: {'target_number': target_number, 'request_by': request_by, 'crime_type': crime_type, 'start_date': start_date, 'end_date': end_date},
            dataType: 'html',
            async: false,
            url: "<?= site_url('request/ajax_completed_request_data'); ?>",
            success: function (result)
            {
                $('#default_data').hide();
                $('#search_results').show();
                $('#search_results').html(result);

            }
        });
    });  
    
    
    $('body').on('click', '#details_page', function () {
        //alert('ok');
         var transaction_id = $(this).data('transaction_id');
          var url = '<?= site_url('request/ajax_completed_transaction_details'); ?>';
            $.ajax({
                    type : "post",
                    data : {'transaction_id' : transaction_id},
                    async : false,
                    dataType : "html",
                    url : url,
                    success : function (result) {
                      $('#new_request_details_page').html(result);  
                    },
                                   
                });
        });
        
        
        $(document).ajaxStart(function(){
             $("#search_button").hide();
             $("#wait").css("display", "block");

             });
        $(document).ajaxComplete(function(){
                 $("#wait").css("display", "none");
                  $("#search_button").show();
            });
        
});
</script>