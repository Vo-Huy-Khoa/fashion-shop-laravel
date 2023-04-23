<h2>Link Product: <a href="http://ec2-54-199-11-6.ap-northeast-1.compute.amazonaws.com/" target="_blank">Fashion Shop</a></h2>

<h1>How to Deploy Laravel Application on AWS EC2?</h1>

1. Create EC2 Instance<br>
https://www.howtoforge.com/how-to-create-an-ec2-instance-on-aws/

2. To host our Laravel app on Amazon EC2 we will be using the following technical stack:
- PHP 8.0 <br>
- Composer<br>
- Mysql<br>
- Nginx<br>


--------------------------------------------------Setup project--------------------------------------------------

1. Permission Folder:
```bash
sudo chown -R www-data:www-data /var/www
```
2. Clone project:
```bash
cd /var/www
git clone https://github.com/Vo-Huy-Khoa/fashion-shop-laravel.git
```
--------------------------------------------------Install PHP--------------------------------------------------

1. updating your package list by running the following command:
```bash
sudo apt-get update
```
2. Add the ondrej/php PPA using the following commands:
```bash
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
```
3. Once the PPA is added and your package list is updated, try installing the packages again:
```bash
sudo apt-get install php8.0-common php8.0-mysql php8.0-cgi php8.0-mbstring php8.0-curl php8.0-gd php8.0-xml php8.0-xmlrpc php-pear php8.0-fpm
```
--------------------------------------------------Install Composer---------------------------------------------
1. Download the installer: <br>
``` bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
```

2. Verify the installer: <br>
``` bash
HASH="$(curl -sS https://composer.github.io/installer.sig)"
echo "$HASH composer-setup.php" | sha384sum -c -
```
3. Install Composer: <br>
``` bash
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
4. Verify the installation: <br>
``` bash
composer --version
```

--------------------------------------------------Install Mysql------------------------------------------------

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
--------------------------------------------------Install Nginx------------------------------------------------

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
sudo nginx -t
```
6. Restart Nginx
```bash
sudo systemctl restart nginx
```
--------------------------------------------------Config Nginx-------------------------------------------------

1. To The File Config Nginx:
```bash
cd /etc/nginx/sites-available/
```
2. To the file default:
```bash
sudo vim default
```
3. Create Value In File Default:
```bash
server {
  listen 80;
  listen [::]:80;
  root /var/www/fashion-shop-laravel/public;
  add_header X-Frame-Options "SAMEORIGIN";
  add_header X-Content-Type-Options "nosniff";
  index index.php;
  charset utf-8;
  
  location / {
    try_files $uri $uri/ /index.php?$query_string;
  }
  
  location = /favicon.ico { 
    access_log off; 
    log_not_found off; 
  }
  
  location = /robots.txt  { 
    access_log off; 
    log_not_found off; 
  }
  
  error_page 404 /index.php;
  
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
6. Check File Config Nginx
```bash
sudo nginx -t
```
--------------------------------------------------Config Laravel--------------------------------------------------
1. Update Composer
```bash
composer update
```
2. Generate Key
```bash
php artisan key:generate
```
