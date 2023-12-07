<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM faculty_mentor s ,event_info ef ,keynote_speaker st,events e where e.event_id= ef.event_id and e.event_id= s.event_id and e.event_id= st.event_id");
?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aems</title>
</head>
    
    <body>
<?php include 'utils/adminHeader.php'?>
 
    
        <div class = "content">
            <div class = "container">
            <h1>Event details</h1>
            <?php
if (mysqli_num_rows($result) > 0) {
?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>Event_name</th>
                            <th>Capacity</th>
                            <th>Keynote Speaker</th>
                            <th>Faculty Mentor</th>
   
                            <th>Date</th>
                        
                            <th>Time</th>
                            <th>Venue</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     $i=0;
                     while($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                
                   
                            echo '<td>' . $row['event_title'] . '</td>';                    
                            echo '<td>' . $row['capacity'] . '</td>';
                            echo '<td>' . $row['ks_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>'.$row['Date'].'</td>';
                            echo '<td>'.$row['time'].'</td>';
                            echo '<td>'.$row['location'].'</td>';
                            
                            echo '<td>'
                        
                            .'<a class="delete" href="deleteEvent.php?id='.$row['event_id'].'">Delete</a> '
                            .'</td>';
                            echo '</tr>';  

                            
                $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
<?php
}

?>             
                <a class="btn btn-default" href = "createEventForm.php">Create Event</a><!--register button-->
            </div>
        </div>
        
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
