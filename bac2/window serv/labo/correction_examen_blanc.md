# correction examen blanc: voir photo pour enoncé
refaire l'exo apres avoir refait l'entiereté des tp
chronometrer sans notes, simulation d'exam
## etapes à suivre avant mm de faire le cahier de charges (setting up du dns et dhcp)
 - renommer le server
 - adresse statique ip
 - installer le role dhcp
 - l'installation du dns faite directement avc ad ds
 - dans le dns faut creer la reverse, aka pointeur avc l'adresse de notre serveur
 - tjrs dans la zone reverse: name server à editer, le fqsn (?) (à rechercher)
 - mtn dans dhcp on cree un scope à creer en fonction de cmb d'adresses à allouer en fct de utilisateurs+20% des adresses en plus
 - options d'etendue dans scope option: router par defaut c'est celui à bas debit pour les guests (voir enoncé + photo) ceci permet tlmd à avoir un acces à internet
 - creer classe utilisateur, clique droit sur ipv4 et avc le code ascii on va l'utiliser dans (???)
 - creer une police
 !!!!!  tester tout les config une fois que on a fait (installation dns faut test, installation dhcp faut test)
 -  chez le client, on regarde si le dhcp nous a donne un adresse ipv4 avc commande ipconfig /all
 -  si on pas ce que on sattend aller config du reseau pour que ca soit dhcp 
 -  pour tester dns , nslookup
 -  ensuite associer client à la classe via ipconfig /setclassid ethernet *identifient avc notre truc ascii*
 -  sur le server dns, le server web doit etre sous forme: www.alheure.lan
 -  on cree un host svr_web dans dns manager
 -  encore sur client tester avc nslookup notre alias www.alheure.lan
 -  
## cahier de charge
### creer les uo + creer les utilisateurs + creation des groupe locaux
on cree les groupe locaux apd dossiers partagé et les dossier globaux apd de uo
### allouer les heures de connection
- pour les utiliseur les horaire des connection , si c'est avec des demi heures (8h30-18h30) mettre plus de temps

### espace de stockage : on fait un dossier partage pour les different departement
### creation gg et gl
- comment ajouter un client dans un domaine: win + x, systemes, parametres avance, modifier domaine
- si jamais on a (voir photo) cliquer sur session simple


!!!!! à l'examen -> plan de sauvegarde à l'ecrit

à l'examen activer la courbeille pour l'ad et aussi pour la connection bureau à distance (rdp port 3389) faut le securiser

profil itinerant possible à l'exam 
delegation de zone et delegation de control non à l'exam


