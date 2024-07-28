<?php   

if(isset($_POST['submit']))
{
    session_start();
    $num=$_POST['num'];
    $password=$_POST['pass'];
    include 'dbconfig.php';
    $sql= "SELECT * FROM `user` where `accountno`='$num' and `password`='$password' and `status`='A'";
    $result=$conn->query($sql);
     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
             $_SESSION['num']=$num;
             $_SESSION['pass']=$password;
              echo '<META http-equiv="refresh" content="0;home">' ;   
         }
     }
    else
     {
                echo "<script type=\"text/javascript\">alert(\"User name password does not match\");</script>";
                echo '<META http-equiv="refresh" content="0;index">';
    }
       
 
}
 else 
{
    echo '<META http-equiv="refresh" content="0;index">';
}
?>