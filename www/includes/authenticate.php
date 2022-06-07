<?php
ob_start();
if(!isset($_SESSION['admin_id']) && !isset($_SESSION['name'])){
  header("location:login.php?message=Please admin login");
}
?>
