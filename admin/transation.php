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
                                
                                $name=$row['name'];
                                $photo=$row['photo'];
                                $phonenumber=$row['phonenumber'];
                           
                             
                            }
                        } 
?>
<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Transaction details of <?php echo $name; ?>
        </h2>
      </div>
      <div class="box" >
      
          <table id="customers" >
   <tr>
    <th>SI No</th>
    <th>Date</th>
    <th>Particulars</th>
    <th>Deposit</th>
    <th>Withdra</th>
    <th>Balance</th>
 </tr>
   <?php
        $slno=0;
             include 'dbconfig.php';
                        $sql="SELECT * FROM `trsnsaction` WHERE `accountno`='$id'";
                        $result= mysqli_query($conn,$sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $particulars=$row['particulars'];
                                $withdra=$row['withdra'];
                                $deposit=$row['deposit'];
                                $balance=$row['balance'];
                                $date=$row['date'];
                                $slno++;
                                echo "<tr><td >$slno</td><td >$date</td><td>$particulars</td><td>$deposit</td><td>$withdra</td><td>$balance</td></tr>";
                
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