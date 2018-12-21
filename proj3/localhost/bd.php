<?php
/* идет соединение с базой данных локалхост -- это имя хоста или айпи сервера;
рут -- это под чьим именем заходишь; где пустые кавычти -- там пишется пароль если он есть;
дальше идет название самой базы данных*/

include 'link.php';
		
/* иссет проверяет наличие поля для запили или как-то так*/
	if (isset($_POST['filial']) && isset($_POST['nazvanie']) && isset($_POST['rod_podraz'])
	&& isset($_POST['podraz_vis_yr'])&& isset($_POST['chislo_sotrdn'])) { 

		$filial = $_POST['filial'];
		$nazvanie = $_POST['nazvanie'];
		$rod_podraz = $_POST['rod_podraz'];
		$podraz_vis_yr = $_POST['podraz_vis_yr'];
		$chislo_sotrdn = $_POST['chislo_sotrdn'];

		$filial = htmlspecialchars($filial);
		$nazvanie = htmlspecialchars($nazvanie);
		$rod_podraz = htmlspecialchars($rod_podraz);
		$podraz_vis_yr = htmlspecialchars($podraz_vis_yr);
		$chislo_sotrdn = htmlspecialchars($chislo_sotrdn);

		$filial = urldecode($filial);
		$nazvanie = urldecode($nazvanie);
		$rod_podraz = urldecode($rod_podraz);
		$podraz_vis_yr = urldecode($podraz_vis_yr);
		$chislo_sotrdn = urldecode($chislo_sotrdn);

		$filial = trim($filial);
		$nazvanie = trim($nazvanie);
		$rod_podraz = trim($rod_podraz);
		$podraz_vis_yr = trim($podraz_vis_yr);
		$chislo_sotrdn = trim($chislo_sotrdn);
		
		$db_table_podrazdelenie = "podrazdelenie"; /*название таблицы*/
		
		$result = $link->query("INSERT INTO ".$db_table_podrazdelenie." (filial, nazvanie, rod_podraz, podraz_vis_yr, chislo_sotrdn) 
		VALUES ('$filial', '$nazvanie', '$rod_podraz', '$podraz_vis_yr', '$chislo_sotrdn')");
		if ($result == true){
			echo "Информация занесена в базу данных";
		}else{
			echo "Информация не занесена в базу данных";}
	}


	if (isset($_POST['tip']) && isset($_POST['model']) && isset($_POST['god_priob'])
	&& isset($_POST['terr'])&& isset($_POST['korpus'])  && isset($_POST['komnata'])
	&& isset($_POST['chislo_sot_v_kom'])) {
		
		$tip = $_POST['tip'];
		$model = $_POST['model'];
		$god_priob = $_POST['god_priob'];
		$terr = $_POST['terr'];
		$korpus = $_POST['korpus'];
		$komnata = $_POST['komnata'];
		$chislo_sot_v_kom = $_POST['chislo_sot_v_kom'];

		$tip = htmlspecialchars($tip);
		$model = htmlspecialchars($model);
		$god_priob = htmlspecialchars($god_priob);
		$terr = htmlspecialchars($terr);
		$korpus = htmlspecialchars($korpus);
		$komnata = htmlspecialchars($komnata);
		$chislo_sot_v_kom = htmlspecialchars($chislo_sot_v_kom);

		$tip = urldecode($tip);
		$model = urldecode($model);
		$god_priob = urldecode($god_priob);
		$terr = urldecode($terr);
		$korpus = urldecode($korpus);
		$komnata = urldecode($komnata);
		$chislo_sot_v_kom = urldecode($chislo_sot_v_kom);

		$tip = trim($tip);
		$model = trim($model);
		$god_priob = trim($god_priob);
		$terr = trim($terr);
		$korpus = trim($korpus);
		$komnata = trim($komnata);
		$chislo_sot_v_kom = trim($chislo_sot_v_kom);

		
		$db_table_ustroistva = "ustroistva";
		
		$result = $link->query("INSERT INTO ".$db_table_ustroistva." (tip, model, god_priob,
		terr, korpus, komnata, chislo_sot_v_kom) 
		VALUES ('$tip', '$model', '$god_priob', '$terr', '$korpus', '$komnata', '$chislo_sot_v_kom')");
		if ($result == true){
			echo "Информация занесена в базу данных";
		}else{
			echo "Информация не занесена в базу данных";}
		 
	} 

require_once("analize.html");
mysqli_close($link);
?>