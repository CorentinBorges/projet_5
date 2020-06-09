# Le Blog : Projet 5

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/9396381189da418d9e584fc9f98876d8)](https://app.codacy.com/manual/CorentinBorges/projet_5?utm_source=github.com&utm_medium=referral&utm_content=CorentinBorges/projet_5&utm_campaign=Badge_Grade_Dashboard)

This is my professional blog

## Installing project

1.  Download:
    ```bash
    $ git clone https://github.com/CorentinBorges/projet_5
    ```

2. Move to the project
    ```bash
    $ cd projet_5
    ``` 

3.  Install:
    ```
    $ composer install
    ```

4.  Create a database with your favorite tool and name it 'blog'

5.  Create a 'dev.php' file in 'config'
    ```php
    <?php
    
    //Database
    const DB_SERVER_HOST = 'localhost';
    const DB_NAME = 'blog';
    const DB_CHARSET = 'utf8';
    const DB_HOST = 'mysql:host='.DB_SERVER_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
    const DB_USER = "username";
    const DB_PASS = "password";
    
    //Mail
    const MAIL_HOST_NAME='hostname';
    const MAIL_USERNAME = 'username';
    const MAIL_PASSWORD = 'password';
    const MAIL_ADMIN = 'adminmail@gmail.com';
    const MAIL_ADMIN_NAME = 'Admin';
    const MAIL_PORT='port number';
    const EMAIL_ENCRYPTION = 'tls';
    ```

6.  Launch your web server with:
    ```bash
    $ php -S localhost -t public/
    ```
7.  Create an admin user and give it the appropriate role in your database

## Built With
*   [Composer 1.10.5](https://getcomposer.org/)
*   [Twig 3.0.3](https://twig.symfony.com/)
*   [Swiftmailer 6.2](https://swiftmailer.symfony.com/)
