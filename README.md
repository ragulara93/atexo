## Ragularatnam Perinparatnam

# Test technique pour Atexo

On souhaite développer un jeu de cartes.
Dans ce jeu, un joueur tire une main de 10 cartes de manière aléatoire.
Chaque carte possède une couleur ("Carreaux", par exemple) et une valeur ("10", par exemple).

On vous demande de:
Construire un ordre aléatoire des couleurs.

Construire un ordre aléatoire des valeurs.

L'ordre des couleurs est celui ci:
--> Trèfle, Carreaux, Pique, Coeur 

L'ordre des valeurs est celui ci:
--> AS, 3, 5, 7, 9, Valet, Roi, 2, 4, 6, 8, 10, Reine

Construire une main de 10 cartes de manière aléatoire.
Présenter la main "non triée" à l'écran puis la main triée selon n'importe quel ordre défini dans la 1ère et 2ème étape. C'est-à-dire que vous devez classer les cartes par couleur et valeur.
Vous présenterez une solution qui tourne sur le langage PHP Symfony.

Vous pouvez utiliser un serveur d'application pour présenter la main de l'utilisateur (une interface graphique est la bienvenue), ou simplement la sortie console.


## Mode graphique

### Installation

```sh
$ git clone https://github.com/ragulara93/atexo.git
$ cd atexo
$ composer install
```

### Utilisez le serverless Symfony

```sh
$ php bin/console server:start
```
 [http://127.0.0.1:8000](http://127.0.0.1:8000)

### Unit testing

```sh
$ php vendor/bin/phpunit tests/
```