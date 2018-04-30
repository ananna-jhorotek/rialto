<input type="hidden" value="<?= $dep_details['designations_id']?>"  name="designations_id" class="form-control">
    <div class="panel panel-success">
        <div class="panel-body">    
            <div class="form-group">
                <label for="txtFloor"><span class="errorStar"></span> Wing Name :</label>
                <?php $wings = $this->db->get('battalions')->result_array();?>
                <select class="form-control deployment_id" name="battalion_id" id="battalion_id">
                    <option value=''>Select Wing</option>
                   <?php foreach ($wings as $wing): ?>
                        <option value="<?= $wing['battalions_id'] ?>" <?= ($wing['battalions_id'] != $dep_details['battalions_id']) ? '' : 'selected' ?>><?= $wing['battalion'] ?></option>
                    <?php endforeach; ?>
                    
                </select>   
            </div>
            <div class="form-group" >
                <label for="txtFloor"><span class="errorStar"></span> Unit :</label>
                <?php $wings = $this->db->get('appointments')->result_array();?>
                <select class="form-control pre_data" name="rank_id" id="rank_id">
                    <option value=''>Select Wing</option>
                   <?php foreach ($wings as $wing): ?>
                        <option value="<?= $wing['appointments_id'] ?>" <?= ($wing['appointments_id'] != $dep_details['appointments_id']) ? '' : 'selected' ?>><?= $wing['appointment'] ?></option>
                    <?php endforeach; ?>
                </select>  
                
                <select class="form-control" id="unit" style="display: none;">

                </select> 
                
            </div>            
            <div class="form-group" id="userNameDiv">
                <label for="txtFloor"><span class="errorStar"></span> Deployment :</label>
                <input type="text" id="deployment_name" value="<?= $dep_details['designation']; ?>"  name="designation" class="form-control">
                <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>                                                             
            </div>            
        </div> 
    </div> 
