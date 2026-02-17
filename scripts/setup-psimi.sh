#!/bin/bash
set -e

# PHP-FPM pool
cat > /etc/php/8.4/fpm/pool.d/psimi.conf << 'POOL'
[psimi]
user = psimi
group = psimi
listen = 127.0.0.1:9005
listen.owner = www-data
listen.group = www-data
pm = ondemand
pm.max_children = 5
pm.process_idle_timeout = 10s
pm.max_requests = 500
php_admin_value[open_basedir] = /var/www/psimi:/tmp:/var/lib/php/sessions
php_admin_value[upload_tmp_dir] = /tmp
php_admin_value[session.save_path] = /var/lib/php/sessions
POOL

echo "PHP-FPM pool criado"

# Apache VHost HTTP (porta 80)
cat > /etc/apache2/sites-available/psimi.conf << 'VHOST'
<VirtualHost *:80>
    ServerName michelyciardulo.com.br
    ServerAlias www.michelyciardulo.com.br
    DocumentRoot /var/www/psimi

    <Directory /var/www/psimi>
        Options -Indexes +FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    <FilesMatch \.php$>
        SetHandler "proxy:fcgi://127.0.0.1:9005"
    </FilesMatch>

    ErrorLog ${APACHE_LOG_DIR}/psimi_error.log
    CustomLog ${APACHE_LOG_DIR}/psimi_access.log combined
</VirtualHost>
VHOST

echo "Apache VHost criado"

# Ativar site
a2ensite psimi.conf

# Permissões
chown -R psimi:psimi /var/www/psimi
chmod -R 755 /var/www/psimi

# Reiniciar serviços
systemctl restart php8.4-fpm
systemctl reload apache2

echo "=== PRONTO ==="
echo "PHP-FPM psimi na porta 9005"
echo "Apache VHost michelyciardulo.com.br ativo"
systemctl status php8.4-fpm --no-pager | head -5
apache2ctl -S 2>&1 | grep michely
