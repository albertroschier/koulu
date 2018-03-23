<head>
	<title>Ajax-demo 2</title>
	<meta charset="utf-8">
</head>

<body>
	<?php
		$host ="magnesium";
		$user = "a16aroschier";
		$pass = "höpönpöppöö";
		$dbname = "ska16aroschier";

		try
		{
			$yhteys = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}

		$sql = "SELECT * FROM pelaajat";
		$vastaus = $yhteys->prepare($sql);
		$vastaus->execute();
		$vastaukset = $vastaus->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($vastaukset);
	?>
</body>