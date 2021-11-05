# PHPQA Docker image

This topic contains instructions for installing PHPQA using the Docker.

## Run the PHPQA Docker image

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

- Default mounted TARET_PATH for Lumen is: /project