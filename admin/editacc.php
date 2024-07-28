<?php include 'header.php'; ?>
<?php

        $id=$_GET['id'];
             include 'dbconfig.php';
                        $sql="SELECT * FROM `user` where `accountno`='$id'";
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
?>
<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Edit Account
        </h2>
      </div>
      <div class="box">
          
          <form class="modal-content animate" action="dbaccountup?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
   

    <div class="container">
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" value="<?php echo $name; ?>" required>
      
      <label for="psw"><b>Select Photo</b></label>
      <input type="file" placeholder="Upload Photo" name="photo" value="<?php echo $photo; ?>" required>
      
      <label for="psw"><b> Phone Number</b></label>
      <input type="number" placeholder="Enter Password" name="phone" value="<?php echo $phonenumber; ?>" required>
      
      <label for="psw"><b>Password</b></label>
      <input type="text" placeholder="Enter Password" name="pass" value="<?php echo $password; ?>" required>
      
      <label for="psw"><b>Email</b></label>
      <input type="email" placeholder="Enter Password" name="email" value="<?php echo $email; ?>" required>
      
      <label for="Address"><b>Address</b></label>
      <input type="text" placeholder="Enter Password" name="address" value="<?php echo $address; ?>" required>
      
      <label for="psw"><b>Adhar Number</b></label>
      <input type="number" placeholder="Enter Password" name="adhar" value="<?php echo $adharnumber; ?>" required>
      
       
      <button  type="submit" name="submit" class="btn-box">SUBMIT</button>
     
    </div>

   
  </form>
       
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>