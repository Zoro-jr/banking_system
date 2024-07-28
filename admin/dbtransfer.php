
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
      $num1=$_POST['num1'];  
      $name1=$_POST['name1'];
      $amount=$_POST['amount'];
      $type=$_POST['type'];
      $date=date("d-m-Y");
      $balance=0;
      $balance1=0;
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
            echo $balance;
            $balance=$balance-$amount; 
            echo $balance;
            $sql="SELECT * FROM `trsnsaction` where `accountno`='$num1'";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                 while($row=$result->fetch_assoc())
                 {
                     $balance1=$row['balance'];
                 }
            }
            $balance1=$balance1+$amount;
      
        $sql="INSERT INTO `trsnsaction`(`id`, `accountno`, `date`, `particulars`, `withdra`, `deposit`, `balance`) VALUES ('','$num','$date','Amount Transfered to account $name1 ( $num1 ) through $type ','$amount','','$balance')";
                if($conn ->query($sql))
                {
                     $sql1="INSERT INTO `trsnsaction`(`id`, `accountno`, `date`, `particulars`, `withdra`, `deposit`, `balance`) VALUES ('','$num1','$date','Amount Transfered from account  $name ( $num ) through $type  ','','$amount','$balance1')";
                    if($conn ->query($sql1))
                    {
                        echo"<script>alert(\"Amount Transferd from $num ($name) to $num1 ($name1)\")</script>";
                        echo"<meta http-equiv='refresh' content='0;Transfer'>";
                    }
                 }
             
                else
                {
        
                    echo"<script>alert(\"Error Uploading data \")</script>";
                    echo"<meta http-equiv='refresh' content='0;Transfer'>";
                }
        
      }
    
     
    else
    {
        header("location:logout");
    }

?>


