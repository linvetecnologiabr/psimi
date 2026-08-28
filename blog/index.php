<?php
require_once __DIR__ . '/../data.php';
require_once __DIR__ . '/../blog-dados.php';

$page_title = 'Blog | Psicóloga Michely Ciardulo';
$meta_description = 'Vida em movimento: insights psicanalíticos da Psicóloga Michely Ciardulo sobre relações, sofrimento, limites e autoconhecimento.';
$body_class = 'page-blog';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Blog', 'url' => '/blog'],
];

require_once __DIR__ . '/../header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <!-- HEADER -->
            <header class="header page-header section-padding valign">
                <div class="container pt-80">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h6 class="sub-title main-color mb-15">Vida em movimento</h6>
                                <h1 class="text-u ls1 fz-80">Blog</h1>
                                <p class="mt-15">Insights psicanalíticos sobre relações, sofrimento e autoconhecimento</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- LISTA -->
            <section class="blog style2 section-padding">
                <div class="container">
                    <div class="row">
                        <?php foreach ($blog_posts as $slug => $post): ?>
                            <?php
                            $resumo = '';
                            foreach ($post['blocos'] as $b) {
                                if ($b['tipo'] === 'lead') {
                                    $resumo = $b['texto'];
                                    break;
                                }
                            }
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="item md-mb50">
                                    <div class="info sub-title p-color d-flex align-items-center mb-20">
                                        <div>Psi. Michely Ciardulo</div>
                                        <div class="ml-30"><?= $post['categoria'] ?></div>
                                    </div>
                                    <a href="<?= $base_url ?>/blog/<?= $slug ?>" class="img fit-img d-block">
                                        <img src="<?= $img ?>/<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['h1']) ?>" loading="lazy" decoding="async">
                                    </a>
                                    <div class="cont pt-30">
                                        <h5><a href="<?= $base_url ?>/blog/<?= $slug ?>"><?= $post['h1'] ?></a></h5>
                                        <p class="mt-15"><?= mb_substr($resumo, 0, 150) ?><?= mb_strlen($resumo) > 150 ? '...' : '' ?></p>
                                        <a href="<?= $base_url ?>/blog/<?= $slug ?>" class="butn-crev d-flex align-items-center mt-30">
                                            <span class="hover-this"><span class="circle hover-anim"><i class="ti-arrow-top-right"></i></span></span>
                                            <span class="text">Ler artigo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <?php require __DIR__ . '/../partials-marq-cta.php'; ?>

        </main>

        <?php require_once __DIR__ . '/../footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/../scripts.php'; ?>
