# PHP

## Inclusions et redirections

Les parties répétitives d'un site web devraient être isolées dans un fichier externe, pour ne pas être écrites plusieurs fois. On récupère ensuite ce code grâce à :

- `include` : inclut un fichier (si le fichier n'existe pas, simple avertissement et le script continue)
- `include_once` : pareil que `include`, mais n'inclut que les fichiers pas encore inclus avant
- `require` : pareil que `include`, mais génère une erreur qui arrête l'interprétation si le fichier n'existe pas
- `require_once` : combine `require` et `include_once`

### Exemple

```php
<?php
require_once '_connexion_BD.php';
include_once '_fonctions.php';
include '_navtop.php';
include '_header.php';
?>
```

> **Convention de nommage :** `_blabla.php` est un fichier destiné à être inclus dans d'autres pages (avec `include` ou `require`), alors que `blabla.php` est une page ouverte directement par le visiteur. Le `_` n'a aucun effet pour PHP, c'est juste une convention.

## Redirection

La fonction `header()` envoie un en-tête HTTP spécifique au client, pour signaler une erreur ou rediriger le visiteur vers une nouvelle destination :

```php
header('Location: index.php');
exit();
```

- `header()` doit être appelée **avant tout affichage** (donc avant le début du HTML).
- `exit()` met fin à l'interprétation du code PHP.
- `die('message')` est un alias de `exit()` et prend un message en paramètre.

### Exo 2

Quelques balises HTML utiles :

| Balise | Rôle |
|--------|------|
| `<h1>` à `<h6>` | titres |
| `<p>` | paragraphe |
| `<ul>` + `<li>` | liste à puces |
| `<a href="contact.php">Contact</a>` | lien vers une autre page |
| `<nav>`, `<header>`, `<footer>` | zones de la page |

Pour qu'une page reste inaccessible, la redirection doit se faire **avant le bloc HTML**.

## Variables
- les variables sont precedés de `$`
- on peut declarer des variables de cette maniere:
	```php
		<?php
		$a= 10;
		?>
	``` 
- on peut detruire une variable avec `unset()`
- les fonctions `isset()` et `empty()` sont des fonctions booleennes qui permettent verifier l'existence d'une variable
```php
	<?php
	if (isset($var)) {
	 //Si $var a une valeur quelconque, y compris 0
	}
	if (empty($var)) {
	 //Si $var est inexistante, vaut 0 ou NULL
	}
	?>
	 ```
- on peut definir des variables constante avc `const` et `define`, ce seront des valeur repetives qui ne vont pas changer de valeur

## Strings
- deux syntaxes sont permises: `"` et `'` *je crois que je vais utliser " par habitude*
- vu les syntaxes permise pour afficher des guillements on utilise `\` (backslash)
- avc ma syntaxe pref je peux ecrire directement $variable dans le string
## echo
en gros la version print() de php, permet de genere du contenu html, css, javascript etc
qlq specifications:
```php
	<?php
	echo $a; //pour generer VALEUR d'une variable
	echo "$a"; //same que avant
	echo '$a'; //pour generer le NOM d'une variable

	echo "<h1 id=\"titre\">yay</h1>"; //pour gerener du code html

	//pour echo on utilisse la virgule comme separateur
	echo 'une chaine',$x, 'une autre chaine';
	?>
```
## concatenation
operation pour fusioner 2 strings en 1 seul , avec l'operateur `.`, 
mais pour un echo la concatenation se fait avc la virgule(FAUX)!!!!!*CORRECTION*
pour echo lorsque on mets une virgule c'est pour faire passer plusieurs arguments, le `.` est aussi valable  pour echo aussi
## tableaux
declaration de un array se fait avc `array()`, on peut attribuer directement des indices : $navigation = array(0=>'accueil', 1=>'galerie', 2=>'contact');
pour acceder à un element $tab[0] (par exemple)
chose cool, on peut mettre plusieurs types de variables dans un seul tableau
## structures conditionelles et iteratives
if else comme dans java
il y a le super short:
condition?vrai:faux -> si la condition est vraie l'operateur renvoie la valeur avant le ":" sinon valeur apres$
isset($_POST['login']) ? $_POST['login'] : null;

## OOP
$this->reference equivalent à this.reference en java par exempleo

## EXO FINAL
*informations complementaires sur l'exo final*

2eme etape:
de maniere generale lorsque dans notre code on ecrit <head>(balise html) on parle de tout les infos sur la page à load qui ne sont pas visibles(titre, encodage,style, description)
exemple: 
  ```html
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="...">
	<meta name="author" content="...">
	<meta name="robots" content="index, follow">
  ```
precision sur l'ordre des inclusion:
php lit les info d'un fichier du haut en bas donc il est important de inclure les fichiers dans l'ordre dans lequel on en a besoin.
 
dans le cas specifique de index.php on va inclure la bd avant <!DOCTYPE> car tout en depends.
btw on mets aussi des redirections avant <!DOCTYPE> pour eviter tout affichage

une regle à retenir pour la strcuture: d'abord la logique(connexion,traitements, redirections) ensuite affichage

pour le fichier `_bd_connexion` on doit ecrire un code en sorte que on puisse recuperer les info de notre bd qui vit dans Mysql qui vit en arriere plan dans XAMPP et stocke les données dans son propre dossier systeme. Pour y acceder on doit passer par phpMyAdmin 
pour se connecter à une base de donnée on a un exemple donné dans le cours: 
```php
	date_default_timezone_set('Europe/Brussels'); #
	$hote='localhost';
	$nomBD='WalkingPets';
	$user='root';
	$mdp='';
	try {
 		$bd=new PDO('mysql:host='.$hote.';dbname='.$nomBD, $user, $mdp);
 		$bd->exec("SET NAMES 'utf8'");
	}
	catch (Exception $e) {
 		die('Erreur de connexion à la BD : '.$e->getMessage() );
}
```
quelques explications sur ce bout de code:
- date_default_timezone_set('Europe/Brussels'); est pour le fouseau horaire pour regler les fonction de dates de php
- bd=new PDO('mysql:host='.$hote.';dbname='.$nomBD, $user, $mdp); extension PHP pour les acces aux bases de données permettant de preparer des requetes et ajoute de la securité.
```php

<?php
$req=$bd->prepare('SELECT pets.*
					FROM pets
					LEFT JOIN categories AS c
					ON pets.id_cat=c.id_cat
					ORDRER BY pets.name ASC');
$req->execute();
$pets=$req->fetchAll();
?>

```
pour le join à utiliser à l'etape 4 on utilise le left join, lorsque on fait jointure il faut dire à quel endroit on join via ON

hardcoded version de l'affichage:
<ul id="pets">
			<li class="pet"><a href="modif_pet.php?id_pet=20">
				<img src="icons/parrot.png" alt=""><h3>Albator</h3>
				<p>walks : 0</p>
				<p>meals : 2</p>
			</a></li>
			<li class="pet"><a href="modif_pet.php?id_pet=4">
				<img src="icons/unknown.png" alt="">
				<h3>Brownie</h3>
				<p>walks : <s>2</s> 0</p>
				<p>meals : 3</p>
				<p title="Brownie est un raton-laveur.">- remarque -</p>
			</a></li>
		</ul>

pour afficher du php dans du php on a 2 maniere differentes:
- executer des instructions(boucle, test, calcul):
	<?php if($age>=18):?>
		<p>majeur</p>
	<?php endif; ?>
- pour afficher une valeur:
<h3><?= $animal['animal'] ?></h3>
où <?= ... ?> est un raccourci