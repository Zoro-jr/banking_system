<?php include 'header.php'; ?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Accounts
        </h2>
      </div>
      <div class="box">
      
          <table id="customers" >
   <tr>
    <th>SI No</th>
    <th>Photo</th>
    <th>Name</th>
    <th>Account Number</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Adhar Number</th>
    <th>Password</th>
    <th>Created Date</th>
    <th colspan="3">Action</th>
 </tr>
   <?php
        $slno=0;
             include 'dbconfig.php';
                        $sql="SELECT * FROM `user` where `status`='A'";
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
                                $slno++;
                                echo "<tr><td >$slno</td><td><image src='$photo' width='100' height='100'></td><td >$name</td><td>$accountno</td><td>$phonenumber</td><td>$email</td><td>$address</td><td>$adharnumber</td><td>$password</td><td>$date</td><td><button>
                
              <a style='text-decoration: none;color: white;' href='editacc?id=$accountno'>Edit</a></button></td><td><button><a style='text-decoration: none;color: white;' href='delacc?id=$accountno'>Delete</a></button></td><td><button><a style='text-decoration: none;color: white;' href='transation?id=$accountno'>Transation</a></button></td></tr>";
                             
                            }
                        }  
            
       ?>
            </table>
          
        <div class="detail-box">
          
         
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php';  ?>