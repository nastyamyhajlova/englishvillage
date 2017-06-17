<?php
$content=$edit_my_data->sql("SELECT * FROM pages ORDER BY id");
foreach ($content as $value){
    echo "<a href=\"?page=edit&id=".$value["id"]."\">".$value["menu_name"]."</a>&nbsp;<a href=\"index.php?page=delete&id=".$value["id"]."\">удалить</a><br>";
}
