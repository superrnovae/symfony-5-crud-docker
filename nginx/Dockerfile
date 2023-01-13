FROM nginx:1.23.3

RUN mkdir /etc/nginx/sites-enabled

COPY ./config/nginx.conf /etc/nginx/nginx.conf
COPY ./config/fastcgi.conf /etc/nginx/fastcgi.conf
COPY ./config/default.conf /etc/nginx/conf.d/default.conf

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
