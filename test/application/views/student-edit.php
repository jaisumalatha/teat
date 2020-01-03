<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<?php
$stu_id=$stu_ed['stu_id'];
$stu_name=$stu_ed['stu_name'];
$stu_city=$stu_ed['stu_city'];
$stu_contact=$stu_ed['stu_contact'];
?>
<?php echo form_open('student-edit/'.$stu_id); ?>
  First name:<br>
  <input type="text" name="stu_name" value="<?=$stu_name;?>">
  <br>
  city name:<br>
  <input type="text" name="stu_city" value="<?=$stu_city;?>">
  <br><br>
  contact no:<br>
  <input type="text" name="stu_contact" value="<?=$stu_contact;?>">
  <br><br>
  <input type="submit" value="Submit">
<?php echo form_close(); ?>


</body>
</html>
