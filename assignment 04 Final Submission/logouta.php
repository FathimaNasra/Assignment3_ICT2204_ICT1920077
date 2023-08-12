<?php





$db=new mysqli("localhost","root","","event_m_s");

if(!$db){

echo "failed";
}


session_start();

unset($_SESSION['emaill']);
unset($_SESSION['pswl']);
session_destroy();

echo "<script>window.open('1.php','_self');</script>";


?>