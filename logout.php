<?php
session_start();
unset($_SESSION["fastoSession"]);
session_destroy();
header("Location:index.php");
?>