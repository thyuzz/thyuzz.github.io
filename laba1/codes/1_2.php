<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Введение в PHP</title>
</head>
<body>
    <?php
        $a=10;       //присвоили переменной значение 
        if($a==5){  //разрываем код PHP 
    ?>
    <p>
        Эта часть кода html-страницы будет выдана по запросу<br>
        без изменения, т.к. условие истинно.
    </p>
    <?php
        }else{      //эта часть выполнится только, если $a не равно 5
    ?>
    <p>
        А вот этот абзац не будет показан, т.к. $a==5 (равно).<br>
        Если же текст вывен, то &а всё же отличается от пяти
    </p>
    <?php
        }           //оператор if и другие будут рассмотрены позже
    ?>
</body>
</html>