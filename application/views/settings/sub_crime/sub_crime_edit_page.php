

<input type="hidden" value="<?= $dep_details['subcrime_id']?>"  name="battalions_id" class="form-control">
    <div class="panel panel-success">
        <div class="panel-body">    
            <div class="form-group">
                <label for="txtFloor"><span class="errorStar"></span> Crime Name :</label>
                <?php $wings = $this->db->get('tbl_crimeinfo')->result_array(); ?>
                <select class="form-control" name="wing_id" id="wing_id">
                    <option value=''>Select Crime</option>
                   <?php foreach ($wings as $wing): ?>
                        <option value="<?= $wing['id'] ?>" <?= ($wing['id'] != $dep_details['crime_id']) ? '' : 'selected' ?>><?= $wing['crime_name'] ?></option>
                    <?php endforeach; ?>                    
                </select>   
            </div>
            <div class="form-group" id="userNameDiv">
                <label for="txtFloor"><span class="errorStar"></span> Sub Crime :</label>
                <input type="text" id="deployment_name" value="<?= $dep_details['subcrime_name']; ?>"  name="deployment_name" class="form-control">
                <span style="color: red;" class="text-help" id="userNameErrorMsg"></span>                                                             
            </div>            
        </div> 
    </div> 
