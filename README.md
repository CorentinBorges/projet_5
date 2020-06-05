# Le Blog : Projet 5

This is my professional blog

## Installing project

1. Clone or Download project
2. Put the folder 'project_5' to the root of your localhost
4. Once ```composer``` is installed. Open your terminal, go to ```yourLocalhostDirectory/Projet_5``` and type ````composer install````. 
This command will install all composer's dependencies
5. Import the blog.db file in your database
6. Configure the database infos in [this file](config/dev.php)
7. Configure the mail infos [here](config/Mail.php) (I recommend to use [MailTrap](https://mailtrap.io/) to test sending mails locally)
8. Write 'localhost/projet_5/public' in the address bar of your favorite browser and press enter


## Built With
* [Composer 1.10.5](https://getcomposer.org/)
* [Twig 3.0.3](https://twig.symfony.com/)
* [Swiftmailer 6.2](https://swiftmailer.symfony.com/)
