---
title: synthese conceptes de routage et commutation
markmap:
	color: 
	 "#FF4D94"
     "#C084FC"
     "#F9A8D4"
     "#8B5CF6"
     "#D946EF"
	colorFreezeLevel: 2
	initialExpandLevel: 3
---

# synthese
## chapitre 1: basic device config and switching concepts
### preconfig switch: sequance de demarrage
- programme post est executé apd de a memoire ROM
- bootloader executé
- init bas niveau processeur
- bootloader initie le systeme de fichier
- localise et charge l'image du logiciel du OS
### preconfig switch: indicateurs leds
- SYST
- RPS
- STAT
- DUPLX
- SPEED
### configuration de base
#### gestion à distance
pour admin un switch à distance une passerrelle pas defaut doit etre configuré
- configurer adresse ip
- configurer masque de sous reseau
- procedure de configuration
     -    par defaut tout les ports sont assignés à vlan1, faut changer (possiblement pour ipv6)
     - le commutateur doit etre configuré avec une passerelle par defeaut qui peut etre gere à distance
     - apres le set up il faut verifier avc "show ip interface" et "show ipv6 interface"


