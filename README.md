**Byng Test Project**
===================


In order for the project to be set up please follow the following instructions.

> - Clone the repo on your local machine.
> - Cd into the project and do composer install. That would require for Composer to be installed globally on your local machine. Further info is available at https://getcomposer.org/.
> - Rename the .env.example file in root folder to .env.

----------


Database Settings
---------------------

> - Within .env file change the set the database name, database username and database user password.

> - Once thats being set up then please run the *`php artisan migrate`* command form terminal. That should create the database. Migration files can be found under Byng/database/migrations
> - After the database is set up with tables then run the command php artisan db:seed from the terminal. That should populate ***articles*** table with Json file provided with test and a couple of registered users in ***users*** table with dummy data as was provided.
> - However if you getting error then please import the database.sql file which can be found in the root folder


----------


Controllers
-------------

> - Controllers can be found under app/Http/Controllers 

----------


Models
-------------

> - Models can be found under app/ i.e User.php and articles.php 

----------


Routes
-------------

> - All http routes are configured from route.php file which can be found under app/Http/routes.php 

----------


Config Files
-------------

> - All config files are found under config directory in root folder, which shouldn't really require any changing.

----------

Support
-------------

> - The support directory is located under app/support which has a helper.php file that is used to add a class for 
    purpose filtering content.

----------


Views
-------------

> - All the View files and the main app.scss file can be found under resources directory

----------


Scss
-------------

> - The ***app.scss*** file can be found under *Byng/resources/assets/sass*

----------


Public Folder
-------------

> - The public folder holds the compiled *css, images and js* directories.

----------


Scss
-------------

> - The ***app.scss*** file can be found under *Byng/resources/assets/sass*

----------


What's been accomplished
--------------------------------

> - User visits the home page and see the filtered content i.e. youtube articles only.
> - To read all the articles user needs to sign in by clicking on login button at the top bar
> - The form will show errors if submitted with empty fields
> - If wrong credentials are provided then it will redirect the user back to homepage with visual feedback
> - Articles page can not be accessed without being successfully logged in
> - Once logged in successfully, user is visually notified and the navigation bar changes.

