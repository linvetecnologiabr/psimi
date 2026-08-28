<?php
// FAQPage so na home, para nao duplicar o schema nas internas
if (!empty($incluir_faq_schema)) {
    $faq_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($f) {
            return [
                '@type' => 'Question',
                'name' => $f['pergunta'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['resposta']],
            ];
        }, $faqs),
    ];
    echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}

if (!empty($article_schema)) {
    echo '<script type="application/ld+json">' . json_encode($article_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}

if (!empty($breadcrumb)) {
    $breadcrumb_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [],
    ];
    foreach ($breadcrumb as $i => $item) {
        $breadcrumb_schema['itemListElement'][] = [
            '@type' => 'ListItem',
            'position' => $i + 1,
            'name' => $item['nome'],
            'item' => $site_url . $item['url'],
        ];
    }
    echo '<script type="application/ld+json">' . json_encode($breadcrumb_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}
?>

<?php require __DIR__ . '/partials-flutuantes.php'; ?>

<!-- Pilha de scripts do template webfolio (versao HTML/jQuery), sem alteracao -->
<script src="<?= $assets ?>/js/jquery.min.js"></script>
<script src="<?= $assets ?>/js/plugins.js"></script>
<script src="<?= $assets ?>/js/swiper-bundle.min.js"></script>
<script src="<?= $assets ?>/js/TweenMax.min.js"></script>
<script src="<?= $assets ?>/js/charming.min.js"></script>
<script src="<?= $assets ?>/js/countdown.js"></script>
<script src="<?= $assets ?>/js/gsap.min.js"></script>
<script src="<?= $assets ?>/js/ScrollTrigger.min.js"></script>
<script src="<?= $assets ?>/js/splitting.min.js"></script>
<script src="<?= $assets ?>/js/isotope.pkgd.min.js"></script>
<script src="<?= $assets ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= $assets ?>/js/simpleParallax.min.js"></script>
<script src="<?= $assets ?>/js/theme-shims.js"></script>
<script src="<?= $assets ?>/js/ScrollSmoother.min.js"></script>
<script src="<?= $assets ?>/js/scripts-j.js"></script>
<script src="<?= $assets ?>/js/scripts.js"></script>
<script src="<?= $assets ?>/js/sem-preloader.js"></script>
<script src="<?= $assets ?>/js/smoother-script.js"></script>
<script src="<?= $assets ?>/js/exit-intent.js?v=<?= @filemtime(__DIR__ . '/assets/js/exit-intent.js') ?>"></script>
</body>

</html>
