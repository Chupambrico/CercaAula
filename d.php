<?php
$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); //sample host 
$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$db_name = 'fw42'; //this is the database I created in PhpMyAdmin

$conn = new mysqli($db_host, $db_user, $db_pass,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('Europe/Rome');

$iniz=strtotime('last monday', strtotime('tomorrow'));;
$fin=strtotime('next monday', strtotime('today'));;

$sql="TRUNCATE TABLE orario";
$conn->query($sql);

$arrary= array(10116,10232,10168,10493,10126,10128,10129,10136,10176,10178,10179,10185,10186,10187,10113,10169,10127,10130,10149,10150,10437,10175,10114,10133,10134,
10153,10117,10131,10151,10152,10155,10156,10157,10158,10438,10159,10164,10165,10166,10167,10233,10115,10170,10112,10123,10124,10507,10137,10138,10139,10140,10234,
10235,10055,10177);
foreach($arrary as $corso){
	$homepage = file_get_contents('http://webapps.unitn.it/Orari/it/Web/AjaxEventi/c/'.$corso.'-/agendaWeek?_=1417633155537&start='.$iniz.'&end='.$fin);
	$json=json_decode($homepage);
	foreach($json->Eventi as $x){
		$url=substr($x->url,1);
		$detail = file_get_contents('http://webapps.unitn.it/Orari/it/Web/DettaglioImpegno/'.$url);
		
		$strin=$detail;
		$str2=trim($strin);
		$str2=str_replace("//$(document).ready(function () {","",$str2);
		$str2=str_replace("$('.dettaglio').usertip();","",$str2);
		$str2=str_replace("//});","",$str2);
		//Ora	
		$orain=$x->start;
		$orafin=$x->end;
		//------
		//Aula
		$text=explode('Aula/e:',$str2);
		$pos12=count($text)-1;
		$arr=str_split($text[$pos12]);
		$strlen2 = count($arr);
		$text2=explode('</p>',$text[$pos12]);
		
		$pos = strpos($text2[0],"p>");

		if ($pos === false) {
			$tmp=preg_split("/[\()]+/",$text2[0]);
			for($i=0;$i<count($tmp);$i++){  
				if(($tmp[$i]==" ") and (count($tmp)>($i+1))){
					unset($tmp[$i]);
					unset($tmp[$i-1]);
				}
			}
			$tmp = array_merge(array(),$tmp);
			for($i=-1;$i<count($tmp)-2;$i++){
				$i++;
				$data=date("Y-m-d",$orain);
				$polo=str_replace("à","a",$tmp[$i+1]);
				$sql = "INSERT INTO orario (aula, polo, orainizio, orafine,data)
				 VALUES ('".substr($tmp[$i],16)."','".$polo."',".$orain.",".$orafin.",'".$data."')";

				if (mysqli_query($conn, $sql)) {
					echo "New record created successfully<br>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
				}
			}
		}
	}
}
mysqli_close($conn);
?>