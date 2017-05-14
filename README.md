# Programmation web – serveur

Index de connaissances pour le cours de programmation serveur – l'IUT de Paris Descartes – début 2017

Liste et contenu des exercices disponible dans le dossier [exercices](exercices/)

# Bases de l’architecture et du développement en client-serveur
## Vocabulaire
* **Frontend** = client
* **Backend** = serveur
* Le client peut être une app desktop, app mobile, webapp, site internet...
* Le serveur peut être une machine hébergée dans un datacenter, ou n'importe quel ordinateur accessible depuis internet
* En développement, le client et le serveur peuvent être sur la même machine
* Anciens termes : front-office / back-office (plutôt liés à la notion de métiers, ou aux types d'utilisateurs)
  * Ne pas confondre avec les notions de `front = utilisateur final` et `back = administrateur`
  * Ici, nous parlons de _frontend_ et _backend_ **development**

### Ressources
* [Frontend vs. Backend](http://blog.teamtreehouse.com/i-dont-speak-your-language-frontend-vs-backend) (anglais)
* [Différence entre developpeur front-end et back-end](http://blog.teamtreehouse.com/i-dont-speak-your-language-frontend-vs-backend) (français)

## Historique des architectures serveurs / client-serveur
* Mainframes (puissant serveur central avec des écrans d'accès)
* P2P (système de communication et échange de données de client à client)
* **2 niveaux, 3 niveaux, N niveaux**
* SOA et microservices
* Serverless (type FaaS)

### Ressources
* [Microservices](https://martinfowler.com/articles/microservices.html) (anglais)
* [Serverless](https://martinfowler.com/articles/serverless.html) (anglais)

## Communication client-serveur
* Différence entre client **lourd**, client **léger**, client **riche**
* Protocoles : HTTP, FTP, SMTP (+ WS)
* Compréhension du processus de **requête** (client) -> **réponse** (serveur)
* Connaître les différents modes de requête et le rôle de chaque partie : synchrone, asynchrone, push / temps réel
* Comprendre les notions de DNS (Domain Name System), cache, CDN (Content Delivery Network)
* Formats de données pour les échanges : **HTML**, **JSON**, XML
* Différence entre GET et POST, utilisation de la bonne _method_ selon le besoin (+ DELETE / PUT)

### Ressources
* [Basic concepts of web applications, how they work and the HTTP protocol](https://www.youtube.com/watch?v=RsQ1tFLwldY) (vidéo en anglais)
* [WebSockets | MDN](https://developer.mozilla.org/fr/docs/WebSockets)
* Architecture 3 tiers
![frontend-backend](https://image.slidesharecdn.com/1-webdesignconcepts-120708014736-phpapp02/95/1-web-design-concepts-web-frontend-37-728.jpg)

# Conception, développement et maintenance d’une application
## Environnement de développement
* Installation et configuration d'un bundle pour Windows : [EasyPHP](http://www.easyphp.org/)
* Connaissance des outils individuels :
  * Apache, PHP, MySQL
  * Alternatives : Nginx, MariaDB, PostgreSQL
  * phpMyAdmin, outils de développement de Chrome ou Firefox

## Création de pages web avec navigation
* Conception d’interfaces web en HTML et CSS
* Création de liens dynamiques entre pages HTML 
* Gestion des requêtes et URLs avec un serveur web  (Apache)

## Langage PHP
* Connaître les différences basiques entre les versions de PHP, et savoir quelle version utiliser en priorité : 5.x / 7.x
* Connaître les bases du langage : conditions `if` / `elseif` / `else` / `switch`, boucles `foreach` / `for` / `while`, structures de données  `array()` / `[]` 
* Utiliser la syntaxe orientée vue (HTML) : `if ():` … `endif;`
* Superglobales : `$_GET`, `$_POST`, `$_SERVER`, `$_SESSION`, `$_FILES`
* Utiliser des fonctions standards :  `include()` et `require()` (+ `_once`), `isset()` / `empty()`, `intval()`, `date()`, `is_string()`, `array_push()`, `die()` / `exit()` …
* Transformation de données avec `json_encode()` / `json_decode()` et manipulation de fichiers avec `file_put_contents()` et `file_get_contents()`
* Créer une class et manipuler des objets
* Savoir chercher et utiliser la documentation

### Ressources
* [Awesome PHP](https://github.com/ziadoz/awesome-php)
* [PHP: The Right Way](http://www.phptherightway.com/) (anglais)

## Frameworks, API et architectures
* Comprendre le principe d’une architecture *MVC*, ses avantages et limitations
* Installer et configurer un framework MVC ([CodeIgniter](https://www.codeigniter.com/))
* Utiliser un micro-framework ([Lumen](https://lumen.laravel.com/))
* Installer et configurer un CMS ([WordPress](https://fr.wordpress.org/))
* Concevoir une API
* Comprendre la différence entre REST et RPC

### Ressources
* [MVC architecture](https://developer.mozilla.org/fr/Apps/Build/Architecture_d_une_application_web_moderne/MVC_architecture)
* [A comparison of REST and RPC](https://apihandyman.io/do-you-really-know-why-you-prefer-rest-over-rpc/) (anglais)

## Écriture de requêtes pour MySQL
* Différence entre les principaux moteurs de stockage : MyISAM et InnoDB
* *SELECT*, *INSERT*, *UPDATE*, *DELETE* / *LIMIT*
* Utilisation des jointures : LEFT JOIN, INNER JOIN
* Connexion à une base de donnée (MySQL) 
* Passer des paramètres PHP

### Ressources
* [MySQL LIMIT](http://www.mysqltutorial.org/mysql-limit.aspx) (anglais)
* [MySQL Joins](https://www.techonthenet.com/mysql/joins.php) (anglais)
* [What is the difference between "INNER JOIN" and "OUTER JOIN"?](http://stackoverflow.com/questions/38549/what-is-the-difference-between-inner-join-and-outer-join) (anglais)
 
## Sécurité et qualité (tests)
* Sensibilisation aux problématiques courantes
  * **Validation des données saisies par l'utilisateur**
  * **Injections SQL**
  * Attaques XSS et CSRF
  * Prévention de l'accès direct aux dossiers et fichiers de l'application, protection des données de session, gestion de l'affichage des erreurs...

* Introduction aux tests avec PHPUnit (<- non réalisé en cours)

### Ressources
* Tests : [PHPUnit](https://phpunit.de/) (anglais)
* [8 Practices to Secure Your Web App](https://www.sitepoint.com/8-practices-to-secure-your-web-app/) (anglais)

# Outils, déploiement et alternatives
## Utilisation d’un gestionnaire de source
* Savoir utiliser Git et un repository en ligne
* Comprendre le fonctionnement d’un gestionnaire de sources
* Connaître les alternatives et leurs avantages/inconvénients

## Déploiement d’une application en ligne 
* Importance de *déployer le plus tôt possible* (anticiper les difficultés, réorienter les choix d’outils et d’architecture…)
* Solutions, outils, optimisations
	* Plateformes : [Heroku](https://devcenter.heroku.com/start), [DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-16-04)
	* Outils : [Deployer](https://deployer.org/), [Docker](https://www.docker.com/what-docker)
	* Utiliser une configuration de "production" (vs. "development") : activation du cache, désactivation de l'affichage des erreurs…

## Étude d’autres solutions techniques
* Connaître d’autres langages et leurs différences majeures : Ruby / RoR, Python / Django / Flask, Javascript / Node. Autres technologies à la mode : Go, Scala, Elixir
* Database : NoSQL ([documents](https://www.mongodb.com/what-is-mongodb), [graphes](http://orientdb.com/orientdb/), [key-value](https://redis.io/)…)
* API : [GraphQL](http://graphql.org/)
* Serverless : Backend as a Service, hosted database and services…etc.
