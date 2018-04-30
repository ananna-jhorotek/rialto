 <option value="">Select Unit</option>
<?php foreach ($deployment_wise_unit as $unit): ?>            
                 <option  value="<?= $unit['appointments_id'] ?>" ><?= $unit['appointment'] ?></option>                               
<?php endforeach;?>