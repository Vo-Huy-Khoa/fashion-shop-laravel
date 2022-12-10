How to deploy?  
- PHP 8.0 
- Composer
- Mysql
- Nginx

-----------------------Install PHP-----------------------------------
1. Install PHP 8.0
sudo apt install php8.0

2. Install PHP Package
sudo apt install php8.0-common php8.0-mysql php8.0-cgi php8.0-mbstring php8.0-curl php8.0-gd php8.0-xml php8.0-xmlrpc php-pear php8.0-fpm


-----------------------Install Composer-------------------------------
1. Install composer
https://linuxhint.com/install-and-use-php-composer-ubuntu-22-04/



-----------------------Install Mysql----------------------------------
1. Install MySql
sudo apt update
sudo apt install mysql-server
sudo systemctl start mysql.service

2. Set Password For Root
sudo mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
exit

3. Create Database
mysql -u root -p
CREATE DATABASE fashion;
exit

4. Import File Sql To Database
mysql -u root -p fashion < shopfashion.sql



-----------------------Install Nginx-----------------------------------
CMD Nginx:
https://phoenixnap.com/kb/how-to-install-nginx-on-ubuntu-20-04

2. Install Nginx
sudo apt install nginx

3. Start Nginx
sudo systemctl start nginx

4. Enable Nginx
sudo systemctl enable nginx

5. Check status Nginx
sudo systemctl status nginx

6. Check File Config Nginx
sudo nginx –t

6. Restart Nginx
sudo systemctl restart nginx



-----------------------Config Nginx-----------------------------------

2. Permission Folder
sudo chown -R www-data:www-data /var/www/Fashion_Shop_Laravel

3. To The File Config Nginx
cd /etc/nginx/sites-available/

4. To The File Default
vim default

5. Create Value In File Default:
server {
    listen 80;
    listen [::]:80;
    root /var/www/Fashion_Shop_Laravel/public;
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";
    index index.php;
    charset utf-8;
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
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



-----------------------Config Laravel-----------------------------------
1. Update Composer
composer update

2. Copy File .env.example To .env
cp .env.example .env

3. Generate Key
php artisan key:generate





<h1>Shop Fashion</h1>

<h5>1. Register</h5>
<p>Make an account for yourself..</p>
<a href="https://ibb.co/QrBYsHx"><img width = "80%"; src="https://i.ibb.co/18VRHX4/2.png" alt="2" border="0"></a>


<h5>2. Login</h5>
<p>Log in with your newly established or existing account..</p>
<br>
<a href="https://ibb.co/FhShw4N"><img width = "80%"; src="https://i.ibb.co/wd9dWh3/login.png" alt="login" border="0"></a>

<h5>3. Home</h5>
<p>Categories, product listings, and related articles are shown on the system's homepage..</p>
<br>
<a href="https://ibb.co/0BzbXGj"><img width = "80%"; src="https://i.ibb.co/FsdTWDb/home.png" alt="home" border="0"></a>

<h5>4. Shop</h5>
<p>Show a list of goods that are on sale, with options to search by color, size, and price..</p>
<br>
<a href="https://ibb.co/ZNXLMsL"><img width = "80%"; src="https://i.ibb.co/g69jR1j/shop.png" alt="shop" border="0"></a>

<h5>5. Product detail</h5>
<p>Allow purchasing of the product by displaying thorough information about it.</p>
<br>
<a href="https://ibb.co/DfFZBZF"><img width = "80%"; src="https://i.ibb.co/60SkKkS/detail.png" alt="detail" border="0"></a>

<h5>6. Blog</h5>
<p>Show a collection of articles about product selection guidelines and other connected topics.</p>
<br>
<a href="https://ibb.co/7Yhwkrs"><img width = "80%"; src="https://i.ibb.co/bWtSbNc/blog.png" alt="blog" border="0"></a>

<h5>7. Blog Details</h5>
<p>Details of the post will be shown.</p>
<a href="https://ibb.co/D9R7KCK"><img width = "80%"; src="https://i.ibb.co/zX4SfRf/blogdetail.png" alt="blogdetail" border="0"></a>
<br>

<h5>8. Cart</h5>
<p>Show a list of all the things you've bought and how much of each you've bought.</p>
<a href="https://ibb.co/9Tw7hC8"><img width = "80%"; src="https://i.ibb.co/r6bV317/cart.png" alt="cart" border="0"></a>

<h5>9. Check out</h5>
<p>Fill up the client details and inspect the merchandise before placing a purchase.</p>
<a href="https://ibb.co/KGWPxfM"><img width = "80%"; src="https://i.ibb.co/mB4j52L/checkout.png" alt="checkout" border="0"></a>

<h5>10. Contact</h5>
<p>Displays store information and contacts.</p>
<br>
<a href="https://ibb.co/qFjGP5Z"><img width = "80%"; src="https://i.ibb.co/mFTsM8x/contact.png" alt="contact" border="0"></a>

<h5>11. Login Admin</h5>
<p>As the system administrator, log in.</p>
<a href=Doachboard"https://ibb.co/gMYmFYZ"><img width = "80%"; src="https://i.ibb.co/mCpbFp5/loginadmin.png" alt="loginadmin" border="0"></a>

<h5>12.Dashboard</h5>
<p>As the system administrator, log in.</p>
<a href="https://ibb.co/tHjk9Dn"><img width = "80%"; src="https://i.ibb.co/0n48xr1/homeadmin.png" alt="homeadmin" border="0"></a>


<h5>13. List Product</h5>
<p>List of products is displayed. It is possible to add, modify, and delete products here.</p>
<a href="https://ibb.co/5BppDzR"><img width = "80%"; src="https://i.ibb.co/QrSSBqK/1.png" alt="1" border="0"></a>

<h5>14. Add Product</h5>
<p>Fill in and choose all of the necessary information to add items.</p>
<a href="https://ibb.co/840Yjr3"><img width = "80%"; src="https://i.ibb.co/wrRcKSH/addproduct.png" alt="addproduct" border="0"></a>

<h5>15. Oder Details</h5>
<p>Shows the orders that the user has placed. Admins have the ability to close or cancel orders.</p>
<a href="https://ibb.co/x1S3S7P"><img width = "80%"; src="https://i.ibb.co/2v757km/oderdetail.png" alt="oderdetail" border="0"></a>

