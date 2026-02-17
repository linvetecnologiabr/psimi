#!/bin/bash
cp /tmp/psimi-fpm.conf /etc/php/8.4/fpm/pool.d/psimi.conf
cp /tmp/psimi-vhost.conf /etc/apache2/sites-available/psimi.conf
a2ensite psimi.conf
chown -R psimi:psimi /var/www/psimi
chmod -R 755 /var/www/psimi
systemctl restart php8.4-fpm
systemctl reload apache2
echo DONE
systemctl status php8.4-fpm --no-pager | head -5
