<?php
$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); //sample host 
$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$db_name = 'fw42'; //this is the database I created in PhpMyAdmin

$conn = new mysqli($db_host, $db_user, $db_pass,$db_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$polo=$_GET["polo"];
$orai=$_GET["orai"];
$oraf=$_GET["oraf"];

$sql = "SELECT DISTINCT aula,orainizio,orafine,edificio FROM freeaula WHERE freeaula.polo='".$polo."' AND (freeaula.orainizio<=".$orai." AND freeaula.orafine>=".$oraf." ORDER BY freeaula.aula)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row["aula"]."£".$row["orainizio"]."£".$row["orafine"]."£".$row["edificio"]."<removekebab>";
	}
} else {
	echo "0 results";
}

$conn->close();		
?>