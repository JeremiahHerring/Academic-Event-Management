<div class="container">
            <div class="col-md-12">
            <hr>
            </div>

<div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                             

                          <img src=" <?php  echo $row['img_link'];?>" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong><?php echo '<td>' . $row['event_title'] . '</td>';?></strong></u></h1><!--title-->
                            <p style="color:#003300  ;font-size:20px "><!--content-->
                            <?php
                            
                           
                            echo 'Date:' . $row['Date'] .'<br>'; 
                            echo 'Time:' . $row['time'] .'<br>'; 
                            echo 'Location:' . $row['location'] .'<br>'; 
                            echo 'Keynote Speaker:' . $row['ks_name'] .'<br>'; 
                            echo 'Faculty Mentor:' . $row['name'] .'<br>'; 
                            echo 'Event Capacity:' . $row['capacity'].'<br>' ;
                    
                        ?>
                            </p>
                            
                            <br><br>
                        <?php echo
                            '<a class="btn btn-default" href="abstract.php"> <span class="glyphicon glyphicon-circle-arrow-right"></span>Abstract</a>'
                        ?>
                            <br><br>
                        <?php echo
                             '<a class="btn btn-default" href="register.php"> <span class="glyphicon glyphicon-circle-arrow-right"></span>Register</a>'
                            ?>
                                                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
</div>
 </div><!--row div-->