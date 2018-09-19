<?php 
session_start();
include("coneksi.php");

$sql = "SELECT * from user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<center><img width='400px' src='uploads/" . $row["gambar"] . "'></center> <br>";
	}
}else {
	echo "0 result";
}
?>