<?php
require_once __DIR__ . '/../data.php';
require_once __DIR__ . '/../especialidades-dados.php';

if (!isset($slug) || !isset($especialidades_conteudo[$slug])) {
    http_response_code(404);
    exit('Especialidade não encontrada.');
}

$esp = $especialidades_conteudo[$slug];
$page_title = $esp['page_title'];
$meta_description = $esp['meta_description'];
$body_class = 'page-especialidade';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Especialidades', 'url' => '/especialidades'],
    ['nome' => $esp['h1'], 'url' => '/especialidades/' . $slug],
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
                                <h6 class="sub-title main-color mb-15">Especialidade</h6>
                                <h1 class="text-u ls1 fz-80"><?= $esp['h1'] ?></h1>
                                <p class="mt-15">Psicóloga Michely Ciardulo — <?= $site['crp'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- INTRO -->
            <section class="intro section-padding">
                <div class="container">
                    <div class="row lg-marg">
                        <div class="col-lg-8">
                            <div class="row lg-marg">
                                <div class="col-md-6">
                                    <div>
                                        <h6 class="sub-title main-color mb-15">Sobre</h6>
                                        <h3 class="mb-30"><?= $esp['lead'] ?></h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text">
                                        <?php foreach ($esp['intro_paras'] as $p): ?>
                                            <p class="mb-15"><?= $p ?></p>
                                        <?php endforeach; ?>

                                        <?php if ($esp['destaques']): ?>
                                            <div class="mt-30">
                                                <ul class="rest dot-list">
                                                    <?php foreach ($esp['destaques'] as $d): ?>
                                                        <li class="mb-10"><?= $d ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="img-full fit-img">
                                <img src="<?= $img ?>/<?= $esp['img'] ?>" alt="<?= htmlspecialchars($esp['h1']) ?>" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php if ($esp['topicos']): ?>
                <!-- TOPICOS -->
                <section class="feat section-padding pt-0">
                    <div class="container">
                        <div class="sec-head mb-80">
                            <div class="d-flex align-items-center mb-30">
                                <h2 class="fw-600 fz-50 text-u d-rotate wow">
                                    <span class="rotate-text"><?= $esp['h2'] ?></span>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($esp['topicos'] as $i => $t): ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="item-box radius-15 md-mb50">
                                        <span class="mb-30 p-color"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?> .</span>
                                        <h6 class="mb-20"><?= $t['titulo'] ?></h6>
                                        <p><?= $t['texto'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <?php if ($esp['corpo']): ?>
                <!-- CORPO -->
                <section class="intro section-padding pt-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="text">
                                    <?php foreach ($esp['corpo'] as $p): ?>
                                        <p class="mb-20"><?= $p ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <!-- CTA -->
            <section class="intro section-padding pt-0">
                <div class="container">
                    <div class="sec-bottom">
                        <div class="sub-bg d-flex align-items-center">
                            <div>
                                <h4 class="mb-15"><?= $esp['cta_titulo'] ?></h4>
                                <p><?= $esp['cta_texto'] ?></p>
                            </div>
                            <div class="ml-auto">
                                <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-md butn-bord radius-30">
                                    <span class="text">Agendar consulta</span>
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
