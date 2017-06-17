<?php
//ini_set('display_errors', '0');
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}

$mydbconnect=new Db();
?>
<!DOCTYPE html">
<html lang="ru">

<head>
    <meta charset="utf-8">

<title>Главная</title>

<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>
<div id="main" class="row">
    <div id="logo" class="col-md-12">
        <h1 class="logo">"ЛЕТНИЙ ЛАГЕРЬ "ENGLISH VILLAGE"</h1>
    </div>
</div>