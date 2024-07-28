<?php 

session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
    $_SESSION['name']=NULL;
    $_SESSION['pass']=NULL;
     echo "<meta http-equiv='refresh' content='0;index'/>'";
}
else
{
    echo "<meta http-equiv='refresh' content='0;index'/>'";
} 

?>