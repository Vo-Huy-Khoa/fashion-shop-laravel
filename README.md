<h2>Link Product: <a href="http://13.231.253.78" target="_blank">Fashion Shop</a></h2>

<h1>How to Deploy Laravel Application on AWS EC2?</h1>

1. Create EC2 Instance<br>
https://www.howtoforge.com/how-to-create-an-ec2-instance-on-aws/

2. To host our Laravel app on Amazon EC2 we will be using the following technical stack:
- PHP 8.0 <br>
- Composer<br>
- Mysql<br>
- Nginx<br>

-----------------------------------------------------------------------------Install PHP-----------------------------------------------------------------------------

1. Install PHP 8.0
```bash
sudo apt install php8.0
```
2. Install PHP Package
```bash
sudo apt install php8.0-common php8.0-mysql php8.0-cgi php8.0-mbstring php8.0-curl php8.0-gd php8.0-xml php8.0-xmlrpcphp-pear php8.0-fpm
```

-----------------------------------------------------------------------------Install Composer------------------------------------------------------------------------
1. Install composer <br>
https://linuxhint.com/install-and-use-php-composer-ubuntu-22-04/


-----------------------------------------------------------------------------Install Mysql----------------------------------------------------------------------------

1. Install MySql
```bash
sudo apt update
sudo apt install mysql-server
sudo systemctl start mysql.service
```

2. Set Password For Root
```bash
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
exit
```

3. Create Database
```bash
mysql -u root -p
CREATE DATABASE fashion;
exit
```
4. Import File Sql To Database
```bash
mysql -u root -p fashion < shopfashion.sql
```
-----------------------------------------------------------------------------Install Nginx-----------------------------------------------------------------------------

1. Install Nginx
```bash
sudo apt install nginx
```
2. Start Nginx
```bash
sudo systemctl start nginx
```
3. Enable Nginx
```bash
sudo systemctl enable nginx
```
4. Check status Nginx
```bash
sudo systemctl status nginx
```
5. Check File Config Nginx
```bash
sudo nginx –t
```
6. Restart Nginx
```bash
sudo systemctl restart nginx
```
-----------------------------------------------------------------------------Config Nginx-----------------------------------------------------------------------------

1. Permission Folder
```bash
sudo chown -R www-data:www-data /var/www/Fashion_Shop_Laravel
```
2. To The File Config Nginx
```bash
cd /etc/nginx/sites-available/
```
3. To The File Default
```bash
vim default
```
4. Create Value In File Default:
```bash
server {
  listen:80;
  listen[::]:80;
  root/var/www/Fashion_Shop_Laravel/public;
  add_headerX-Frame-Options "SAMEORIGIN";
  add_headerX-Content-Type-Options "nosniff";
  index index.php;
  charsetutf-8;
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }
  <!-- location = /favicon.ico { access_log off; log_not_found off; }
  location = /robots.txt  { access_log off; log_not_found off; }
  error_page 404 /index.php; -->
  location ~ \.php$ {
   fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
   fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
   include fastcgi_params;
  }
  location ~ /\.(?!well-known).* {
    deny all;
  }
}
```
-----------------------------------------------------------------------------Config Laravel-----------------------------------------------------------------------------
1. Update Composer
```bash
composer update
```
2. Copy File .env.example To .env
```bash
cp .env.example .env
```
3. Generate Key
```bash
php artisan key:generate
```
