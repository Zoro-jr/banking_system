
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
      $id1=$_GET['id'];  
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $pass=$_POST['pass'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $adhar=$_POST['adhar'];
      $address=$_POST['address'];
      $date = date("dmY");
     $time= date("h.i.s");//echo $time;
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
        echo " <br> "; 
        echo "UPDATE `user` SET `name`='$name',`photo`='$target',`phonenumber`='$phone',`email`='$email',`address`='$address',`adharnumber`='$adhar',`password`='$pass' WHERE `accountno`='$id1';";
                    
	if( move_uploaded_file($pic_loc,$target))
	{
             $sql1="UPDATE `user` SET `name`='$name',`photo`='$target',`phonenumber`='$phone',`email`='$email',`address`='$address',`adharnumber`='$adhar',`password`='$pass' WHERE `accountno`='$id1';";
                if($conn ->query($sql1))
                {
                    echo"<script>alert(\"Updated sucessfully\")</script>";
                    echo"<meta http-equiv='refresh' content='0;viewaccount'>";
                 }
             
                else
                {
        
                    echo"<script>alert(\"Error Uploading data \")</script>";
                    echo"<meta http-equiv='refresh' content='0;viewaccount'>";
                }
        
      }
        else
            {
        
            echo"<script>alert(\"Error Uploading data\")</script>";
             echo"<meta http-equiv='refresh' content='10;viewaccount'>";
            }
      }
    
     
    else
    {
        header("location:logout");
    }

?>


