<meta charset="utf-8">  

<?php 
   function m_func(){   //Объявили новую пользовательскую функцию m_func(),            
      $sum='local_var'; //которая просто инициализирует локальную переменную 
 
      /* Переменные, которые создаются внутри фигурных скобок функции, 
      относятся к локальной области видимости */
 
      echo $sum.'<br>';       //При вызове функции выведет 'local_var' 
   }             //После закрывающей скобки началась глобальная область видимости
    
   //echo $sum.'<br>';//Выведет ошибку, т.к. обращение к переменной идет из глобальной 
                 //области видимости, а здесь такой переменной не существует 
   m_func();     //Вызываем функцию, которая выведет 'local_var'  
             
    
   $sum_2='global_var';       //Создали глобальную переменную
 
   /* Переменные, которые создаются вне фигурных скобок функции, т.е. в коде 
   верхнего уровня, относятся к глобальной области видимости */
 
   echo $sum_2.'<br>';        //Выведет 'global_var' 
 
   function m_func_2(){          //Объявили новую пользовательскую функцию m_func()_2,            
      echo $sum_2.'<br>';     //которая пытается вывести значение глобальной переменной 
   } 
   
   m_func_2(); //Вызываем функцию и получаем ошибку, т.к. функция обращается 
                 //к глобальной переменной внутри себя, т.е. в локальной области
                 //видимости, где переменная не определена
?>