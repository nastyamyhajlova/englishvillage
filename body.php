<?php
require_once("kostu.php");
if(!$_GET['id']){
    $id = 17;
}
else{
    $id = $_GET['id'];
}

$pages=$mydbconnect->sql("SELECT * FROM pages WHERE id= $id ORDER BY id");
?>

<div class="row">

    <?php require_once ("menu.php");?>

    <div id="content" class="col-md-9">
        <?php
		$today = new TodayDate(); // выводит дату
        if($_GET['page']=="game"){
            echo "<h1>Игра в кости</h1>";
            kostu();
        }
        else{
            foreach ($pages as $value){
                echo $value['content'];
            }
        }

        ?>
    </div>
</div>
