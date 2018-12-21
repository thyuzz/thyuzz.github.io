<meta charset="utf-8"> 


<?php
 //Чтобы не усложнять пример, будем считать, что все данные были введены 
 //Достаем полученные данные из суперглобального массива $_POST
 //и присваиваем их переменным для удобства использования
 $firstName = $_POST["firstName"];
 $lastName = $_POST["lastName"];
 $user_choice = $_POST["user_choice"];
   
 //Выводим сообщение
 echo $firstName.' '.$lastName.' любит '.$user_choice;
?> 