<?php
// Gera /sitemap.xml. URLs sem .php e sem barra final, exceto /blog/ e /especialidades/,
// que sao diretorios reais (mesmo padrao do site atual).
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/especialidades-dados.php';
require_once __DIR__ . '/blog-dados.php';

header('Content-Type: application/xml; charset=utf-8');

$base = 'https://michelyciardulo.com.br';
$hoje = date('Y-m-d');

$urls = [
    ['loc' => '/', 'prioridade' => '1.0', 'freq' => 'weekly'],
    ['loc' => '/sobre', 'prioridade' => '0.8', 'freq' => 'monthly'],
    ['loc' => '/formacoes', 'prioridade' => '0.7', 'freq' => 'monthly'],
    ['loc' => '/especialidades/', 'prioridade' => '0.9', 'freq' => 'monthly'],
    ['loc' => '/blog/', 'prioridade' => '0.8', 'freq' => 'weekly'],
];

foreach ($especialidades_conteudo as $slug => $esp) {
    $urls[] = ['loc' => '/especialidades/' . $slug, 'prioridade' => '0.8', 'freq' => 'monthly'];
}

foreach ($blog_posts as $slug => $post) {
    $urls[] = ['loc' => '/blog/' . $slug, 'prioridade' => '0.7', 'freq' => 'monthly'];
}

$urls[] = ['loc' => '/politica-de-privacidade', 'prioridade' => '0.3', 'freq' => 'yearly'];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
    <url>
        <loc><?= $base . $u['loc'] ?></loc>
        <lastmod><?= $hoje ?></lastmod>
        <changefreq><?= $u['freq'] ?></changefreq>
        <priority><?= $u['prioridade'] ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
