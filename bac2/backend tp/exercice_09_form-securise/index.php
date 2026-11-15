<?php
//Une liste de fruits et un choix par défaut
$liste_fruits = array('banane', 'framboise', 'kiwi', 'pomme');
$fruit = $liste_fruits[0];
	
if ( isset($_POST['enregistrement']) ) {
	//Le nom : un champ obligatoire
	if ( !empty($_POST['nom']) ) $nom = $_POST['nom'] ;
	else $erreurs['nom'] = true;
	
	//L'année : un champ obligatoire avec certaines valeurs rejetées
	$annee = (int) $_POST['annee'];
	
	//Le fruit préféré : liste de sélection
	$fruit = $_POST['fruit'] ;
	
	//s'il n'y a aucune erreur...
	if (empty($erreurs)) { 
		$form_correct = True;
	}
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire avec gestion des erreurs</title>
	<style>
	.red { color:red; }
	</style>
</head>
<body>
	<h1>Inscription</h1>
	
	<?php
	//Affichage des résultats du formulaire
	if ( !empty($form_correct) ) {
		echo "<p>Bonjour $nom,";
		echo "vous êtes né en $annee et";
		echo "votre fruit préféré est : $fruit</p>";
	}
	?>
	
	<form method="post" action="index.php" autocomplete="off">
	
		<p <?php if ( isset($erreurs['nom']) ) echo 'class="red"'; ?>>
			<label for="nom">Nom :<br> 
				<input type="text" id="nom" name="nom" value="<?php if (isset($nom)) echo $nom; ?>" >
			</label>
			
		<p <?php if ( isset($erreurs['annee']) ) echo 'class="red"'; ?>>
			<label for="annee">Année de naissance :<br> 
				<input type="number" id="annee" name="annee" step="1" min="1900" max="<?= date('Y') ?>" value="<?php if (isset($annee)) echo $annee; ?>">
			</label>
		
		<p <?php if ( isset($erreurs['fruit']) ) echo 'class="red"'; ?>>
			<label for="fruit">Fruit préféré :<br> 
				<select id="fruit" name="fruit">
					<?php
					foreach ($liste_fruits as $f) {
						echo '<option value="',$f,'" ', ($fruit==$f)?'selected':'' ,'>',$f;
					}
					?>
				</select>
			</label>
			
		<p><input type="submit" name="enregistrement" value="Enregistrer">
		
	</form>
</body>
</html>