#!/bin/bash
apache2ctl -S 2>&1 | grep -E "port|namevhost|alias"
echo "==="
cat /etc/apache2/sites-enabled/psimi.conf 2>/dev/null || echo "psimi.conf NAO EXISTE em sites-enabled"
echo "==="
ls /etc/apache2/sites-available/ | grep psimi
ls /etc/apache2/sites-enabled/ | grep psimi
