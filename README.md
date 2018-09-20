test recrutement SOFTIBOX
=============================================================
L'objectif du challenge est de voir les points suivants :
* Votre niveau en compréhension, analyse / conception
* Votre manière de coder et la qualité de votre code

Une fois votre application terminée correctement, vous devez l'envoyer sur un repository gitlab ou github en mode public
L'application doit fonctionner en lançant la commande de création de schéma de la BDD. Si des données d'initialisation sont nécessaire, cela doit être initialisé via les fixtures. Il n'est pas nécessaire d'envoyer un fichier SQL de la BDD.
Le lancement doit se faire simplement avec la commande >> php bin/console server:start

## Le sujet du challenge :
Un vendeur de lunette veut développer une application pour gérer ces produits.
Un produit est constitué de : titre, description, Quantité en Stock, marque, Prix ttc, types (soleil, vue, sport), genre (homme, femme, mixte, enfant)
Chaque marque a un seul et unique fournisseur.
Un client peut s'inscrire sur la plateforme et effectuer plusieurs commandes. Pour cela il doit saisir son Nom, Prénom, Adresse, email et téléphone. Toutes ces informations sont obligatoires.

### Partie 1
* Faire la conception des modèles de données
* Développer la gestion :
 - Des produits ainsi que tous ces éléments associés (Ajout, modification, suppression).
 
 - Des fournisseurs (Ajout, modification, suppression)
 
 - Du stock de produit (Ajout, retrait)

