<h1>How to Deploy Laravel Application on AWS EC2?</h1>

1. Create EC2 Instance<br>
https://www.howtoforge.com/how-to-create-an-ec2-instance-on-aws/

2. To host our Laravel app on Amazon EC2 we will be using the following technical stack:
- PHP 8.0 <br>
- Composer<br>
- Mysql<br>
- Nginx<br>

----------------------------------------------------Install PHP----------------------------------------------------
1. Install PHP 8.0<br>
- sudo apt install php8.0<br>

2. Install PHP Package<br>
- sudo apt install php8.0-common php8.0-mysql php8.0-cgi php8.0-mbstring php8.0-curl php8.0-gd php8.0-xml php8.0-xmlrpc<br>php-pear php8.0-fpm<br>


----------------------------------------------------Install Composer-----------------------------------------------
1. Install composer<br>
https://linuxhint.com/install-and-use-php-composer-ubuntu-22-04/



----------------------------------------------------Install Mysql---------------------------------------------------
1. Install MySql<br>
- sudo apt update<br>
- sudo apt install mysql-server<br>
- sudo systemctl start mysql.service<br>

2. Set Password For Root<br>
- sudo mysql<br>
- ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';<br>
- exit<br>

3. Create Database<br>
- mysql -u root -p<br>
- CREATE DATABASE fashion;<br>
- exit<br>

4. Import File Sql To Database<br>
- cd /var/www/Fashion_Shop_Laravel<br>
- mysql -u root -p fashion < shopfashion.sql



----------------------------------------------------Install Nginx----------------------------------------------------
1. Install Nginx<br>
- sudo apt install nginx

2. Start Nginx<br>
- sudo systemctl start nginx

3. Enable Nginx<br>
- sudo systemctl enable nginx

4. Check status Nginx<br>
- sudo systemctl status nginx

5. Check File Config Nginx<br>
- sudo nginx -t

6. Restart Nginx<br>
- sudo systemctl restart nginx



----------------------------------------------------Config Nginx----------------------------------------------------
1. Permission Folder<br>
- sudo chown -R www-data:www-data /var/www/Fashion_Shop_Laravel

2. To The File Config Nginx<br>
- cd /etc/nginx/sites-available/

3. To The File Default<br>
- sudo vim default

4. Create Value In File Default:<br>
server { <br>
    &nbsp;&nbsp;&nbsp;listen&nbsp; 80; <br>
    &nbsp;&nbsp;&nbsp;listen[::]:&nbsp;80; <br>
    &nbsp;&nbsp;&nbsp;root&nbsp; /var/www/Fashion_Shop_Laravel/public; <br>
    &nbsp;&nbsp;&nbsp;add_header&nbsp; X-Frame-Options "SAMEORIGIN"; <br>
    &nbsp;&nbsp;&nbsp;add_header&nbsp; X-Content-Type-Options "nosniff"; <br>
    &nbsp;&nbsp;&nbsp;index index.php; <br>
    &nbsp;&nbsp;&nbsp;charset&nbsp;utf-8; <br>
    &nbsp;&nbsp;&nbsp;location / { <br>
    &nbsp;&nbsp;&nbsp;    try_files $uri $uri/ /index.php?$query_string; <br>
    &nbsp;&nbsp;} <br>
    <!-- location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
    error_page 404 /index.php; -->
    &nbsp;&nbsp;location ~ \.php$ { <br>
    &nbsp;&nbsp;&nbsp;   fastcgi_pass unix:/var/run/php/php8.0-fpm.sock; <br>
    &nbsp;&nbsp;&nbsp;   fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name; <br>
    &nbsp;&nbsp;&nbsp;   include fastcgi_params; <br>
    &nbsp;&nbsp;&nbsp;} <br>
    &nbsp;&nbsp;location ~ /\.(?!well-known).* { <br>
    &nbsp;&nbsp;&nbsp;    deny all; <br>
    &nbsp;&nbsp;&nbsp; } <br>
} <br>



----------------------------------------------------Config Laravel----------------------------------------------------
1. Update Composer<br>
- sudo composer update

2. Copy File .env.example To .env<br>
- sudo cp .env.example .env

3. Generate Key<br>
- sudo php artisan key:generate
