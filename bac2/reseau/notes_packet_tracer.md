# ACL
## activation des acl aux interfaces
```
R(config-if)# ip access-group { access-list-number | access-list-name } {
in | out }
R(config-if)# no ip access-group
```
ceci est la commande qui va activer l'acl dans une interface, mais elle ne va rien faire à ce stade.

dans mon exemple concret ce que je voudrais faire c'est faire en sorte que le pc0 puisse pas atteindre le reseau 192.168.200.0/24

mon router0 a comme ip config:
```
     192.168.100.0/24 is variably subnetted, 2 subnets, 2 masks

C       192.168.100.0/24 is directly connected, GigabitEthernet0/0
L       192.168.100.254/32 is directly connected, GigabitEthernet0/0
     192.168.200.0/24 is variably subnetted, 2 subnets, 2 masks
C       192.168.200.0/24 is directly connected, GigabitEthernet0/1
L       192.168.200.254/32 is directly connected, GigabitEthernet0/1
```
cad: 
|reseau|interface de sortie|meaning|
|---|---|---|
|192.168.100.0/24|G0/0|reseau PC0, qui est connecté directement|
|192.168.100.254/32|G0/0|adresse locale de l'interface Gi0/1|
|192.168.200.0/24|G0/1|reseau du pc1 et server1, connecté directement|
|192.168.200.254/32|G0/1|adresse locale de l'interface Gi0/1|