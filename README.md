# questions API
This project was created for educational purposes, and is being gradually increased. The proposal is to adapt the project to all good design standards. Contributions are always welcome :D

## Data base
The database, in sql format, is available at the root of the project, there is also an image of the model.
For model implementation, you can also implement via migrations. For this, just be inside the
project folder and enter the following command:
```
//generate tables
php artisan migrate

//drop table
php artizan migrate:rollback

//new tables
 php artisan make:migration create_nameTable_table
```

## Get Started
```
composer install
\\ After installation, to start the service, just run
php -S localhost:8000 -t public
``` 
