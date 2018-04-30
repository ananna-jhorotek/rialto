 <option value="">Select Designation</option>
<?php foreach ($deployment_wise_unit as $unit): ?>            
                 <option  value="<?= $unit['designations_id'] ?>" ><?= $unit['designation'] ?></option>                               
<?php endforeach;?>