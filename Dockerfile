FROM jakzal/phpqa:alpine

# RUN apk add --no-cache libxml2-dev \
#  && docker-php-ext-install soap 

COPY ./project /project
COPY ./entrypoint.sh /entrypoint.sh
COPY ./log /log

WORKDIR /

ENTRYPOINT [ "/entrypoint.sh" ]