<?php
class CLogin extends Db
{
    function clean_login($login)
    {
        $l = stripslashes($login);
        $l = htmlspecialchars($l);

        $l = trim($l);

        return $l;
    }

    function clean_password($password)
    {
        $p = stripslashes($password);
        $p = htmlspecialchars($p);

        $p = trim($p);

        $salt1="a153bd";
        $salt2="b3p6ft";
        $p = md5(md5($salt1).md5($p).md5($salt2));
        $p = strrev($p);

        return $p;
    }

    function return_authorisation($login)
    {
        $sql = "SELECT * FROM users WHERE login='$login'";
        $res = $this->sql($sql);
        return $res;
    }
}
?>