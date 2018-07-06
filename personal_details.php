<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=cv_manuel;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table profiles
$profile = $bdd->query('SELECT * FROM profiles');
 

while ($donnees_profile = $profile->fetch())
{
?>

<!doctype html>
<html>
	<head>
		<title> MON CV </title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	
	<body>
		<div class="container">
			
			<div class="header-container"><!-- DEBUT -->
				<H1>BEN REJEB MOHAMED HEDI</H1>
			</div><!-- FIN -->
			
			<hr>
	
			<div class="form-personal-details"><!-- DEBUT -->
				
				<div class="image-droite"><!-- DEBUT -->
					<img src="hedi.jpg" width="200" height="200"/>
				</div><!-- FIN -->
				
				<div class="formulaire"><!-- DEBUT -->
					<table>
						<tr>
							<td id="personal" colspan="2"><b/> Personal Details</td>
						</tr>
						<tr>
							<td>Name : </td>
							<td><?php echo $donnees_profile['name']  ?></td>
						</tr>
						<tr>
							<td>Date of birth : </td>
							<td><?php echo $donnees_profile['date_of_birth']  ?></td>
						</tr>
						<tr>
							<td>Place of birth : </td>
							<td><?php echo $donnees_profile['place_of_birth']  ?></td>
						</tr>
						<tr>
							<td>Adress : </td>
							<td><?php echo $donnees_profile['adress']  ?></td>
						</tr>
						<tr>
							<td>Phone : </td>
							<td><?php echo $donnees_profile['phone']  ?></td>
						</tr>
						<tr>
							<td>E-mail : </td>
							<td><?php echo $donnees_profile['email']  ?></td>
						</tr>
						<tr>
							<td>GitHub profil : </td>
							<td><?php echo $donnees_profile['github_profile']  ?></td>
						</tr>
					</table>
				</div><!-- FIN -->
			</div><!-- FIN -->
			<hr>
<?php
	}
	$profile->closeCursor(); // Termine le traitement de la requête
?>