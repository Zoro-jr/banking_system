<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
    
}
else
{
    echo "<meta http-equiv='refresh' content='0;index'/>'";
}
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $pass=$_POST['pass'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $adhar=$_POST['adhar'];
      $address=$_POST['address'];
       $date1 = date("d-m-Y");
       $date = date("dmY");
     $time= date("h.i.s");
       include 'dbconfig.php';
       $id=0;
       $sql="SELECT * FROM `user`";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                 while($row=$result->fetch_assoc())
                 {
                     $id=$row['phonenumber'];
                 }
            }
        $id++;
        $pic = $_FILES['photo']['name'];
	$pic_loc = $_FILES['photo']['tmp_name'];
	$info = pathinfo($_FILES['photo']['name']);
	$ext = $info['extension'];
	$newname = "pho$date$time$id.$ext";
	$folder="photos/";
	$target=$folder.$newname;
        echo $target;
       // echo "INSERT INTO `user` (`accountno`,`name`, `photo`, `phonenumber`, `email`, `address`, `adharnumber`, `password`, `date`,`status`) VALUES ('','$name', '$target', '$phone', '$email', '$address', '$adhar', '$pass', '$date1','A');";   
	if( move_uploaded_file($pic_loc,$target))
	{
            
              $sql="INSERT INTO `user` (`accountno`,`name`, `photo`, `phonenumber`, `email`, `address`, `adharnumber`, `password`, `date`,`status`) VALUES ('','$name', '$target', '$phone', '$email', '$address', '$adhar', '$pass', '$date1','A');";
                if($conn ->query($sql))
                {
                    
                    echo"<meta http-equiv='refresh' content='0;addamount?phone=$phone'>";
                 }
             
                else
                {
        
                    echo"<script>alert(\"Error Uploading data 2\")</script>";
                    echo"<meta http-equiv='refresh' content='10;registrationform'>";
                }
        }
        else
            {
        
            echo"<script>alert(\"Error Uploading data\")</script>";
             echo"<meta http-equiv='refresh' content='10;registrationform'>";
            }
      }
    
     
    else
    {
        header("location:internshipform");
    }

?>


