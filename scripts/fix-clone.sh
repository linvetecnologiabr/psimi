#!/bin/bash
set -e

echo "=== 1. Limpando e clonando repo ==="
cd /var/www/psimi
rm -rf .bash* .profile
git clone https://github.com/linvetecnologiabr/psimi.git .
chown -R psimi:psimi /var/www/psimi

echo "=== 2. Reiniciando servicos ==="
systemctl restart php8.4-fpm
systemctl reload apache2

echo "=== 3. Verificando ==="
echo "PHP-FPM pools:"
ls /etc/php/8.4/fpm/pool.d/
echo ""
echo "Sites Apache:"
ls /etc/apache2/sites-enabled/
echo ""
ss -tlnp | grep 9005
echo ""
ls -la /var/www/psimi/
echo ""
echo "=== DONE ==="
