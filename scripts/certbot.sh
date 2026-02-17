#!/bin/bash
# Primeiro, desativa o redirect HTTPS temporariamente no .htaccess
# para o Certbot conseguir validar via HTTP
sed -i 's/^RewriteCond %{HTTPS} off/#RewriteCond %{HTTPS} off/' /var/www/psimi/.htaccess
sed -i 's/^RewriteRule \^(.\*).*https:\/\/%{HTTP_HOST}/#RewriteRule ^(.*)$ https:\/\/%{HTTP_HOST}/' /var/www/psimi/.htaccess

# Instala certbot se nao tiver
which certbot > /dev/null 2>&1 || apt-get install -y certbot python3-certbot-apache

# Roda certbot
certbot --apache -d michelyciardulo.com.br -d www.michelyciardulo.com.br --non-interactive --agree-tos --email contato@linve.com.br --redirect

# Reativa HTTPS redirect no .htaccess
sed -i 's/^#RewriteCond %{HTTPS} off/RewriteCond %{HTTPS} off/' /var/www/psimi/.htaccess
sed -i 's/^#RewriteRule \^(.\*).*https:\/\/%{HTTP_HOST}/RewriteRule ^(.*)$ https:\/\/%{HTTP_HOST}/' /var/www/psimi/.htaccess

echo "=== RESULTADO ==="
ls /etc/apache2/sites-enabled/ | grep psimi
apache2ctl -S 2>&1 | grep michely
