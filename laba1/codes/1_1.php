<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Первый php-скрипт</title>
</head>
<body>
    <?php
        /* Оператор echo выводит строки, перечисляемые через запятую, 
        в код html-документа */
        echo 'Эта строка будет сперва обработана интерпретатором PHP <br>
               и только потом отдана по запросу серверу для дальнейшей <br>
                отправки браузеру клиента.';
    ?>
     
    <p>
        А эта строка не будет обработана PHP, <br>
        т.к. она находится вне тегов &#60;?php и &#62;. Она будет <br>
        отдана по запросу серверу, а затем и браузеру клиента без <br>
        обработки в первоначальном виде.
    </p>
</body>
</html>