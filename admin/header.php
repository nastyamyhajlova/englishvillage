<?php
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}
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
<div class="row">
    <div id="logo" class="col-md-12">
        <h1>Панель администрирования сайта</h1>
</div>
</div>