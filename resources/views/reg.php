<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/styles/img/favicon.ico">
    <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/css/signin.css">

    <title>Стартовая страница</title>

</head>
<body class="text-center">
<div class="form-signin">
    <form class="form-signin" action="reg" method="post">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72"
             height="72">
        <h1 class="h3 mb-3 font-weight-normal">Микро регистрация</h1>
        <h1 class="h3 mb-3 font-weight-normal">Зарегестрируйтесь</h1>
        <label for="text" class="sr-only">Введите имя</label>
        <input type="text" class="form-control" placeholder="Имя пользователя" name="name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" placeholder="Пароль" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегестрировать</button>
    </form>
    <a href="/">
        <button class="btn btn-lg btn-block">Стартовая страница</button>
    </a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</div>
</body>
</html>
