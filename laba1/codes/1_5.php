<meta charset="utf-8">  

<?php 

$c = 5;                //Инициализировали переменную (присвоили значение)
    echo "Значение переменной с равно ", $c, ".<br>";
    
$b=$c;
       
    echo "Значение переменной b равно ", $b, ".<br>";//Присвоили переменной $b переменную $c, теперь $b==$c==5 
 
$b='new';            //Изменили значение переменной $b, при этом 
echo 'c = '.$c.'<br>'; //значение переменной $c не изменилось ($c==5) 

    echo "Значение переменной b равно ", $b, ".<br>";
 
$b=$c;               //Опять присвоили переменной $b переменную $c, теперь $b==5 
 
$c='sos';            //Изменили значение переменной $c, при этом 
echo 'b = '.$b.', ', 'c = ', $c,'.'; //значение переменной $b не изменилось ($b==5) 
?>