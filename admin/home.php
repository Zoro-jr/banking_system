<?php include 'header.php'; ?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Bank Information
        </h2>
      </div>
      <div class="box">
          
 <div class="container">
     <?php
        $slno=0;
             include 'dbconfig.php';
                        $sql="SELECT * FROM `user` where `status`='A'";
                        $result= mysqli_query($conn,$sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                
                                $slno++;
                              
                            }
                        }  
            
       ?>
     <label for="uname"><b>Number of account : <?php echo $slno; ?></b></label><br><br>
      <?php
             include 'dbconfig.php';
             $amount=0;
                        $sql="SELECT * FROM `user` where `status`='A'";
                        $result= mysqli_query($conn,$sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $accountno=$row['accountno'];
                                //echo $accountno;
                                $sql2="SELECT * FROM `trsnsaction` WHERE `accountno`='$accountno'";
                                $result2= mysqli_query($conn,$sql2);
                                if ($result2->num_rows > 0) 
                                {
                                    while($row2 = $result2->fetch_assoc()) 
                                    {
                                        $balance=$row2['balance'];
                                        //echo $balance;
                                    }
                                    $amount=$amount+$balance;
                                }
                            }
                        }  
//                       
            
       ?>
   
                         <label for="uname"><b>Total Amount in bank : <?php echo $amount; ?></b></label><br><br>
    </div>

          
        <div class="detail-box">
          
         
        </div>
      </div>
    </div>
  </section>


<?php include 'footer.php'; ?>