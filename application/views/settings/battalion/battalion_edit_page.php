<input type="hidden" value="<?= $dep_details['battalions_id']?>"  name="battalions_id" class="form-control">
    <div class="panel panel-success">
        <div class="panel-body">    
            <div class="form-group">
                <label for="txtFloor"><span class="errorStar"></span> Wing Name :</label>
                <?php $wings = $this->db->get('wings')->result_array(); ?>
                <select class="form-control" name="wing_id" id="wing_id">
                    <option value=''>Select Wing</option>
                   <?php foreach ($wings as $wing): ?>
                        <option value="<?= $wing['wings_id'] ?>" <?= ($wing['wings_id'] != $dep_details['wings_id']) ? '' : 'selected' ?>><?= $wing['wing'] ?></option>
                    <?php endforeach; ?>
                    
                </select>   
            </div>
            <div class="form-group" id="userNameDiv">
                <label for="txtFloor"><span class="errorStar"></span> Deployment :</label>
                <input type="text" id="deployment_name" value="<?= $dep_details['battalion']; ?>"  name="deployment_name" class="form-control">
                <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>                                                             
            </div>            
        </div> 
    </div> 
