<?php 
$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); //sample host 
$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$db_name = 'fw42'; //this is the database I created in PhpMyAdmin

$conn = new mysqli($db_host, $db_user, $db_pass,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*date_default_timezone_set('Europe/Rome');

$iniz=strtotime('last monday', strtotime('tomorrow'));;
$fin=strtotime('next monday', strtotime('today'));;

$cust = array(
    "Polo Scientifico e Tecnologico Fabio Ferrari" => "Povo",
    "Facolta di Scienze Ed. Potenziamento su campo sportivo, via Sommarive 14  POVO" => "Povo",
    "Palazzo Fedrigotti, c.so Bettini 31 ROVERETO" => "Rovereto",
    "Palazzo Istruzione, c.so Bettini 84, ROVERETO" => "Rovereto",
    "Facolta di Economia, via Inama 5" => "Economia",
    "Facolta di Lettere e Filosofia, via T. Gar" => "Lettere",
    "Facolta di Ingegneria, Mesiano" => "Mesiano",
    "Biblioteca di Ingegneria, Mesiano" => "Mesiano",
    "Facolta di Sociologia, via Verdi 26" => "Sociologia",
);*/

$sql="TRUNCATE TABLE orariom";
$conn->query($sql);
if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
$sql="INSERT INTO orariom SELECT * FROM orario"; 
$conn->query($sql);
if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
/*$sql="TRUNCATE TABLE freeaula";
$conn->query($sql);
if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
$sql = "SELECT DISTINCT aula,polo FROM orariom";
$result = $conn->query($sql);
*/
/*if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$notte = $iniz;
		while($notte<$fin){
			$sql = "INSERT INTO orariom (aula, polo, orainizio, orafine)
			 VALUES ('".$row['aula']."','".$row['polo']."',".$notte.",".($notte+21600).")";

			if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
			$sql = "INSERT INTO orariom (aula, polo, orainizio, orafine)
			 VALUES ('".$row['aula']."','".$row['polo']."',".($notte+72000).",".($notte+86400).")";

			if (mysqli_query($conn, $sql)) {
				//echo "New record created successfully<br>";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
			}
			$notte+=86400;
		}
		$iniztemp=$iniz;
		$fintemp=$fin;
		$sql = "SELECT DISTINCT orainizio,orafine FROM orariom WHERE orariom.aula='".$row["aula"]."' AND orariom.polo='".$row["polo"]."' ORDER BY orariom.orainizio";
		$aulas = $conn->query($sql);
		if ($aulas->num_rows > 0) {
			$i=0;
			while($col = $aulas->fetch_assoc()) {
				$orain[$i]=$col["orainizio"];
				$orafin[$i]=$col["orafine"];
				$i++;
			}
			$sql = "INSERT INTO freeaula (aula, polo, orainizio, orafine, edificio)
				VALUES ('".$row["aula"]."','".$cust[$row["polo"]]."',".$iniz.",".$orain[0].",'".$row["polo"]."')";
			$conn->query($sql);
			for($i=0;$i<(count($orain)-1);$i++){
				if($orain[$i+1]!=$orafin[$i]){
					$sql = "INSERT INTO freeaula (aula, polo, orainizio, orafine, edificio)
						VALUES ('".$row["aula"]."','".$cust[$row["polo"]]."',".$orafin[$i].",".$orain[$i+1].",'".$row["polo"]."')";
					$conn->query($sql);
				}
			}
			$sql = "INSERT INTO freeaula (aula, polo, orainizio, orafine, edificio)
				VALUES ('".$row["aula"]."','".$cust[$row["polo"]]."',".$orafin[(count($orain)-1)].",".$fin.",'".$row["polo"]."')";
			$conn->query($sql);
		}
	}
} else {
	echo "0 results";
}*/
$conn->close()
?>