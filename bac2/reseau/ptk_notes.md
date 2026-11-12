# TP SRWE(Switching, routing and wireless essentials)
## tp 1.4.7 : configure router interface
si jamais un mot de passe est demandé utiliser "cisco"
 pour passer au mode privilegié(?) et configurer:
 R1>enable
 si il demande un autre mot de passe utiliser "class"
 pour la config:

R1# configure terminal
R1(config)# interface g0/0
R1(config-if)# ip address 172.16.20.1 255.255.255.128 
//ceci est la commande pour un addresse ipv4 dans le tableau on voit que on un masque /25 que on va donc convertir en adresse ip.

R1(config-if)# description LAN R1 vers SW1
//ceci sert à documenter le reseau, on a que en passant par l'interface G0/0 on atteint le sw1
R1(config-if)# no shutdown
R1(config-if)# end
R1# show ip interface brief

pour une adresse ipv6 la commande sera:
R1(config-if)# ipv6 address 2001:db8:acad:1::1/64
//à difference de ipv4 pour ipv6 on peut juste mettre le /64 pour le prefix

to undo smt: "no" + la commande que on veut undo
no shutdown à ajouter à la fin de chaque configuration d'interfaces que on veut utiliser

lorsque on a qlq chose du style "fe80::2" on a une address link-local
que on le comprends du prefixe

## tp 1.5.10: verify directly connected networks
"c.     Reportez-vous à la table d'adressage et vérifiez les adresses IP configurées sur R1. Si nécessaire, apportez des corrections à l'adresse.

d.     Afficher la table de routage par filtrage pour démarrer la sortie au mot Gateway.

Remarque : Les termes utilisés pour filtrer la sortie peuvent être raccourcis pour correspondre au texte tant que la correspondance est unique. Par exemple, Gateway, Gate et Ga auront le même effet. G ne le fera pas. Le filtrage est sensible à la casse

R1# show ip route | begin Gate"

ces etapes font partie de  activités de trubleshooting et suivent la logique de diagnostique.
la commande `show ip route`|`begin Gate` permets de montrer quels reseaux le router connait
le resultat est: 
Gateway of last resort is 209.165.200.226 to network 0.0.0.0

     172.16.0.0/16 is variably subnetted, 2 subnets, 2 masks
C       172.16.20.128/25 is directly connected, GigabitEthernet0/0/1
L       172.16.20.129/32 is directly connected, GigabitEthernet0/0/1
     209.165.200.0/24 is variably subnetted, 2 subnets, 2 masks
C       209.165.200.224/30 is directly connected, Serial0/1/0
L       209.165.200.225/32 is directly connected, Serial0/1/0
S*   0.0.0.0/0 [1/0] via 209.165.200.226

où C= connected et L=local
ici on remarque que g0/0/0 est present mais adminstratively down donc:
R1(config)#interface g0/0/0
R1(config-if)#no shutdown

Quel est l'ID de circuit affiché à partir de votre sortie?
 Description: Circuit ID BCB123450001
 -> ce numero est attribué par l'isp pour documenter, si la liason tombeen panne l'admin donne ce num à l'operateur pour retrouve rapidement le bon circuit de ses systemes

pour afficher le duplex on utilise:

R1#show interface g0/0/0 | include duplex

## tp 3.1.4 : who hears the broadcast?


Question:
Quelles sont au moins 3 autres applications disponibles ?
dns, http, pop3, imap



## plan de sauvegarde -> document ecrit
à realiser pour le projet de cybersec
 - frequence?
 - type?
 - strategie?
 - securite: chiffré?
 - conservation
 
 ## DRP/PRA
 -> disaster recovery plan, un plan pour que le systeme revient en ligne le plus vite possible. c'est documenté et testé, anti panic plan 