<meta charset="utf-8">  

<?php
   //Будем считать, что как минимум один файл был загружен
   //Выводим информацию о первом из загруженных файлов
   $userFile = $_FILES['userFile']['name'][0];
   echo 'Имя вашего файла: '.$userFile.'<br>';
 
   $userFileType = $_FILES['userFile']['type'][0];
   echo 'Тип вашего файла: '.$userFileType.'<br>';
    
   $userFileSize = $_FILES['userFile']['size'][0];
   echo 'Размер вашего файла: '.$userFileSize.' байт'.'<br>';
    
   $userFileTmp = $_FILES['userFile']['tmp_name'][0];
   echo 'Временное имя файла на сервере: '.$userFileTmp.'<br>';
    
   $userFileError = $_FILES['userFile']['error'][0];
   echo 'Код ошибки: '.$userFileError.'<br>';
?>