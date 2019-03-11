# my_cv
# Fonctionnalités
## Gestion des informations dans une base de donnée
Toutes les informations présentent sur le CV son stockées dans une base de donnée. Cette dernière peut être administrée via phpmyadmin.

## Protection et authentification
Il est possible de consulter le CV en tant que visiteur ou en temps qu'administrateur. En remplaçant /lucky/number par /admin l'interface de connection apparaît. On peut se connecter avec l'identifiant "admin" et le mot de passe "pass".

## Modification par un administrateur
Une fois connecter en tant qu'administrateur il est possible de modifier directement le CV. On peut ajouter, supprimer et modifier les informations.

# Tests
Il est possible de faire un test unitaire avec la commande "php ./vendor/bin/codecept run unit" et lancer un test fonctionnel avec la commande "php ./vendor/bin/codecept run acceptance".
