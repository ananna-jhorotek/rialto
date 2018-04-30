 <option value="">Select Reporting Officer</option>
<?php foreach ($deployment_wise_unit as $unit): ?>            
                 <option  value="<?= $unit['rt_officers_id'] ?>" ><?= $unit['rt_officer'] ?></option>                               
<?php endforeach;?>