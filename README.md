Steps to run the application

1. Download the code from my git and paste it into your htdocs folder, I have used XAMPP in my local
2. Goto phpmyadmin(http://localhost/phpmyadmin/) and create db name called "laravel_crud" same I configurred in env file.
3. goto project path via command promt or git bash and then you can run migration command "php artisan migrate" in order  to import tables and data
4. run the application (http://localhost/Laravel8Task/) and you can home page with list of existing entries and you can edit, delete and can mark as completed.


Note:
1.As alternate to the migration you can import database file after creating db name. Please find the exported sql file in the path below
C:\xampp\htdocs\Laravel8Task\SQL\laravel_crud.sql

2. "vendor" folder(as it is huge in size) and ".env" file are in gitignore and I have removed from  gitignore and uploaded to git.