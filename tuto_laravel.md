Remarques générales sur le tuto Laravel :

Pour brancher laravel à la bdd, il faut passer par le fichier .env

projet technos :

-sqlite x --> MARIA DB
-laravel
-reactJs
-css
-html

prochain projet: 

-mariaDB
-symfony ?? ou encore laravel si on a trop la flemme de se taper les install...
-angularJS
-css
-html


pour la base de données sqlite, lancer dans le terminal la commande (marche aussi avec MariaDb):

-php artisan make:migration create_books_table 

: cela devrait créer le fichier .php "create_books_table".
avec des fichiers "up", "down", déjà remplies

-lancer aussi la commande :

php artisan make:model Book

après avoir créé les fonctions :

```
 /*
    fonction générée par nathan 
    */
    public function books(): HasMany 
    {
        return $this->hasMany(Book::class);
    }
```
Il faut lancer la commande : 

```bash
php artisan migrate
```

Cela va permettre de créer les tables définies, comme :

-"users" : create_users_table
-"books" : create_books_table 

A partir de là, on peut commencer à faire des requêtes.

Mais il faut d'abord créer une factory.
Pour cela, il faut utiliser la commande :

```bash
php artisan make:factory BookFactory
```

Cela va créer le factory de book.
Il y en avait déjà un pour user (userFactory)

Il faut faire :

```bash
php artisan db:seed
```

pour mettre à jour ce qui a été fait dans le dossier databaseSeeder.php ; 
c'est à dire, les ajouts en base avec des créations de lignes (tuples).


```bash
php artisan make:controller BookController
```
créé le controller, permet de récupérer les données créées via le seed.
Cela permet d'être utilisé pour l'API, faire les 
échanges avec ReactJs.

app > Http > Controllers > Controller

il faut rentrer dans bookController et créer la méthode index.
Puis dans view, ajouter le dossier books puis le fichier index.blade.php.


Pour spécifier les caractéristiques des colonnes d'une table, il faut écrire dans : 

database > migrations > /var/www/html/ListeNoir2/database/migrations/2024_09_16_093242_create_books_table.php




Les fichiers à modifier :

dans resources et dans routes :

-web.php
-index.blade.php
-app(ou welcome).blade.php

dans app :

http> Controllers : 

-BookControllers.php (créé directement par moi)

Models:

-Book.php et User.php

database :

-BookFactory
-UserFactory...

--> 27:10

Pour créer un objet (ici livre), il faut la vue, qui va représenter le formulaire
on va pouvoir indiquer le titre, et ensuite on aura besoin d'enregistrer.

Remarque : 

-Parfois il faut update la page en utilisant directement ctrl+R ; sinon, simplement reculer pour mettre à jour ne suffira pas 
pour update la page risqu de laisser en place des problèmes.


Comment gérer :

-"mass asssignment erreur" :
cela est lié au système de sécurité qui empêche l'injection de n'importe quoi dans la table.
(dans le cas de l'exemple : ajouter title et userId)

-"Class "App\Http\Controllers\RBook" does not exist" : cela signifie qu'une de vos variables utilisées dans vos méthodes, probablement dans le fichier
BookController.php, possède un nom de type erroné. C'est probablement juste une erreur de typographie.
Chercher par mot clé le nom du type (ici "RBOOK") dans l'un de vos fichier du dossier app/HTTP/Controller.


-Pour utiliser MariaDB, consultez la page suivante :

https://www.cloudways.com/blog/connect-mariadb-to-laravel/


Laravel X MariaDB: 

fichiers autogénérés pour Maria DB par la commande "php artisan make:model Post -m": 

-/var/www/html/ListeNoir2/database/migrations/2024_09_20_085455_create_posts_table.php
-app/Models/Post.php

résoudre :

nécessaire pour lancer  "php artisan migrate" (DÉBUT) :

- ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (13) 

--> https://forum.ubuntu-fr.org/viewtopic.php?id=2064313

- voir et supprimer les users anonymes : 

- accéder à mysql : sudo mysql

--> https://webhostinggeeks.com/howto/how-to-delete-anonymous-users-from-mysql-on-centos-6-2/

- sur mysql, créer un nouvel utilisateur avec son mdp : 

CREATE USER 'nathanb'@'localhost' IDENTIFIED "monmdp";

la commande pour lancer avec un mode user se trouve juste ici :

-https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql

GRANT CREATE ON *.* TO 'nathanb'@'localhost';

GRANT ALL PRIVILEGES ON *.* TO 'nathanb'@'localhost' WITH GRANT OPTION;  --> il faut donner les droits à votre user, ici, "nathanb"

nécessaire pour lancer  "php artisan migrate" (FIN)

Dans "mysql", pour connaître les tables disponibles :

-SELECT table_name
FROM INFORMATION_SCHEMA.TABLES
WHERE table_type = 'BASE TABLE'

(https://www.datameer.com/blog/sql_how-to-display-all-the-tables-from-a-database/)



Pour pouvoir écrire dans les fichiers situés dans /var/www : 

```bash
sudo chmod -R 777 /var/www
```

faire fonctionner le projet : 


- Il faut installer composer pour avoir via le terminal pour pouvoir ensuite ajouter le répertoire "vendor/" nécessaire au fonctionnement :

via la commande : 
```bash
composer install
```
--> n'installe pas forcément une versionde composer qui est à jour, 
donc privilégier le lien en-dessous

Pour installer composer aller à cette page :

https://getcomposer.org/download/

```bash

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

```

Lancez ces lignes à l'endroit où sont stockés vos fichiers welcome.blade.php (la racine du projet).


résoudre :


voir la page suivante :
https://stackoverflow.com/questions/73485639/php-laravel-error-your-requirements-could-not-be-resolved-to-an-installable-se


```bash

sudo apt-get install php-xml

```

si il y a une erreur du type " le programme ne trouve pas ListeNoir/.env" 
("écrit en anglais")

ça veut dire qu'il n'y a pas de fichier ".env".
créer donc un fichier .env,
remplissez le avec les données de "example.env"
(généré automatiquement je crois, pour remplacer ".env")
Faites donc : 

```bash

composer install
php artisan key:generate
```

Pour lancer le projet voir cette page : 

https://laravel.com/docs/11.x/installation

terminal 1 :

```bash
 php artisan serve --host=192.168.1.14 --port=8000

```

terminal 2 :

```bash

npm run dev
```

https://gist.github.com/hootlex/da59b91c628a6688ceb1

Pour résoudre :

```
Error while migrating database (Laravel): table already exists
```

https://stackoverflow.com/questions/54023636/error-while-migrating-database-laravel-table-already-existsP

Pour résoudre

```

Laravel migration error - could not find driver - Illuminate\Database\QueryException

```

1) 1https://stackoverflow.com/questions/69594801/laravel-migration-error-could-not-find-driver-illuminate-database-queryexcep

"could not find driver" 

2) 
--> https://stackoverflow.com/questions/22463614/php-artisan-migrate-throwing-pdo-exception-could-not-find-driver-using-larav/25137901#25137901

3) 

" Unable to load dynamic library 'pdo_mysql.so'"
-->  https://stackoverflow.com/questions/62240102/php-warning-php-startup-unable-to-load-dynamic-library-pdo-mysql-so
 

 voir cette page pour le lancement du projet et certaiens configurations :

 https://www.cloudways.com/blog/connect-mariadb-to-laravel/

 Pour lancer rapidement, il faut deux terminaux :

https://mumin-ahmod.medium.com/how-to-run-an-existing-laravel-project-f99a70c0f112

1) écrire :

```
php artisan serve
```

2) 

```
npm run dev
```

L'organisation des fichiers :

- le fichier qui sert de point d'entrée est :

app.blade.php



CRUD REACT X LARAVEL :

https://medium.com/@laravelprotips/creating-a-react-js-laravel-api-crud-a-simple-guide-02702f93d26f



créer une API de ressource : 

```bash
php artisan make:resource BookResource
```

Create a FormRequest class for validation: 

```bash

php artisan make:request BookRequest

```

Dans 
```
api.php
```
on ajoute cette ligne pour préparer l'api :

```
//add by nathan
use App\Http\Controllers\BookController;
```

Il faut modifier web.php : 


```php

Route::view('/{any?}', 'dashboard')->where('any', '.*');

```

pour permettre le routage.

note : 

/*
ce qu'ils appellent app.jsx 
dans le second tuto serait en fait 
"index.jsx"
*/

Leur "Index.jsx" serait notre "BooksIndex.jsx"


Layouts/AppBooks.js

remplace: leur  

Layout/App.jsx


sont à modifier pour faire fonctionner le projet... : 

bookRequest.php, api.php,web.php

En cas d'erreur du type " 404 error " à la page d'accueil,
allez dans le dossier "ListeNoir/ListeNoir" puis tapez
"php artisan route:clear", suivi de "php artisan route:cache".

Cela devrait résoudre l'erreur.

