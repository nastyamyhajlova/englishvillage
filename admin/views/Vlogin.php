<?php
ob_start();
if (!isset($_POST['login']) || !isset($_POST['password']) )
{?>

        <form method="post">
            <h3>Авторизация доступа<br /></h3>
            <h2>Вход в систему управления сайтом.</h2>

                Логин:
                <input type="text" name="login"/>

                Пароль:
                <input name="password" type="password" />


            <input type="submit" value="Войти" />

        </form>
    <?php
}
else
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (empty($login) || empty($password))
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $check_authorisation = new Clogin();

    $login = $check_authorisation->clean_login($login);
    $password = $check_authorisation->clean_password($password);

    $result = $check_authorisation->return_authorisation($login);

    $myrow = mysqli_fetch_array($result);


    if ($myrow['password']==$password && $myrow['login']==$login)
    {
        $_SESSION['login']=$login;
        $_SESSION['password']=$password;

        header('Refresh: 0; URL=index.php?page=list');
    }
    else
    {
        echo "<center><h4>Ошибка авторизации!</h4><br><a href='index.php'>Назад</a></center>";
        exit;
    }


}
?>