
<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
    
}
else
{
    echo "<meta http-equiv='refresh' content='0;logout'/>'";
}
   
      $id=$_GET['id'];  
     
       include 'dbconfig.php';
      
        $sql="UPDATE `user` SET `status`='D' WHERE `accountno`='$id';";
                if($conn ->query($sql))
                {
                    echo"<script>alert(\"Deleated sucessfully\")</script>";
                    echo"<meta http-equiv='refresh' content='0;viewaccount'>";
                 }
             
                else
                {
        
                    echo"<script>alert(\"Error Uploading data \")</script>";
                    echo"<meta http-equiv='refresh' content='0;viewaccount'>";
                }
      
    
     
   

?>


