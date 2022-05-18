<?php
session_start();
session_destroy();
$_SESSION['']="";//closing the session
header("Location:login.php");

?>
