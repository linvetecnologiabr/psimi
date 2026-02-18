<?php
$page_title = 'Estabelecendo Limites | Psicóloga Michely Ciardulo';
$meta_description = 'Estabelecer limites é um ato de amor próprio. Reflexão sobre como validar nossos desejos e afetos nas relações. Por Psicóloga Michely Ciardulo.';
$meta_keywords = 'estabelecer limites, limites saudáveis, amor próprio, psicóloga limites, relações saudáveis, autoestima';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Estabelecendo Limites', 'url' => 'https://michelyciardulo.com.br/blog/estabelecendo-limites'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/estabelecendo-limites'],
];
require_once __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="<?= $assets ?>/css/pages.css">

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/blog">Blog</a><span>›</span>
            <a href="#">Estabelecendo Limites</a>
        </div>
        <h1>Estabelecendo Limites</h1>
        <div class="post-meta">Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">
            <img src="" alt="Estabelecendo Limites" class="featured-img">

            <p class="lead">Não podemos controlar como as pessoas irão nos tratar, quanta empatia, amor e respeito iremos receber, mas podemos estabelecer limites sobre o que iremos ou não aceitar.</p>

            <p><strong>Estabelecer limites é uma forma de validarmos nossos desejos e afetos.</strong></p>

            <p>Podemos estabelecer limites no trabalho, e reconhecer até onde ser solícito com os nossos pares interfere na nossa saúde e sobrecarga de trabalho.</p>

            <p>Podemos estabelecer limites nas relações amorosas e familiares, e procurar reconhecer e estabelecer um limite saudável de entrega para o outro.</p>

            <p>Quando ultrapassamos nossos limites nos colocamos de forma submissa e não autêntica nas relações.</p>

            <p>Muitas pessoas não acolhem seus limites e desejos, com a esperança de ser reconhecido(a), admirado(a) e amado(a), mas na verdade quando não reconhecemos e estabelecemos limites corremos o risco de não sermos tão valorizados e respeitados quanto desejamos, e isso pode desencadear sentimentos de baixa autoestima e frustração.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Estabelecer limites é um ato de amor próprio</strong>, de respeito e saúde!</span></li>
                </ul>
            </div>

            <div class="reference">
                <strong>Por Michely Ciardulo</strong>
                Psicóloga Clínica — CRP 06/176130
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer aprender a estabelecer limites saudáveis?</h3>
        <p>Agende uma consulta e descubra como cuidar de si mesmo nas relações.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
