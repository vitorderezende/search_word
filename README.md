Hi Sarah,

Hi Sarah, how's it going?

I am forwarding the application in zip with the instructions, any questions you may ask me.

The application was made in Laravel 5.8 with MySQL database.

In the search.zip file it contains the application unzip and follow the steps below:

1. Copy .env.example file to .env and edit database credentials there

2. Run composer install

3. ***Import Database MySQL database (370k data)

Create database  search_word  

File in => ..\storage\app\public\search_word.sql
command: mysql -u username -p database_name < search_word.sql

5. Alter the in php.ini
memory_limit=1024M

6. That's it: launch the main URL (possible to use *** php artisan serve)