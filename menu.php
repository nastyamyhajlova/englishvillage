<?php
$menu=$mydbconnect->sql("SELECT * FROM pages");
?>

<div id="menu" class="col-md-2">
        <?php
        foreach ($menu as $value){
            echo "<a href=\"index.php?id=".$value['id']."\">".$value['menu_name']."</a>";
        }
        ?>
        <a href="index.php?page=game">Игра в кости</a>
</div>