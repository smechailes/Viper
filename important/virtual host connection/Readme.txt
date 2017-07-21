#Add the following line in C:/WINDOWS/system32/drivers/etc/hosts at the #very last

127.0.0.1 item.dev

#Add the following line in C:\xampp\apache\conf\extra\httpd-vhosts.conf
#After adding this, you 
NameVirtualHost *:80
<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs"
ServerName localhost
</VirtualHost>


<VirtualHost *:80>
DocumentRoot "C:/xampp/htdocs/exp/"
ServerName item.dev
ServerAlias item.dev
<Directory "c:/xampp/htdocs/exp/">
Order allow,deny
Allow from all
</Directory>
</VirtualHost>