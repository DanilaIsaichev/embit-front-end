<?php
if (isset($_POST['account_type'])) {$account_type = $_POST['account_type'];}
if (isset($_POST['login'])) {$login = $_POST['login'];}
if (isset($_POST['password'])) {$password = $_POST['password'];}
echo "<div> <p>Тип: ", $account_type, "</p><p>Логин: ", $login, "</p><p>Пароль: ", $password, "</p></div>";
?>