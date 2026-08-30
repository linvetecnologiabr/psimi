<?php
require_once __DIR__ . '/data.php';

$is_local = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);
// Em producao o site fica na raiz do dominio. No XAMPP ele roda dentro de uma
// pasta, entao o prefixo sai do proprio caminho do script.
$base_url = '';
if ($is_local) {
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $partes = explode('/', trim($script, '/'));
    $base_url = $partes ? '/' . $partes[0] : '';
}
$assets = $base_url . '/assets';
$img = $assets . '/imgs/michely';
$site_url = $is_local ? 'http://localhost' . $base_url : 'https://michelyciardulo.com.br';

$page_title = $page_title ?? 'Psicóloga Michely Ciardulo | CRP 06/176130';
$meta_description = $meta_description ?? 'Psicóloga Michely Ciardulo - Atendimento psicológico presencial e online. Especialista em Psicanálise, terapia de casal, ansiedade, burnout, depressão e autoconhecimento. CRP 06/176130';
$body_class = $body_class ?? 'home-personal';

// Canonical: sem .php, sem query e sem barra final, exceto /blog/ e /especialidades/,
// que sao diretorios reais. Mesma regra do site atual.
$caminho = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
if ($is_local && $base_url !== '' && strpos($caminho, $base_url) === 0) {
    $caminho = substr($caminho, strlen($base_url)) ?: '/';
}
$caminho = preg_replace('/index\.php$/', '', $caminho);
$caminho = preg_replace('/\.php$/', '', $caminho);
if ($caminho !== '/' && !in_array($caminho, ['/blog/', '/especialidades/'], true)) {
    $caminho = rtrim($caminho, '/');
}
if ($caminho === '') {
    $caminho = '/';
}
$current_url = 'https://michelyciardulo.com.br' . $caminho;
$og_type = $og_type ?? 'website';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= htmlspecialchars($page_title) ?></title>

    <meta name="google-site-verification" content="k9_XxkrrdBLo_RJjRzkJtV71ol3NOVTOnzEOePHCc7g">

    <link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">
    <link rel="alternate" hreflang="pt-BR" href="<?= htmlspecialchars($current_url) ?>">
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="author" content="Michely Ciardulo">
    <meta name="robots" content="<?= !empty($noindex) ? 'noindex, follow' : 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1' ?>">
    <meta name="theme-color" content="#1f2b2e">
    <meta name="geo.region" content="BR-SP">
    <meta name="geo.placename" content="São Paulo">
    <meta name="geo.position" content="-23.5402828;-46.5658437">
    <meta name="ICBM" content="-23.5402828, -46.5658437">

    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="<?= $og_type ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:site_name" content="Psicóloga Michely Ciardulo - CRP 06/176130">
    <meta property="og:image" content="<?= $site_url ?>/assets/imgs/michely/og-image.jpg">

    <link rel="icon" href="<?= $img ?>/favicon.png">
    <link rel="preload" as="image" href="<?= $img ?>/img-slider01.webp" fetchpriority="high">

    <link rel="preload" as="font" type="font/woff2" href="<?= $assets ?>/fonts/jakarta/jakarta-latin.woff2" crossorigin>
    <link rel="stylesheet" href="<?= $assets ?>/css/fontes.css?v=<?= @filemtime(__DIR__ . '/assets/css/fontes.css') ?>">
    <link rel="stylesheet" href="<?= $assets ?>/css/plugins.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/michely.css?v=<?= @filemtime(__DIR__ . '/assets/css/michely.css') ?>">

    <?php require __DIR__ . '/partials-schema.php'; ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KL6QCM4Z');
    </script>
</head>

<body class="<?= htmlspecialchars($body_class) ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8S4YL352QX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-8S4YL352QX');
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6QCM4Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <div class="lines">
        <span></span><span></span><span></span><span></span><span></span>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bord blur">
        <div class="container o-hidden">
            <a class="logo icon-img-100" href="<?= $base_url ?>/">
                <img src="<?= $img ?>/logo-white.png" alt="Michely Ciardulo">
            </a>

            <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir menu">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/sobre"><span class="rolling-text">Sobre mim</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/formacoes"><span class="rolling-text">Formações</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/especialidades/"><span class="rolling-text">Especialidades</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/#faq"><span class="rolling-text">Perguntas</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $base_url ?>/blog/"><span class="rolling-text">Blog</span></a></li>
                </ul>
            </div>

            <div class="contact-button">
                <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-sm butn-bg main-colorbg radius-5">
                    <span class="text">Agendar consulta</span>
                </a>
            </div>
        </div>
    </nav>
