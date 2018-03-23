<head>
	<title>Ajax-demo 1</title>
	<meta charset="utf-8">
</head>

<body> 
	<?php
		if(isset($_GET["ktunnus"])) $ktunnus=$_GET["ktunnus"]; 

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

		$sql = "SELECT * FROM pelaajat WHERE ktunnus = '$ktunnus' LIMIT 1";
		$vastaus = $yhteys -> prepare($sql); 
		$vastaus -> execute(); 
		$vastaukset = $vastaus -> fetchAll(PDO::FETCH_ASSOC); 

		echo "Pelaajalla ".$vastaukset[0]["ktunnus"]." on rahaa ".$vastaukset[0]["rahaa"]." ja nykyinen hahmo on ".$vastaukset[0]["nykyinen_hahmo"]; 
	?>
</body>