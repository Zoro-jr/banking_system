<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
    
}
else
{
    echo "<meta http-equiv='refresh' content='0;index'/>'";
}
$phone=$_GET['phone'];
include 'dbconfig.php';
$date=  date("d-m-Y");
                        $sql="SELECT * FROM `user` where `phonenumber`='$phone'";
                        $result= mysqli_query($conn,$sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                $accountno=$row['accountno'];
                                 $sql="INSERT INTO `trsnsaction`(`id`, `accountno`, `date`, `particulars`, `withdra`, `deposit`, `balance`) VALUES ('','$accountno','$date','Account opening balance amount','','250','250')";
                                if($conn ->query($sql))
                                {
                    
                                    echo"<script>alert(\"Submited sucessfully\")</script>";
                                     echo"<meta http-equiv='refresh' content='0;viewaccount'>";
                                }
             
                            else
                            {
        
                                    echo"<script>alert(\"Error Uploading data 2\")</script>";
                                    echo"<meta http-equiv='refresh' content='10;registrationform'>";
                            }
                            }
                        }  