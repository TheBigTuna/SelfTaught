<?php
 include("../resources/connection.php"); 
 session_start();

 session_unset();

 header('Location: ' . $_SERVER['HTTP_REFERER']);
 ?>