<?php
class Mcreateedite extends Db
{
    // редактируем страницу
    protected function edit($data){
        $sql='UPDATE pages SET title=\''.$data['title'].'\',menu_name=\''.$data['mn'].'\',content=\''.$data['content'].'\' WHERE id='.$data['id'];
        if($this->sql($sql)){
            echo "Страница была успешно отредактирована<br>";
            echo "<a href=\"index.php?page=list\">Список страниц</a>";
            die();
        }

    }

    // добавляем страницу
    protected function add($data){

        $sql="INSERT INTO pages (";
        foreach ($data as $k=>$v){
            $sql .=$k.",";
        }
        $sql = substr($sql,0,-1);
        $sql .= ") VALUES(";
        foreach ($data as $v){
            $sql .="\"".$v."\",";
        }
        $sql = substr($sql,0,-1);
        $sql .= ")";
        if($this->sql($sql)){
            echo "Страница была успешно добавлена<br>";
            echo "<a href=\"index.php?page=add\">Добавить еще</a>";
            die();
        }
    }

    // удалим страницу
    protected function deletepage($id){
        $sql="DELETE  FROM pages WHERE id=$id";
        if($this->sql($sql)){
            echo "Страница была успешно удалена<br>";
            echo "<a href=\"index.php?page=list\">Список страниц</a>";
            die();
        }
    }
}