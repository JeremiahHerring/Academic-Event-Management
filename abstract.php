<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM abstracts s ,events e where e.event_id= s.event_id");
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Aems</title>
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
    </head>

<body><?php include 'utils/adminHeader.php'?>
<div class = "content">
<div class = "container">
<h1>Abstract details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table class="table table-hover" >
  
  <tr>
    <th>Title</th>
    <th>Presenter</th>
    <th>Subject_Area</th>
    <th>Reviewer</th>
    <th>Event</th>

    <th></th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["presenter"]; ?></td>
    <td><?php echo $row["subject_area"]; ?></td>
    <td><?php echo $row["reviewer"]; ?></td>
    <td><?php echo $row["event_id"]; ?></td>
   
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
 </body>
 <?php include 'utils/footer.php';?>
</html>