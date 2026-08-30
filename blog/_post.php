<?php
require_once __DIR__ . '/../data.php';
require_once __DIR__ . '/../blog-dados.php';

if (!isset($slug) || !isset($blog_posts[$slug])) {
    http_response_code(404);
    exit('Post não encontrado.');
}

$post = $blog_posts[$slug];
$page_title = $post['page_title'];
$meta_description = $post['meta_description'];
$body_class = 'page-post';
$og_type = 'article';
$article_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $post['h1'],
    'description' => $post['meta_description'],
    'image' => 'https://michelyciardulo.com.br/assets/imgs/michely/' . $post['img'],
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => $post['data'],
    'dateModified' => $post['data'],
    'inLanguage' => 'pt-BR',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/' . $slug],
];
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Blog', 'url' => '/blog'],
    ['nome' => $post['h1'], 'url' => '/blog/' . $slug],
];

require_once __DIR__ . '/../header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <!-- HEADER -->
            <header class="header page-header section-padding valign">
                <div class="container pt-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="text-center">
                                <h6 class="sub-title main-color mb-15"><?= $post['categoria'] ?></h6>
                                <h1 class="text-u ls1 fz-80"><?= $post['h1'] ?></h1>
                                <p class="mt-15">Por Psicóloga Michely Ciardulo — <?= $site['crp'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- CONTEUDO -->
            <section class="intro section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="img-full fit-img mb-60">
                                <img src="<?= $img ?>/<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['h1']) ?>" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="text">
                                <?php foreach ($post['blocos'] as $b): ?>
                                    <?php if ($b['tipo'] === 'subtitulo'): ?>
                                        <h3 class="mt-50 mb-20"><?= $b['texto'] ?></h3>
                                    <?php elseif ($b['tipo'] === 'citacao'): ?>
                                        <blockquote class="post-citacao"><?= $b['texto'] ?></blockquote>
                                    <?php elseif ($b['tipo'] === 'lista'): ?>
                                        <ul class="rest dot-list mb-30">
                                            <?php foreach ($b['itens'] as $item): ?>
                                                <li class="mb-10"><?= $item ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php elseif ($b['tipo'] === 'lead'): ?>
                                        <p class="post-lead mb-30"><?= $b['texto'] ?></p>
                                    <?php else: ?>
                                        <p class="mb-20"><?= $b['texto'] ?></p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="intro section-padding pt-0">
                <div class="container">
                    <div class="sec-bottom">
                        <div class="sub-bg d-flex align-items-center">
                            <div>
                                <h4 class="mb-15">Quer conversar sobre isso?</h4>
                                <p>Agende uma consulta e encontre um espaço de escuta e acolhimento.</p>
                            </div>
                            <div class="ml-auto">
                                <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-md butn-bord radius-30">
                                    <span class="text">Agendar atendimento</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php require __DIR__ . '/../partials-marq-cta.php'; ?>

        </main>

        <?php require_once __DIR__ . '/../footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/../scripts.php'; ?>
