<?php
/**
 * Sitemap XML Dinâmico — michelyciardulo.com.br
 * 
 * - Auto-descobre páginas PHP em especialidades/ e blog/
 * - Usa lastmod real (data de modificação do arquivo)
 * - Prioridades inteligentes por seção
 * - Validado contra schema sitemaps.org
 */

header('Content-Type: application/xml; charset=UTF-8');
header('X-Robots-Tag: noindex'); // Sitemap não deve ser indexado em si

$domain = 'https://michelyciardulo.com.br';
$baseDir = __DIR__;

// ========== Páginas estáticas com prioridade manual ==========
$pages = [
    ['url' => '/',               'priority' => '1.0', 'changefreq' => 'weekly'],
    ['url' => '/sobre',          'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/formacoes',      'priority' => '0.7', 'changefreq' => 'monthly'],
    ['url' => '/especialidades', 'priority' => '0.9', 'changefreq' => 'weekly'],
    ['url' => '/blog',           'priority' => '0.8', 'changefreq' => 'weekly'],
];

// ========== Auto-descoberta: Especialidades ==========
$espDir = $baseDir . '/especialidades';
if (is_dir($espDir)) {
    foreach (glob($espDir . '/*.php') as $file) {
        $slug = basename($file, '.php');
        if ($slug === 'index') continue; // já listada como /especialidades
        $pages[] = [
            'url'        => '/especialidades/' . $slug,
            'priority'   => '0.8',
            'changefreq' => 'monthly',
            'file'       => $file,
        ];
    }
}

// ========== Auto-descoberta: Blog ==========
$blogDir = $baseDir . '/blog';
if (is_dir($blogDir)) {
    foreach (glob($blogDir . '/*.php') as $file) {
        $slug = basename($file, '.php');
        if ($slug === 'index') continue; // já listada como /blog
        $pages[] = [
            'url'        => '/blog/' . $slug,
            'priority'   => '0.7',
            'changefreq' => 'monthly',
            'file'       => $file,
        ];
    }
}

// ========== Resolver arquivo e lastmod para páginas estáticas ==========
foreach ($pages as &$page) {
    if (!isset($page['file'])) {
        $url = $page['url'];
        if ($url === '/') {
            $page['file'] = $baseDir . '/index.php';
        } else {
            // Tenta arquivo direto ou index dentro de pasta
            $candidate = $baseDir . $url . '.php';
            $candidateDir = $baseDir . $url . '/index.php';
            if (file_exists($candidate)) {
                $page['file'] = $candidate;
            } elseif (file_exists($candidateDir)) {
                $page['file'] = $candidateDir;
            }
        }
    }

    // lastmod real do arquivo
    if (isset($page['file']) && file_exists($page['file'])) {
        $page['lastmod'] = date('Y-m-d', filemtime($page['file']));
    } else {
        $page['lastmod'] = date('Y-m-d');
    }
}
unset($page);

// ========== Ordenar: home primeiro, depois por prioridade desc ==========
usort($pages, function ($a, $b) {
    if ($a['url'] === '/') return -1;
    if ($b['url'] === '/') return 1;
    return $b['priority'] <=> $a['priority'];
});

// ========== Gerar XML ==========
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= htmlspecialchars($domain . $page['url']) ?></loc>
    <lastmod><?= $page['lastmod'] ?></lastmod>
    <changefreq><?= $page['changefreq'] ?></changefreq>
    <priority><?= $page['priority'] ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
