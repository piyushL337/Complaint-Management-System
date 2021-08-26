<?php
/** 
 *
 *
 *
 * Created by Piyush Joshi (PiyushL337@gmail.com)
 * Package: Login & Registration System
 * Date: 25/08/2021
 *
 *
 *
 */
  session_start();
  session_destroy();
  unset($_SESSION['user']);
  header("location: login.php");
?>