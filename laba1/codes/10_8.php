<?php
   //Предполагается, что файл был успешно загружен
   $userFile = $_FILES['userFile']['name'];
   echo 'Имя вашего файла: '.$userFile.'<br>';
 
   $userFileType = $_FILES['userFile']['type'];
   echo 'Тип вашего файла: '.$userFileType.'<br>';
    
   $userFileSize = $_FILES['userFile']['size'];
   echo 'Размер вашего файла: '.$userFileSize.' байт'.'<br>';
    
   $userFileTmp = $_FILES['userFile']['tmp_name'];
   echo 'Временное имя файла на сервере: '.$userFileTmp.'<br>';
    
   $userFileError = $_FILES['userFile']['error'];
   echo 'Код ошибки: '.$userFileError.'<br>';
?>