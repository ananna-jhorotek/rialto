<option value="">Please Select</option>
<?php foreach ($sub_crime_type_data as $sub_crime): ?>            
                 <option  value="<?= $sub_crime['subcrime_id'] ?>" ><?= $sub_crime['subcrime_name'] ?></option>                               
<?php endforeach;?>