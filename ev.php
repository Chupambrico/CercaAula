<?php 
ini_set('max_execution_time', 1417514400);
$db_host = "localhost" ;
$db_user = "root";
$db_pass = "";
$db_name = 'fw42'; //this is the database I created in PhpMyAdmin

$conn = new mysqli($db_host, $db_user, $db_pass,$db_name);
echo "ciao";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	$polo="Polo Scientifico e Tecnologico Fabio Ferrari";
	$orai=1417514400;
	$oraf=$orai+3600;
//	$sql = "SELECT * FROM orario WHERE orario.polo='".$polo."' AND (orario.orainizio<=".$orai." AND orario.orafine>=".$oraf.")";
	$sql="TRUNCATE TABLE freeaula";
	$conn->query($sql);
	$sql = "SELECT DISTINCT aula,polo FROM orario";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		$sql = "SELECT DISTINCT orainizio,orafine FROM orario WHERE orario.aula='".$row["aula"]."' AND orario.polo='".$row["polo"]."' ORDER BY orario.orainizio";
			$aulas = $conn->query($sql);
			if ($aulas->num_rows > 0) {
				$i=0;
				while($col = $aulas->fetch_assoc()) {
					$orain[$i]=$col["orainizio"];
					$orafin[$i]=$col["orafine"];
					$i++;
				}
				for($i=0;$i<count($orain);$i++){
					if(($i+1!=count($orain)) AND ($orain[$i+1]!=$orafin[$i])){
						$sql = "INSERT INTO freeaula (aula, polo, orainizio, orafine)
						VALUES ('".$row["aula"]."','".$row["polo"]."',".$orafin[$i].",".$orain[$i+1].")";
						$conn->query($sql);
					}
				}
			}
			//echo "Aula:".$row["aula"]."<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close()
	
				
			
        ?>