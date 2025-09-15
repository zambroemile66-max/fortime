# 📘 Fortime

## 🚀 Présentation
**Fortime** est une application web de recherche de stage.  
Elle permet aux entreprises de publier des offres de stage et aux étudiants de rechercher et postuler à ces stages.  

Le projet repose sur une architecture **MVC** et suit le paradigme de la **Programmation Orientée Objet (POO)**.  

---

## 🛠️ Stack utilisée
- **Template** : [Webflow](https://webflow.com/) (intégration front-end)  
- **Langages** :  
  - PHP (logique serveur, MVC, POO)  
  - CSS (stylisation)  
  - JavaScript (interaction front)  
- **Gestion des dépendances** : [Composer](https://getcomposer.org/)  
- **Contrôle de version** : [Git](https://git-scm.com/)  
- **Serveur** : Apache avec **.htaccess** (réécriture d’URL)  

---

## 🏗️ Architecture
L’application suit une organisation claire en **MVC (Model-View-Controller)** :  

fortime/
│── app/
│ ├── Controller/ # Contrôleurs : logique entre les modèles et les vues
│ ├── Model/ # Modèles : requêtes en base de données
│ ├── Exception/ # Classe de gestion des exceptions (NotFound)
│
│── database/ # Classe de connexion à la base de données
│
│── public/ # Dossier public accessible par l’utilisateur
│ ├── css/ # Feuilles de style
│ ├── js/ # Scripts JavaScript
│ ├── img/ # Ressources images
│ ├── index.php # Point d’entrée principal de l’application
│
│── routes/ # Classe Router : résolution des URL et levée d’exceptions
│
│── vendor/ # Autoload de Composer (⚠️ ne pas modifier sans connaissances)
│
│── views/ # Fichiers de vues (pages HTML/PHP)
│ ├── layout.php # Layout global pour les composants réutilisables
│
│── .gitignore # Définit les fichiers/dossiers ignorés par Git
│── .htaccess # Réécriture d’URL → public/index.php
│── composer.json # Dépendances et gestion des namespaces
│── README.md # Documentation du projet


---

## 📂 Détails des dossiers
### `app/`
- **Controller/** : gère la logique applicative, reçoit les données du **Model** et les envoie aux **Views**.  
- **Model/** : classes qui effectuent les requêtes SQL et renvoient les résultats.  
- **Exception/** : contient une classe pour gérer les erreurs comme les pages **404 Not Found**.  

### `database/`
- Contient une classe responsable de la **connexion à la base de données** (via PDO).  

### `public/`
- Contient tous les fichiers visibles par l’utilisateur final (**assets** : JS, CSS, images).  
- Le fichier **index.php** est le **point d’entrée** de l’application.  
  - Définit les constantes `VIEWS` et `SCRIPTS`.  
  - Charge le **Router** pour résoudre les URL.  

### `routes/`
- Contient la classe **Router**.  
- Son rôle :  
  - Résoudre les URL et diriger vers le bon contrôleur/méthode.  
  - Gérer les paramètres des requêtes.  
  - Lever les exceptions **Not Found** en cas d’URL invalide.  

### `vendor/`
- Géré automatiquement par **Composer**.  
- Contient l’autoloader pour charger les classes avec leurs namespaces.  
- ⚠️ Ne pas modifier manuellement.  

### `views/`
- Contient toutes les pages de l’application.  
- Utilise un fichier `layout.php` pour gérer les composants réutilisables (header, footer, etc.).  

### Fichiers principaux
- **`.gitignore`** : liste des fichiers/dossiers à ignorer par Git (ex: `vendor/`, caches…).  
- **`.htaccess`** : règle de réécriture pour rediriger toutes les requêtes vers `public/index.php`.  
- **`composer.json`** : fichier de configuration pour les dépendances et les namespaces.  
- **`README.md`** : documentation principale du projet.  

---

## ⚙️ Prise en main
### 1. Cloner le projet
```bash
git clone https://github.com/username/fortime.git
cd fortime

2. Installer les dépendances
composer install

3. Configurer la base de données

Modifier les identifiants de connexion dans la classe de connexion (routes/Route).
ou créer simple la base de données 'fortime' dans phpmyadmin.

4. Lancer le projet

Placer le projet dans votre serveur Apache (ou utiliser un serveur PHP local) :

5. Naviguer

Ouvrir : http://localhost/fortime

✅ Bonnes pratiques

Respecter la séparation MVC.

Ne pas modifier vendor/.

Documenter les nouvelles classes et méthodes.
