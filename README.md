Ce projet est une petite **application Laravel** permettant de gérer des étudiants avec les opérations de base du CRUD (Créer, Lire, Mettre à jour, Supprimer).
L'interface est réalisée avec Bootstrap pour un design simple et responsive.

**Fonctionnalités**
Ajouter un nouvel étudiant
Modifier les informations d'un étudiant existant
Supprimer un étudiant
Afficher la liste des étudiants
Sélectionner la classe d'un étudiant lors de la création ou modification

**Technologies utilisées**
Laravel (Framework PHP)
Bootstrap (CSS & JS Framework)
Base de données : SQLite (par défaut, facile à configurer)

**Installation**
1) Cloner ce dépôt : git clone https://github.com/codeurluce/Laravel_app.git
2) cd nom-du-depot

**Installer les dépendances PHP :**
3) composer install

**Copier le fichier .env.example en .env :**
4) cp .env.example .env

**Générer la clé de l'application :**
5) php artisan key:generate

**Configurer la base de données dans .env (utiliser sqlite par exemple) :**
DB_CONNECTION=sqlite
DB_DATABASE=/chemin/vers/database.sqlite

**Créer une base de données SQLite :**
6) touch database/database.sqlite

**Lancer les migrations et remplir les données de base :**
7) php artisan migrate --seed

**Démarrer le serveur :**
8) php artisan serve

**Accéder à l'application :**
http://localhost:8000