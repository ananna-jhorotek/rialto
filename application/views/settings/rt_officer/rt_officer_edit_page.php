<input type="hidden" value="<?= $dep_details['rt_officers_id']?>"  name="rt_officers_id" class="form-control">
    <div class="panel panel-success">
        <div class="panel-body">    
            <div class="form-group">
                <label for="txtFloor"><span class="errorStar"></span> Deployment Name :</label>
                 <?php $wings = $this->db->get('battalions')->result_array();?>
                <select class="form-control" name="wing_id" id="wing_id">
                    <option value=''>Select Wing</option>
                   <?php foreach ($wings as $wing): ?>
                        <option value="<?= $wing['battalions_id'] ?>" <?= ($wing['battalions_id'] != $dep_details['battalions_id']) ? '' : 'selected' ?>><?= $wing['battalion'] ?></option>
                    <?php endforeach; ?>                    
                </select>   
            </div>
            <div class="form-group" id="userNameDiv">
                <label for="txtFloor"><span class="errorStar"></span> Reporting Officer :</label>
                <input type="text" id="deployment_name" value="<?= $dep_details['rt_officer']; ?>"  name="deployment_name" class="form-control">
                <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>                                                             
            </div>            
        </div> 
    </div> 
