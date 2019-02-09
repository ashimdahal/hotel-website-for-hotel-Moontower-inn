<?php 

session_start();
if(isset($_SESSION['adm_un'])){
$savedsession = $_SESSION['adm_un'];
}elseif (isset($_COOKIE['adm_un'])){
$savedsession = $_COOKIE['adm_un'];
}else{
header('Location:index.php');
}
?>