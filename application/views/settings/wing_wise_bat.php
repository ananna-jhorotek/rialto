 <option value="">Select Deployment</option>
<?php foreach ($deployment_wise_unit as $unit): ?>            
                 <option  value="<?= $unit['battalions_id'] ?>" ><?= $unit['battalion'] ?></option>                               
<?php endforeach;?>