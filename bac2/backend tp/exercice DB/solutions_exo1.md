# Villes de france
## 1) obtenir la liste des 10 villes plus peuplée en 2012:
	
SELECT ville_nom
FROM villes_france_free
ORDER BY ville_population_2012 DESC
LIMIT 10 ;
### notes:
pour avoir le top de qlq chose mettre limit, pas besoin de virgules entre les lignes juste un ";" à la fin de la requete

## 2) Obtenir la liste des 50 villes ayant la plus faible superficie ;
cad les bottom 50 niveau superficie

SELECT ville_nom
FROM villes_france_free
ORDER BY ville_surface ASC
LIMIT 50;

## 3) Obtenir la liste des départements d’outre-mer, c’est-à-dire ceux dont le numéro de département commence par “97” ;

SELECT ville_nom, ville_code_postal
FROM villes_france_free
WHERE ville_code_postal > 97000;

## 4) Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé ;

SELECT v.ville_nom, d.departement_nom
FROM villes_france_free AS v 
JOIN departement AS d ON d.departement_code=v.ville_departement
ORDER BY v.ville_population_2012 DESC
LIMIT 10 ;
### notes:
lorsque on veut afficher 2 colonnes de 2 tables differentes il faut absolument join en posant des alias pour que ca soit bcp plus facile (pas besoin de tout retaper)

## 5) Obtenir la liste du nom de chaque département, associé à son code et du nombre de commune au sein de ces départements, en triant afin d’obtenir en priorité les départements qui possèdent le plus de communes ;

SELECT 	d.departement_nom, 
		d.departement_code, 
		COUNT(v.ville_id) AS nombre_communes
FROM 	departement 	AS 	d
JOIN 	villes_france_free AS v ON d.departement_code= v.ville_departement 
GROUP BY  d.departement_code, d.departement_nom, d.departement_id
ORDER BY nombre_communes DESC, d.departement_nom ASC;

### notes:
count(v.villes_id) est utilisé pour avoir le nombre de toute les villes

## 6) Obtenir la liste des 10 plus grands départements, en termes de superficie ;

SELECT d.departement_nom,
FROM departement as d
JOIN villes_france_free AS v ON d.departement_code= v.ville_departement
WHERE