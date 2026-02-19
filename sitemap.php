<?php
header('Content-Type: application/xml; charset=UTF-8');

$domain = 'https://michelyciardulo.com.br';
$today = date('Y-m-d');

$pages = [
    // Página principal
    ['url' => '/',                                     'priority' => '1.0', 'changefreq' => 'weekly'],
    ['url' => '/sobre',                                'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/formacoes',                            'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades',                       'priority' => '0.8', 'changefreq' => 'monthly'],
    ['url' => '/blog',                                 'priority' => '0.8', 'changefreq' => 'weekly'],
    
    // Especialidades
    ['url' => '/especialidades/terapia-de-casal',      'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/violencia-domestica',   'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/depressao',             'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/morte-e-luto',          'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/ansiedade',             'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/inseguranca',           'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/baixa-autoestima',      'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/dependencia-emocional', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/mudanca-de-carreira',   'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades/burnout',                'priority' => '0.7', 'changefreq' => 'monthly'],
    
    // Blog
    ['url' => '/blog/terapia-de-casal',                         'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/equilibrando-os-pratos-da-vida',           'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/quando-o-sofrimento-parece-nao-ter-fim',   'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/estabelecendo-limites',                    'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/paixao-e-objeto-fantasmatico',             'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/para-ser-dois-e-preciso-ser-um',           'priority' => '0.6', 'changefreq' => 'monthly'],
    ['url' => '/blog/como-voce-tem-lidado-com-seu-tempo',       'priority' => '0.6', 'changefreq' => 'monthly'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= $domain . $page['url'] ?></loc>
    <lastmod><?= $today ?></lastmod>
    <changefreq><?= $page['changefreq'] ?></changefreq>
    <priority><?= $page['priority'] ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
