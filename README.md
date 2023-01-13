# Symfony 5 CRUD Docker

A [Dockerized](https://www.docker.com/) [Symfony](https://symfony.com) 5 CRUD project, with full [HTTP/2](https://symfony.com/doc/current/weblink.html), HTTP/3 and HTTPS support.

![CI](https://github.com/superrnovae/symfony-5-crud-docker/workflows/CI/badge.svg)

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --pull --no-cache` to build fresh images
3. Run `docker compose up` (the logs will be displayed in the current shell)
4. Open `https://localhost:8081` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

**Enjoy!**

## Docs

## Credits

Created by [superrnovae](https://github.com/superrnovae), co-maintained by [Yalinkilinc-Omer](https://github.com/Yalinkilinc-Omer).
