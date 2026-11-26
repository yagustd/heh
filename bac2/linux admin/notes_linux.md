# TP linux
## tp2: commande de base
- whoami : pour savoir le nom d'utilisateur
- hostname: pour le name du host, le mien est localhost.localdomain
- ls: pour savoir le fichier courant
- ls -all: pour avoir tt les info sur le fichier dans lequel on est
- cd / : pour retourner directement au root
- cd .. : pour retourner au niveau d'avant
- cd /"fichier" : d'aller directement dans le ficher que on veut rejoindre
- cd ~ : pour aller dans mon fichier 
## tp3: ssh et scp
- ip a ou ip addr: pour afficher les addresses ip
- ping *qlqchose*: pour ping mais genre indefini
- ping -c *n* *qlq*: pour ping n fois
- ssh username@adresseIP:pour se connecter en ssh à une autre machine, il faut d'abord recup l'adresse ip de la vm via la commande ip a 
- scp test.txt root@ipAddressVM:/root/ : pour pouvoir partager de powershell au root de la vm de maniere securisé avc scp 
- scp root@ipAdressVM:/etc/os-release . : pour pouvior partager le fichier os-release qui se trouve dans le fichier root, le "." designe le dossier courant du pc physique
- cat fichier.txt: pour afficher le text
- sudo -i: pour passer au mode priviligié
- exit: pour sortir du ssh
## tp4: liens et permissions
