<?php
$m_1=[2,4,76];            //Не указываем ключи вообще 
 
echo $m_1[0]." ".$m_1[2]; //Выведет '2 76'
//echo $m_1[3];           //Сообщит об ошибке, т.к. в массиве присутствует
                          //только три элемента с ключами 0, 1 и 2
 
              
$m_2=["имя"=>"Вася",8.56,100]; //Указали ключ первого элемента, а для второго
         //и третьего элементов интерпретатор автоматически установит числовые
         //ключи, равные 0 (т.к. других числовых ключей в массиве пока нет)
         //и 1 (на единицу больше, чем 0)
echo $m_2["имя"]." ".$m_2[0]." ".$m_2[1]; //Выведет строку 'Вася 8.56 100'          
 
 
$m_3=[2=>"php",' ',"версия"=>'7.0.0']; //Указали числовой ключ первого элемента, 
         //а для второго элемента (строка состоящая из пробела) интерпретатор 
         //автоматически установит числовой ключ, равный 3 (2+1) 
 
echo $m_3[2].$m_3[3].$m_3["версия"];   //Выведет строку 'php 7.0.0'  
//echo $m_3[1]; //Сообщит об ошибке, т.к. нумерация в массиве начинается с 2
 
 
$m_4=[3,5=>"orange",5=>"apple",33];    //Указали одинаковые ключи, поэтому 
         //доступно будет только последнее значение, т.е. "apple", кроме того, 
         //числовой индекс последнего элемента будет равен 6 (5+1) 
 
echo $m_4[0]." ".$m_4[5]." ".$m_4[6];  //Выведет строку '3 apple 33' 
//echo $m_4[1]; //Сообщит об ошибке, т.к. элемента с таким ключем в массиве нет
 
/* Не забываем, что при конкатенации со строкой значения любого типа 
будут также преобразованы в строку!!! */
?>