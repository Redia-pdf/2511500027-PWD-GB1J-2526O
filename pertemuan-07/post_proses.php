<?php
session_start();
  $_SESSION ["sesnama"] =$_POST["sesnama"];
  $_SESSION ["sesemail"] = $_POST["sesemail"];
  $_SESSION ["sespesan"] = $_POST["sespesan"];
  #header("Location : post.php");
?>