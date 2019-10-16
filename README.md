# Laravel-Docker

A simple environment to develop your Laravel applications.

### To install Composer dependencies:

```bash
$ docker run --rm -v $(pwd):/app composer install
```

---

### If you are using linux:

This will generate the .docker folder

```bash
$ docker-compose exec php php artisan migrate
```

```bash
$ docker-compose exec php php artisan migrate
```

If there's an error, do this:

```bash
$ docker-compose exec mysql bash
```

```bash
$ id mysql
```

```bash
$ exit
```

```bash
$ sudo chown -R <id> .docker
```
