# define main image
FROM nginx:1.23.3

# create directories
RUN mkdir /etc/nginx/sites-enabled

# copy the files
COPY ./config/nginx.conf /etc/nginx/nginx.conf
COPY ./config/fastcgi.conf /etc/nginx/fastcgi.conf
COPY ./config/default.conf /etc/nginx/conf.d/default.conf

# set main executable
CMD ["nginx"]

# export ports
EXPOSE 80
EXPOSE 443
