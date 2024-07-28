<?php   

if(isset($_POST['submit']))
{
    session_start();
    $name=$_POST['name'];
    $password=$_POST['pass'];
    include 'dbconfig.php';
    $sql= "SELECT * FROM `admin` where `name`='$name' and `password`='$password'";
    $result=$conn->query($sql);
     if($result->num_rows>0)
     {
         while($row=$result->fetch_assoc())
         {
             $_SESSION['name']=$name;
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