# Install Wordpress
```bash
$ docker-compose \
-f $(pwd)/docker/services/wordpress.yaml --project-directory $(pwd) \
run --rm --no-deps --user $(id -u):$(id -g) \
-e WP_VERSION=5.4 \
install
```

# Start Wordpress
```bash
$ docker-compose up -d web database
```
