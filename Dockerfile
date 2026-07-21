# Usa a imagem oficial do PHP 8.3 com Apache
FROM php:8.3-apache

# (Opcional) Habilita o mod_rewrite do Apache (útil para URLs amigáveis)
RUN a2enmod rewrite

# Copia os arquivos do seu site para o DocumentRoot do Apache
COPY html/ /var/www/html/

# (Opcional) Ajusta as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Expõe a porta 80
EXPOSE 80
