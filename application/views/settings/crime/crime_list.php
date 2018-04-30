<!--<label for="txtFloor"><span class="errorStar"></span> User Type List :</label>-->
                         <table id="example" class=" data-table table table-striped table-bordered"  width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><center>Sl No</center></th>
                                        <th><center>User Type</center></th>                                                                                                                
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>                                
                                <tbody>
                                    <?php $i=1; foreach($user_type_list as $user_type):?>
                                    <tr>
                                        <td align="center"><?php echo $i ;?></td>
                                        <td align="center"><span data-user_type_id="<?= $user_type['id'];?>"> <?= $user_type['crime_name'];?></span></td>                                     
                                        <td><center>                                            
<a class="btn btn-primary btn-xs edit_user_type" data-toggle="tooltip" data-original-title="Edit"data-user_type_id="<?= $user_type['id'];?>"data-user_type="<?= $user_type['crime_name'];?>"><i class="fa fa-pencil"></i>                                               
                                            </a> 
                                            <a class="btn btn-danger btn-xs delete_user_type" data-toggle="tooltip" onclick="return confirm('Are you sure you want to delete this item?');" data-user_type_id="<?= $user_type['id'];?>" data-original-title="Delete">
                                                <i class="fa fa-trash-o"></i>
                                            </a>   
                                            </center>
                                        </td>
                                    </tr>  
                                   <?php $i++; endforeach;?>                                                                   
                                </tbody>
                            </table>
