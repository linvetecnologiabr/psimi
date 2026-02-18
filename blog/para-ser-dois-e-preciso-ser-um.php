<?php
$page_title = 'Para ser dois, é preciso ser Um! | Psicóloga Michely Ciardulo';
$meta_description = 'Reflexão sobre a importância do autoconhecimento antes de se relacionar. Para ser dois, é preciso primeiro se reconhecer como um. Por Psicóloga Michely Ciardulo.';
$meta_keywords = 'relacionamento saudável, autoconhecimento, ser um antes de ser dois, psicóloga relacionamento, amor próprio';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Para ser dois é preciso ser um', 'url' => 'https://michelyciardulo.com.br/blog/para-ser-dois-e-preciso-ser-um'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/para-ser-dois-e-preciso-ser-um'],
];
require_once __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="<?= $assets ?>/css/pages.css">

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/blog">Blog</a><span>›</span>
            <a href="#">Para ser dois, é preciso ser Um!</a>
        </div>
        <h1>Para ser dois, é preciso ser Um!</h1>
        <div class="post-meta">Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">
            <img src="" alt="Para ser dois, é preciso ser Um!" class="featured-img">

            <p class="lead">É preciso nos reconhecer como sujeitos desejantes, singulares e faltantes.</p>

            <p>A relação que temos conosco é extremamente importante e dirá muito sobre como serão nossas relações com outras pessoas.</p>

            <p>Se o sujeito não possui recursos mínimos para se relacionar de forma respeitosa e responsável consigo mesmo, muito provavelmente enfrentará grandes conflitos e angústias na relação com o outro.</p>

            <p>Antes de sermos Dois, precisamos nos reconhecer como UM, validar nossos limites, sonhos, objetivos e história de vida, para então poder somar com o outro e nos tornarmos Dois.</p>

            <p>Talvez pareça um pouco confuso, mas o primeiro relacionamento que devemos construir e estar presentes é o relacionamento conosco mesmos; este é o primeiro passo para poder nos relacionar de forma saudável e prazerosa com um outro fora de nós.</p>

            <div class="reference">
                <strong>Por Michely Ciardulo</strong>
                Psicóloga Clínica — CRP 06/176130
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer construir relações mais saudáveis?</h3>
        <p>O primeiro passo é se conhecer. Agende uma consulta.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
