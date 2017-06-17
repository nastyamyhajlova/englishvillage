<?php

class Ccreateedite extends Mcreateedite
{
    // редактируем страницу
    public function editdata($data){
        $this->edit($data);
    }

    // добавить страницу
    public function adddata($data){
        $this->add($data);
    }

    // удалить страницу
    public function deletedata($id){
        $this->deletepage($id);
    }
}