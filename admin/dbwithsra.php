
<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
    
}
else
{
    echo "<meta http-equiv='refresh' content='0;logout'/>'";
}
    if(isset($_POST['submit']))
    {
      $num=$_POST['num'];  
      $name=$_POST['name'];
      $amount=$_POST['amount'];
      $date=  date("d-m-Y");
      $balance=0;
       include 'dbconfig.php';
       $sql="SELECT * FROM `trsnsaction` where `accountno`='$num'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                 while($row=$result->fetch_assoc())
                 {
                     $balance=$row['balance'];
                 }
            }
            $balance=$balance-$amount; 
      
        $sql="INSERT INTO `trsnsaction`(`id`, `accountno`, `date`, `particulars`, `withdra`, `deposit`, `balance`) VALUES ('','$num','$date','Amount withdraw in bank','$amount','','$balance')";
                if($conn ->query($sql))
                {
                    echo"<script>alert(\"Amount Withdrawed sucessfully\")</script>";
                    echo"<meta http-equiv='refresh' content='0;withdra'>";
                 }
             
                else
                {
        
                    echo"<script>alert(\"Error Uploading data \")</script>";
                    echo"<meta http-equiv='refresh' content='0;withdra'>";
                }
        
      }
    
     
    else
    {
        header("location:logout");
    }

?>


