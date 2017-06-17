<?php
// создаем новый обьект для добавления, редактирования и удаления страниц
$edit_my_data = new Ccreateedite();
?>

<div class="row">
    <?php require_once ("menu.php");//подключаем меню?>

    <div id="content" class="col-md-9">
        <?php
        // если получены данные с формы
        if($_POST){
            if($_GET['page']=="edit"){
                $edit_my_data->editdata($_POST);
            }
            if($_GET['page']=="add"){
                $edit_my_data->adddata($_POST);
            }
        }
        // если нажали на ссылки
        if($_GET['page']=="list"){
            require_once ("views/Vpagelist.php");
        }
        elseif ($_GET['page']=="add"){
            require_once ("views/Vpageadd.php");
        }
        elseif ($_GET['page']=="edit"){

            require_once ("views/Vpageedit.php");
        }
        elseif ($_GET['page']=="delete"){

            $edit_my_data->deletedata($_GET['id']);
        }


        ?>
    </div>
</div>
