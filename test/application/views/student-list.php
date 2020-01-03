<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>student Table</h2>
<a href='<?=base_url();?>student-add'>add data</a>
<table>
  <tr>
    <th>student name</th>
    <th>student city</th>
    <th>student contact</th>
    <th>ACTION</th>
  </tr>
  <?php
  foreach($student_list as $stu)
  {
    $stu_name=$stu['stu_name'];
    $stu_city=$stu['stu_city'];
    $stu_contact=$stu['stu_contact'];
    $stu_id=$stu['stu_id'];
    ?>
  <tr>
    <td><?=$stu_name;?></td>
    <td><?=$stu_city;?></td>
    <td><?=$stu_contact;?></td>
    <td><a href='<?=base_url();?>student-edit/<?=$stu_id;?>'>edit data</a></td>
    <td><a href='<?=base_url();?>student-del/<?=$stu_id;?>'>del data</a></td>
  </tr>
<?php }?>
</table>

</body>
</html>
