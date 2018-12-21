<meta charset="utf-8"> 

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">  
   <title>Отправка данных в массивах</title>
</head>
<body>
   
   <table style = 'color:red'>
   <form action="10_4.php" method="POST" name="form_10_3"> 
      <tr>
		<td> Введите имя  &nbsp; </td>
		<td><input type="text" name="personal[firstName]"><br><br></td>
	  </tr>
	  
	  <tr>
		<td>Введите фамилию  &nbsp; </td>
		<td><input type="text" name="personal[lastName]"><br><br></td>
	  </tr>
	  
	  <tr>
		<td>Предпочитаете &nbsp; 
		<input type="checkbox" name="choice[]" value="овощи">овощи
		<input type="checkbox" name="choice[]" value="фрукты">фрукты<br><br>
		<button type="submit" name="submit" value="send">Отправить</button></td>
	  </tr>
	  
	  
   </form>
   </table>
   
</body>
</html>