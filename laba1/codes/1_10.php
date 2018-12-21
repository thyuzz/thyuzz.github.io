<meta charset="utf-8">  


<?php 
   function m_func(){            
      $sum='local_var -- это переменная функции';  //Создали локальную переменную
      echo 'после выполнения функци ', $sum,'<br>';  //При вызове функции выведет 'local_var' 
   }  
   $sum='global_var';    //Создали глобальную переменную
    
   echo $sum.'<br>';     //Выведет 'global_var'
   m_func();             //Выведет 'local_var'  
?>