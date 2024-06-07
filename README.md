
## Using the queue

The system utilizes queued jobs for tasks such as capturing page views and sending emails.

To run the queue manually you will have to run the command
```shell
php artisan queue:listen
```

More Info: https://laravel.com/docs/10.x/queues

## Installation

The following pre-requisites are needed to run the project

-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/)
-   [NPM](https://www.npmjs.com/get-npm)
-   [PHP](https://www.php.net/downloads.php)
-   [MySQL](https://dev.mysql.com/downloads/installer/) (or you can use SQLite file database)

For PHP and MySQL, [ XAMPP ](https://www.apachefriends.org/download.html) or [WAMP server](https://www.wampserver.com/en/download-wampserver-64bits/) can be used.

1.  Clone the repo

    ```sh
    git clone https://github.com/sachintha-lk/CRM-laravel
    ```

2.  Move in to the folder

    ```sh
    cd CRM-laravel
    ```

3.  Install Composer packages

    ```sh
    composer install
    ```

4.  Install NPM packages

    ```sh
    npm install
    ```

5.  Create a .env file by copying the .env.example file



6.  Generate an app encryption key

    ```sh
    php artisan key:generate
    ```

7.  Create a database and add the database credentials to the .env file

    Follow instructions from Laravel docs if you are using SQLite. https://laravel.com/docs/10.x/database#sqlite-configuration

    Note: A sqlite database file is committed to the repository you can use it by configuring the env following instructions of the above link
8.  Run the migrations

    ```sh
    php artisan migrate
    ```

9.  Run the seeders

    ```sh
    php artisan db:seed
    ```

10. Run the project

    ```sh
    npm run dev
    ```

    Keep this running and open a new terminal and run

    ```sh
    php artisan serve
    ```

11. Visit the site at http://localhost:8000

**Note:** The Admin user is created using the seeder. The default credentials are as follows:<br>
email : `admin@badmintonbliss.com`<br>
password : `adminpassword`

**Note**
Make sure you set up an email service provider in the env file. For testing purposes a service like  [Mailtrap](https://mailtrap.io/) can be used.

For the email and page view capture to work, [the queue should be run](#using-the-queue)

## Future Development
**This project was developed for an academic assignment, the project will be further developed in the future as a portfolio project**

If you have any suggestions create an issue on the repository.


![CatComputerGIF](https://github.com/sachintha-lk/CRM-laravel/assets/68807141/194f3a88-16b8-421f-9c5e-c076e56f8bdd)
