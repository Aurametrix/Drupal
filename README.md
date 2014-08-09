Drupal
======

Content Management System written in PhP

Supports both a web server capable of running PHP (including Apache, IIS, Lighttpd, Hiawatha, Cherokee or Nginx) and a database (such as MySQL, MongoDB, MariaDB, PostgreSQL, SQLite, or Microsoft SQL Server) to store content and settings.

To download:
https://www.drupal.org/download
https://www.drupal.org/project/drupal/git-instructions

Requirements:

Drupal 7: PHP 5.2.5 or higher (5.3 recommended).
        : MySQL 5.0.15 or higher with PDO, PostgreSQL 8.3 or higher with PDO, SQLite 3.3.7 or higher

Drupal 8: PHP 5.4 or higher.
        : MySQL 5.0.15/MariaDB/Percona/equivalent or higher with PDO and an InnoDB-compatible primary storage engine, PostgreSQL 8.3 or higher with PDO, SQLite 3.3.7 or higher

On Mac
/etc/apache2/httpd.conf
uncomment:
"#LoadModule php5_module


To complete your setup or MySQL:

sudo vim /etc/profile
Add alias

alias mysql=/usr/local/mysql/bin/mysql
alias mysqladmin=/usr/local/mysql/bin/mysqladmin
Then set your root password

mysqladmin -u root password 'yourPassword'
Then you can login with

mysql -u root -p
