<?php
session_start();
  $_SESSION ["sesnama"] = $sesnama;
  $_SESSION ["sesemail"] = $sesemail;
  $_SESSION ["sespesan"] = $sespesan;
  header("Location : index.php");
?>