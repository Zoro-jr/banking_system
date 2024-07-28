<?php include 'userheader.php'; ?>

<?php 
             include 'dbconfig.php';
                        $sql="SELECT * FROM `user` where `accountno`='$num' and `status`='A'";
                        $result= mysqli_query($conn,$sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $accountno=$row['accountno'];
                                $name=$row['name'];
                                $photo=$row['photo'];
                                $phonenumber=$row['phonenumber'];
                                $email=$row['email'];
                                $address=$row['address'];
                                $adharnumber=$row['adharnumber'];
                                $password=$row['password'];
                                $date=$row['date'];
                             
                            }
                        } 
                        else {   echo"<script>alert(\"Account not Existeed \")</script>";
                            echo"<meta http-equiv='refresh' content='0;transfer'>";
                        }
                        $sql1="SELECT * FROM `trsnsaction` WHERE `accountno`='$num'";
                        $result1= mysqli_query($conn,$sql1);
                        if ($result1->num_rows > 0) 
                        {
                            while($row1 = $result1->fetch_assoc()) 
                            {
                                //echo $sql;
                                $balance=$row1['balance'];
                               
                            } 
                        }  

?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
            Account Information
        </h2>
      </div>
      <div class="box">
          
 <div class="container">
     <label for="uname"><b>Name : <?php echo $name; ?></b></label><br><br>
     
      <label for="psw"><b> Phone Number : <?php echo $phonenumber; ?></b></label><br><br>
      
      <label for="psw"><b>Password : <?php echo $password; ?></b></label><br><br>
      
      <label for="psw"><b>Email : <?php echo $email; ?></b></label><br><br>
      
      <label for="Address"><b>Address : <?php echo $address; ?></b></label><br><br>
      
      <label for="psw"><b>Adhar Number : <?php echo $adharnumber; ?></b></label><br><br>
      
      <label for="psw"><b>Account created Date : <?php echo $date; ?></b></label><br><br>
      
      
      <label for="psw"><b>Balance : <?php echo $balance; ?></b></label><br><br>
      
     
    </div>

          
        <div class="detail-box">
          
         
        </div>
      </div>
    </div>
  </section>


<?php include 'footer.php'; ?>