5 familles du sql:
| famille | role        | 
| DDL     | structure   |
| DML     | donnée      |
| DCL     | droits      |
| TCL     | transactions|
| SQL/PSM | procedural  |

DDL:
´´´sql
CREATE TABLE ma_table (
  id_table INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  date_de_naissance DATE
);
´´´
 - si oublie qlq chose -> alter table
 - drop table -> supprimer table
 - truncate -> vider contenu table
 

 DML: manipulation de données

 SELECT liste_colonne
 FROM table
 WHERE conditions
 GROUPE BY ...
 HAVING ...
 ORDER BY ...;


 order by doit  etre tjrs à la fin de la requete

 - clause "WHERE"
  	WHERE id < 4 AND prix >= 3        
  	-- un seul = pour l'égalité, <> pour différent
	
	WHERE nom LIKE 'King%'            
	-- % = n caractères, _ = 1 caractère
	
	WHERE prix BETWEEN 3 AND 6
	
	WHERE id IN (1, 4, 2)
	
	WHERE id NOT IN (1, 4, 2)
	
	WHERE prix IS NULL               
	 -- jamais = NULL (NULL = NULL est faux)
 
ordre d'ecriture:
SELECT → FROM → WHERE → GROUP BY → HAVING → ORDER BY → LIMIT