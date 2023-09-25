<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div class="reg_form">
            <div class="nav">
                <a href="/index.php">Main page</a>
                <a href=""></a>
            </div>
            <form name="auth_form" method="post">
                <label for="username">Имя</label>
                <input type="text" name="username">

                <label for="login">Логин</label>
                <input type="text" name="login">

                <label for="password">Пароль</label>
                <input type="password" name="password">

                <label for="confirm_password">Повторите пароль</label>
                <input type="password" name="confirm_password">

                <input type="submit" value="Зарегестрироваться" name="btn_reg" id="btnReg">
                <a href="#">Уже зарегестрированны? - Авторизируйтесь</a>
            </form>
        </div>
    </div>
</body>
</html>