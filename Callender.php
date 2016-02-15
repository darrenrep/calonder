?php
	$connection = new mysqli('localhost','root','','calender');
	echo $connection->connect_error;

	$sql = "select * from birthdays";

	$result = $connection->query($sql);

	$todoes = $result->fetch_all(MYSQLI_ASSOC);

	//var_dump($birthdays)
?>