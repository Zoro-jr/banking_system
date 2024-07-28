<?php include 'header.php'; ?>

<?php 
$num=$_POST['num'];
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
                            echo"<meta http-equiv='refresh' content='0;deposit'>";
                        }

?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Deposit
        </h2>
      </div>
      <div class="box">
          
  <form class="modal-content animate" action="dbdeposit" method="post">
   
    <div class="container">
      
      <label for="uname"><b> Account Number</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $accountno; ?>" name="num" readonly>
      
      <label for="uname"><b> Name</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $name; ?>" name="name" readonly>
      
      <label for="uname"><b> Amount</b></label>
      <input type="number" placeholder="Enter Amount" name="amount" required>


      <button  type="submit" name="submit" class="btn-box">Deposit</button>
     
    </div>

   
  </form>
          
        <div class="detail-box">
          
         
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>