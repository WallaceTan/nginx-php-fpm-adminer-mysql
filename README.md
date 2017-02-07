# Setup instructions
## Append hostname to /etc/hosts file
```
127.0.0.1	php-docker.local
```
## Start docker containers
```
cd nginx-php-fpm-adminer-mysql/.docker/
docker-compose up --build --remove-orphans -d
```

## Open hyperlink in web browser
- http://php-docker.local/autologin.php
- http://php-docker.local/mysqli_connect.php
