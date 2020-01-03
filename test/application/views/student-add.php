<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php echo form_open('student-add'); ?>
  First name:<br>
  <input type="text" name="stu_name" value="">
  <br>
  city name:<br>
  <input type="text" name="stu_city" value="">
  <br><br>
  contact no:<br>
  <input type="text" name="stu_contact" value="">
  <br><br>
  <input type="submit" value="Submit">
<?php echo form_close(); ?>


</body>
</html>
