<?php include 'header.php'; ?>

<?php 
$name1=$_POST['name'];
$num1=$_POST['num'];
$num=$_POST['num1'];
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
                            echo"<meta http-equiv='refresh' content='0;transfer1'>";
                        }

?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Transaction
        </h2>
      </div>
      <div class="box">
          
  <form class="modal-content animate" action="dbtransfer" method="post">
   
    <div class="container">
      
      <label for="uname"><b>Receiver Account Number</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $num1; ?>" name="num" readonly>
      
      <label for="uname"><b>Receiver Name</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $name1; ?>" name="name" readonly>
      
        
      <label for="uname"><b>Receiver Account Number</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $accountno; ?>" name="num1" readonly>
      
      <label for="uname"><b>Receiver Name</b></label>
      <input type="text" placeholder="Enter Account Number" value="<?php echo $name; ?>" name="name1" readonly>
      
      <label for="uname"><b> Amount</b></label>
      <input type="number" placeholder="Enter Amount" name="amount" required>
      
      <label for="uname" ><b>Select Transaction type</b></label>
      <select  name="type">
        <option value="wire_transfer">Wire Transfer</option>
        <option value="online_banking">Online Banking</option>
        <option value="ach_transfer">ACH Transfer</option>
        <option value="cashier_check">Cashier's Check</option>
        <option value="personal_check">Personal Check</option>
        <option value="peer_to_peer">Peer-to-Peer Payment</option>
        <option value="international_transfer">International Transfer</option>
    </select>


      <button  type="submit" name="submit" class="btn-box">Next</button>
     
    </div>

   
  </form>
          
        <div class="detail-box">
          
         
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>