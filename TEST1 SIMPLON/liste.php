
<html lang="fr">
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" href="favicon.ico.png" type="image/x-icon">
	<title>la liste des paricipants</title>
</head>
<body>
	
<p>LA LISTE COMPLETE DES PARTICIPANTS</p>

<table style="width:90%"; style="border:1px solid #ccc">

							<thead style="border:1px solid #ccc">
								<tr >
								  <th>NOM</th>
								  <th>PRENOM</th>
								  <th>NUMERO</th>
								  <th>ADRESSE EMAIL</th>
								</tr>
							</thead>
							<tbody>

                    <?php
$serveur = "localhost";
		$login = "id20184626_test1simplonci";
		$pass = "Kianjeanm1-2";
		
		try{
		$connexion = new PDO("mysql:host=$serveur;dbname=id20184626_test1simplonci;charset=utf8", $login, $pass);
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sel = "SELECT * FROM `enregistrement`";
		
		
		}
		catch(PDOException $e){
			echo 'Echec de la connexion : ' . $e->getMessage();
		}
						foreach ($connexion->query($sel) as $lingne)

					   {  

					?>
							<tr style="border:1px solid #ccc">

								<td> <?php  echo $lingne['NOM'];?></td>

								<td> <?php  echo $lingne['PRENOM'];  ?></td>
 
								<td><?php  echo $lingne['NUMERO'];  ?></td>

								<td> <?php  echo $lingne['ADRESSE'];  ?></td>
							</tr>

					<?php 

						} 

					?>

                            </tbody>

                    </table>
	



					<a href="index.php">Retour</a>
					</body>
</html>