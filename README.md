# dockerDevDemo
Docker image for php development demos


Build image:
```docker build -t <image name> .```


Run container from project root:
```docker run -d -p 80:80 -p 9000:9000 -v /$(pwd)/www:/var/www/site <image name>```
To have mapped folders working on Windows, do not forget to add them in VirtualBox mapped
constantly with autostart with same path on machine. The best thing is to use subdirecory of ```C:/Users``` as it's
mapped by default.

To run drupal with linked mysql database, do the following:
1. Unpack Drupal archive in `www` subdirectory.
2. Run official mysql image with environment variables provided for user, password and created database name:
```
docker run -d --name <mysql container name> -e MYSQL_USER=<user> -e MYSQL_PASSWORD=<password> -e MYSQL_ROOT_PASSWORD=<password> -e MYSQL_DATABASE=<db name> mysql
```
3. Run container with mysql container linked:
```
docker run -d -p 80:80 -p 9000:9000 -v /$(pwd)/www:/var/www/site --link <mysql container name>:myqsl <image name>
```
4. Open [browser](http://192.168.99.100/) to install Drupal.
Use <user>, <password> and <db_name> from second step in Drupal configuration.
Database host in Advanced Settings is `mysql`.

For php debug troubleshooting, see [forum](https://devnet.jetbrains.com/message/5533800).
