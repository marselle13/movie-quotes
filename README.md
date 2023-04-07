# Quote App

This is a web application that allows users to add and manage movie quotes in English and Georgian languages. Users can easily add new movies and their quotes, as well as view and edit existing ones. 

#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 8px" /> *PHP@8.2 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 8px" /> *MYSQL@8 and up*
* <img src="readme/assets/npm.png" width="35" style="position: relative; top: 8px" /> *npm@9.6 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 8px" /> *composer@2.6 and up*

#
### Tech Stack
* <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@10.x](https://laravel.com/docs/10.x) - back-end framework
* <img src="readme/assets/tailwind.png" height="18" style="position: relative; top: 4px" /> [tailwind@3.3](https://tailwindcss.com/docs/guides/laravel) - CSS framework
* <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#
### Getting Start

1\. First of all you need to clone Quote app repository from github:
```sh
git clone https://github.com/RedberryInternship/nikoloz-gogua-movie-quotes.git
```
2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```
3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```
4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

after setting up **.env** file, execute:
```sh
  php artisan key:generate
```
in order to generate auth key.

##### Now, you should be good to go!

#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

then run vite config:

```sh
  npm run dev
```
it builds css files into executable scripts.

#
### Project Structure

[Database Design Diagram](https://drawsql.app/teams/nikas-team-2/diagrams/quote-app "Draw.io")
