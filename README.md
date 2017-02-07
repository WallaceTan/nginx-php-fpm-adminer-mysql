# Setup instructions
## Append hostname to /etc/hosts file
```
127.0.0.1	php-docker.local
```
## Start docker containers
```
cd [project_root]/.docker/
docker-compose up --build --remove-orphans
```

## Open hyperlink in web browser
http://php-docker.local/autologin.php
