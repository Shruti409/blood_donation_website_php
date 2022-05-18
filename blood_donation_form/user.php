<?php
 session_start();
include('include/header.php');


if(isset($_SESSION['username']))
{
    header("Location:profile.php");

}
else{
    header("Location:donate.php");
    //if user is not signed in go to register page
}

?>
