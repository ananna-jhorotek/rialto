<!--<label for="txtFloor"><span class="errorStar"></span> User Type List :</label>-->
                         <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><center>Sl No</center></th>
                                        <th><center>Wing</center></th>   
                                        <th><center>Deployment</center></th>   
                                        <th><center>Unit</center></th>
                                        <th><center>Designation</center></th>   
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i=1; foreach($user_type_list as $user_type):?>
                                    <tr>
                                        <td align="center"><?php echo $i ;?></td>
                                        <td align="center">
                                            <span data-wings_id="<?= $user_type['wings_id'];?>"> <?= $user_type['wing'];?></span>
                                        </td> 
                                        <td align="center">
                                            <span data-delployment_id="<?= $user_type['battalions_id'];?>"> <?= $user_type['battalion'];?></span>
                                        </td>
                                        <td align="center">
                                            <span data-wings_id="<?= $user_type['appointments_id'];?>"> <?= $user_type['appointment'];?></span>
                                        </td> 
                                        <td align="center">
                                            <span data-wings_id="<?= $user_type['designations_id'];?>"> <?= $user_type['designation'];?></span>
                                        </td> 
                                        <td align="center">          
                                            <a data-remote="false" data-toggle="modal" data-target="#myModal2" class="btn btn-xs btn-info"
                                                id="edit_info" data-function_id="<?= $user_type['designations_id'];?>" title="Edit">
                                                <i class="fa fa-pencil-square-o"></i> 
                                            </a>                                             
                                            <a class="btn btn-danger btn-xs delete_user_type" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this item?');" data-user_type_id="<?= $user_type['designations_id'];?>" data-original-title="Delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>  
                                   <?php $i++; endforeach;?>                                                                   
                                </tbody>
                            </table>
