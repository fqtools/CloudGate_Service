
# Alpine Latest 最新版本
FROM alpine:latest

# BurpSuite Design
MAINTAINER BurpSuite <Service@BurpSuite.Site>

# APK 自动安装 PHP 相关的依赖包
RUN apk --update add wget nginx php7 php7-fpm php7-curl php7-openssl openssl supervisor --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/

# 移动 NGINX 配置文件
COPY Docker/nginx.conf /etc/nginx/nginx.conf

# 移动 PHP 配置文件
COPY Docker/fpm-pool.conf /etc/php7/php-fpm.d/zzz_custom.conf
COPY Docker/php.ini /etc/php7/conf.d/zzz_custom.ini

# 移动 SSL 配置文件
# ADD CertificateAuthority/BurpSuite.crt /etc/nginx/
# ADD CertificateAuthority/BurpSuite.key /etc/nginx/
# ADD CertificateAuthority/BurpSuite.pem /etc/ssl/certs/

# 移动 Supervisord 文件
COPY Docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# 默认放置 Data 的目录
RUN mkdir -p /var/www/html
COPY Data/ /var/www/html/
WORKDIR /var/www/html

# 暴露容器端口
EXPOSE 10 80 443

# 默认执行指令
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]