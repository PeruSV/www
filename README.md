# PeruSV Web site

## Word Press code

- path: /src
- config file: /src/wp-config.php 

## DB file
- path /db/*.sql

## Installation

Using apache, add a vhost and point its document root to /src.

Sample Vhost:
```
<VirtualHost *:3080>
        ServerName perusv.loc

        ServerAdmin webmaster@localhost
        DocumentRoot /home/manuel/wwwroot/perusv/src

        <Directory /home/manuel/wwwroot/perusv/src>
                Options Indexes FollowSymLinks
                AllowOverride None
                Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/peru-sv_error.log
        CustomLog ${APACHE_LOG_DIR}/peru-sv_access.log combined
</VirtualHost>
```

Using MySQL add database 'perusv' and run the .sql file on /db path.

To run the sql file:

```
$ cd /go/to/sql/file.sql
$ mysql -u[user] -p [database] < file.sql
```
