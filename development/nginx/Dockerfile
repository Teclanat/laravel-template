FROM nginx:1.10-alpine
ADD development/vhost.conf /etc/nginx/conf.d/default.conf
COPY . /var/www/public
RUN chmod -R 777 /var/www/public/storage/*
#RUN chmod -R 777 /usr/share/nginx/storage/*
RUN ln -s public html





