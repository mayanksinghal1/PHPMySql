<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
echo $dbname;

$connection=mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);

/*if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}*/


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 else {
    printf("Connected to the database : "+ $sampledb);
	
	
	$query = mysqli_query($connection,"SELECT * from employees");
$values = "";
echo "<br>";
while($row = mysqli_fetch_assoc($query))
{
    $value1 = $row['name'];
    $value2 = $row['age'];
    
    //notice the '.' below.
    $values .= "<tr><td>".$value1."</td><td>".$value2."</td><td>".
	echo "<br>";
}
echo $values;


	
}
mysqli_close($connection);
?>