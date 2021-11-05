# PHPQA Docker

This topic contains instructions for installing PHPQA using Docker.

## Clone the repository

```bash
git clone https://github.com/markmon1919/kumu-php-analyzer.git
```

## Run the PHPQA using Docker compose

```bash
docker-compose run phpqa
```

***

## Build the PHPQA Docker image

Build the Docker image by executing the command:

```bash
docker build -t <TAG_NAME> .
```

## Run the PHPQA Docker container

Start the Docker container by executing the command:

```bash
docker run -it --rm <TAG_NAME> .
```

- entrypoint.sh will run automatically

- default mounted TARET_PATH for Lumen is : /project