Steps to run the application

1. Download the code from my git and paste it into your htdocs folder, I have used XAMPP in my local
2. Goto PHPMyAdmin(http://localhost/phpmyadmin/) and create a DB name called "laravel_crud" the same one I configured in the env file.
3. goto project path via command prompt or git bash and then you can run migration command "php artisan migrate" in order  to import tables and data
4. run the application (http://localhost/Laravel8Task/) and you can home page with a list of existing entries and you can edit, delete, and can mark as completed.

Note:
1. As an alternative to the migration you can import the database file after creating the DB name. Please find the exported SQL file in the path below
C:\xampp\htdocs\Laravel8Task\SQL\laravel_crud.sql

2. "vendor" folder(as it is huge in size) and ".env" file is in gitignore and I have removed them from gitignore and uploaded them to git.


Used Platforms
1. Xammp Server
2. Visual Studio code IDE
3. gitbash
4. My Github Account

Laravel Version Used
Laravel 8