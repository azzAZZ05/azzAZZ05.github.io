<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Сайт ноунейм школы</title>
</head>

<body>
<h1 class="sch_name">School name</h1>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Главная</a>
    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="teachlist.php">Учительский состав</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="classlist.php">Список классов</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="schedule.php">Расписание</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="journal.php">Журнал</a>
            </li>
        </ul>
        <?php if($_COOKIE['user'] == ''):?>
            <a type="button" href="authorization.php" class="btn btn-primary">Авторизация</a>
        <?php else:?>
            <a class="text-white">Здравствуйте, <?=$_COOKIE['user']?>.</a><br>
            <a type="button" class="deauth" href="exit.php">Выход</a>
        <?php endif?>
    </div>
</nav>

<?php if($_COOKIE['user'] == ''):?>
<form class="login" action="/auth.php" method="post">
    <div class="form-group">
        <label for="InputLogin">Логин</label>
        <input type="text" class="form-control" id="InputLogin" name="login">
    </div>
    <div class="form-group">
        <label for="InputPassword">Пароль</label>
        <input type="password" class="form-control" id="InputPassword" name="password">
    </div>
    <button type="submit" name="log_in" class="btn btn-primary">Войти</button>
    <a type="button" href="registration.html" name="reg" class="btn btn-primary">Регистрация</a>
</form>
<?php endif; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>