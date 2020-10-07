<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
<div>
    <img class="pic" src="schoolpic.jpg" width="1180" height="393">
</div>
<div class="card border-dark fixed-bottom">
    <div class="card-body">
        <h5 class="card-title">Контактная информация:</h5>
        <p>Номер: 8 800 555 35 35<br>
            Адрес: ул.Пушкина дом колотушкина</p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>