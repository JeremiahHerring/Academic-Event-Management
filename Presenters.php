<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM presenters s");
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
<h1>Presenters details</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 <table class="table table-hover" >
  
  <tr>
    <th>Email</th>
    <th>Institution</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th></th>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["institution"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td> <?php echo '<a  href="updatePresenters.php?id='.$row['last_name'].'" class = "btn btn-default"> Update</a>'?></td>
   
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