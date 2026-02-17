#!/bin/bash
echo "=== PSIMI VHOST ==="
cat /etc/apache2/sites-enabled/psimi.conf
echo ""
echo "=== SCUTHA VHOST ==="
head -5 /etc/apache2/sites-enabled/scutha.com.conf
echo ""
echo "=== SCUTHA SSL VHOST ==="
head -5 /etc/apache2/sites-enabled/scutha.com-le-ssl.conf
echo ""
echo "=== DEFAULT VHOST ==="
ls /etc/apache2/sites-enabled/ | head -20
echo ""
echo "=== CURL TEST ==="
curl -sI --resolve michelyciardulo.com.br:80:127.0.0.1 http://michelyciardulo.com.br/ | head -10
