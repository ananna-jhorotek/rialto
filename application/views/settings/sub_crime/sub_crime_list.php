<!--<label for="txtFloor"><span class="errorStar"></span> User Type List :</label>-->
                         <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><center>Sl No</center></th>
                                         <th><center>Crime Name</center></th>     
                                        <th><center>Sub Crime Name</center></th>                                                                                                                
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i=1; foreach($user_type_list as $user_type):?>
                                    <tr>
                                        <td align="center"><?php echo $i ;?></td>
                                        <td align="center">
                                            <span data-wings_id="<?= $user_type['crime_id'];?>"> <?= $user_type['crime_name'];?></span>
                                        </td> 
                                        <td align="center">
                                            <span data-delployment_id="<?= $user_type['subcrime_id'];?>"> <?= $user_type['subcrime_name'];?></span>
                                        </td>
                                        <td align="center">          
                                            <a data-remote="false" data-toggle="modal" data-target="#myModal2" class="btn btn-xs btn-info"
                                                id="edit_info" data-function_id="<?= $user_type['subcrime_id'];?>" title="Edit">
                                                <i class="fa fa-pencil-square-o"></i> 
                                            </a>                                             
                                            <a class="btn btn-danger btn-xs delete_user_type" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this item?');" data-user_type_id="<?= $user_type['subcrime_id'];?>" data-original-title="Delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>  
                                   <?php $i++; endforeach;?>                                                                   
                                </tbody>
                            </table>
