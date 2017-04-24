# BoardingCards

## Requirements
* php 5.5^
* composer
* phpunit


## How to run the project

* Install composer
* Install composer packages (for the installation of PHPUnit only)
* execute index.php via php-cli

```
curl -s https://getcomposer.org/installer | php
php composer.phar install 
php index.php
```

Note: just in case if you get an error try executing below
```
php composer.phar dump-autoload
```


## What it does

* the card-set.php file contains an array created with given sample data. 
* the index.php file will import it and shuffle the array.
* then it will created a CardStack and will sort it and print the journey details using the implemented PHP library.


## How to run unit tests

```
vendor/bin/phpunit tests
```


&copy; 2017 Chathura Sandeepa
