<?php 

session_start();
if(isset($_SESSION['num']) && isset($_SESSION['pass']))
{
    $_SESSION['num']=NULL;
    $_SESSION['pass']=NULL;
     echo "<meta http-equiv='refresh' content='0;index'/>'";
}
else
{
    echo "<meta http-equiv='refresh' content='0;index'/>'";
} 

?>