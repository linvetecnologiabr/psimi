#!/bin/bash
set -e

echo "=== 1. Criando usuario psimi ==="
if id "psimi" &>/dev/null; then
    echo "Usuario psimi ja existe"
else
    useradd -m -d /var/www/psimi -s /bin/bash psimi
    echo "Usuario psimi criado"
fi
chmod 750 /var/www/psimi

echo "=== 2. Clonando repo ==="
if [ -d "/var/www/psimi/.git" ]; then
    echo "Repo ja existe, fazendo pull"
    cd /var/www/psimi
    git pull origin main
else
    cd /var/www/psimi
    git clone https://github.com/linvetecnologiabr/psimi.git .
fi
chown -R psimi:psimi /var/www/psimi

echo "=== 3. Criando pool PHP-FPM ==="
cat > /etc/php/8.4/fpm/pool.d/psimi.conf << 'POOL'
[psimi]
user = psimi
group = psimi
listen = 127.0.0.1:9005
listen.owner = psimi
listen.group = www-data
pm = dynamic
pm.max_children = 5
pm.start_servers = 2
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[open_basedir] = /var/www/psimi
php_admin_value[disable_functions] = exec,passthru,shell_exec,system,proc_open,popen
php_admin_value[expose_php] = Off
POOL
echo "Pool psimi.conf criado"

echo "=== 4. Criando VirtualHost Apache ==="
cat > /etc/apache2/sites-available/psimi.conf << 'VHOST'
<VirtualHost *:80>
    ServerName michelyciardulo.com.br
    ServerAlias www.michelyciardulo.com.br
    DocumentRoot /var/www/psimi

    <Directory /var/www/psimi>
        AllowOverride All
        Require all granted
        Options -Indexes
    </Directory>

    <FilesMatch \.php$>
        SetHandler "proxy:fcgi://127.0.0.1:9005"
    </FilesMatch>

    ErrorLog ${APACHE_LOG_DIR}/psimi-error.log
    CustomLog ${APACHE_LOG_DIR}/psimi-access.log combined
</VirtualHost>
VHOST
echo "VHost psimi.conf criado"

echo "=== 5. Ativando site ==="
a2ensite psimi.conf 2>/dev/null || true

echo "=== 6. Reiniciando servicos ==="
systemctl restart php8.4-fpm
systemctl reload apache2

echo "=== 7. Verificando ==="
echo "PHP-FPM pools ativos:"
ls /etc/php/8.4/fpm/pool.d/
echo ""
echo "Sites Apache ativos:"
ls /etc/apache2/sites-enabled/
echo ""
echo "Testando PHP-FPM porta 9005:"
ss -tlnp | grep 9005 || echo "Porta 9005 nao encontrada"

echo ""
echo "=== SETUP COMPLETO ==="
echo "Proximo passo: apontar DNS michelyciardulo.com.br para 147.93.11.6"
echo "Depois: certbot --apache -d michelyciardulo.com.br -d www.michelyciardulo.com.br"
