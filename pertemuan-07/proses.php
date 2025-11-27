<?php
session_start();
  $_SESSION ["nama"] =$_POST["txtnama"];
  $_SESSION ["email"] = $_POST["txtemail"];
  $_SESSION ["pesan"] = $_POST["txtpesan"];
  header("Location : index.php");
?>