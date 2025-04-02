# イメージの取り込み
FROM php:8.2-apache
# ミドルウェアをインストール
RUN apt-get update && apt-get install -y libonig-dev && docker-php-ext-install pdo_mysql mysqli mbstring
# ローカルで用意していた各連携ファイルをコンテナ上に配置する
ADD php.ini /usr/local/etc/php/