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
                                    <th><center>Action</center></th>
                                </tr>
                        </thead>                                
                        <tbody>
                             <?php $i=1; foreach($search_datas as $search_data):?>
                            <tr>
                                    <td align="center"> <?php echo $i; ?> </td>        
                                    <td align="center"><?= $search_data['msisdn'] ?>  </td>                                        
                                    <td align="center"><?= $search_data['name'] . ' - ' . $search_data['designation'] . ' - ' . $search_data['battalion']; ?></td> 
                                    <td align="center"><?= $search_data['crime_name'] ?>  </td>      
                                    <td align="center"><?= $search_data['date_requested'] ?>  </td> 
                                    <td align="center"> 
                                        <a class="btn btn-info btn-xs" data-toggle="tooltip"
                                           onclick="$('#nurse_view_5').modal('show');" id="details_page"
                                           data-transaction_id="<?= $search_data['request_id'] ?>"
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