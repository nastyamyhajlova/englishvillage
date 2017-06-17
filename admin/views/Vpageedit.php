<?php
$content=$edit_my_data->sql("SELECT * FROM pages WHERE id=$_GET[id]");
    foreach ($content as $value) {
    ?>

    <form method="post" xmlns="http://www.w3.org/1999/html">
        <input type="hidden" name="id" value="<?php echo $value["id"]; ?>">
        title <input type="text" name="title" value="<?php echo $value["title"]; ?>"><br>
        Название в меню <input type="text" name="mn" value="<?php echo $value["menu_name"]; ?>"><br>
        Текст страницы <textarea name="content"><?php echo $value["content"]; ?></textarea><br>
        <input type="submit" value="Сохранить">
    </form>
<?php
}
?>