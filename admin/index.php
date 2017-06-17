<?php
session_start();

require_once ("header.php");
if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
    require_once ("views/Vlogin.php");
}
else{
    require_once ("body.php");
    require_once ("footer.php");
}
