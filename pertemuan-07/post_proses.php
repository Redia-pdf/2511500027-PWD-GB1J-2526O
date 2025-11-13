<?php
session_start();
  $_SESSION ["nama"] =$_POST["txtnama"];
  $_SESSION ["email"] = $_POST["txtemail"];
  $_SESSION ["pesan"] = $_POST["txtpesan"];
  echo  $_SESSION ["nama"] . $_SESSION ["email"] .   $_SESSION ["pesan"];
  #header("Location : post.php");
?>