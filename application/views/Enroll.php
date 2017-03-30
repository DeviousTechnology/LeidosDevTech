<form>
  
  <?php echo form_open(base_url().'login/enroll')?>
  <?php echo form_label('ProjectID', 'Project ID', $attribute=array()); ?>
  <?php echo form_input('ProjectID', set_value('ProjectID'), $attribute=array("class"=>"form-control", "id" => "Name", "placeholder"=>"Project ID")); ?>                         		
  <?php 
	echo form_submit('submit', 'Enroll', array("class"=>"btn btn-lg", "id"=>"submit"));
  ?>
  <?php echo form_close() ?>
</form>

