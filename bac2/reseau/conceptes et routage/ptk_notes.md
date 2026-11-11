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

## tp 1.6.1 : implement a small network
- pour set up un mot de passe crypté:
r1> enable
r1# configure terminal
r1# enable secret Ciscoenpa55 //pour le setting up du mot de passe
r1# service password-encryption  //pour l'encryption 
- configuration du mot de passe sur les lignes console (-> ligne consoles est le canal de communication physique direct pour permettre l'admin de se brancher direct i il n'as tjrs pas de address ip)

line con 0
password Ciscolinepa55
login
exit






