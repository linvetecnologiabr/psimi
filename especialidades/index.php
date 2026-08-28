<?php
require_once __DIR__ . '/../data.php';
require_once __DIR__ . '/../especialidades-dados.php';

$page_title = 'Especialidades | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Especialidades da Psicóloga Michely Ciardulo: terapia de casal, depressão, ansiedade, luto, autoconhecimento e mais. Online e presencial em São Paulo.';
$body_class = 'page-especialidades';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Especialidades', 'url' => '/especialidades'],
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
                                <h6 class="sub-title main-color mb-15">Minhas especialidades</h6>
                                <h1 class="text-u ls1 fz-80">Especialidades</h1>
                                <p class="mt-15">Atendimento online e presencial para adolescentes, adultos e casais</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- LISTA -->
            <section class="feat section-padding">
                <div class="container">
                    <div class="row">
                        <?php foreach ($especialidades as $i => $esp): ?>
                            <?php $conteudo = $especialidades_conteudo[$esp['slug']] ?? null; ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="item-box radius-15 md-mb50">
                                    <div class="img fit-img radius-10 mb-30">
                                        <img src="<?= $img ?>/<?= $esp['img'] ?>" alt="<?= htmlspecialchars($esp['titulo']) ?>" loading="lazy" decoding="async">
                                    </div>
                                    <span class="mb-30 p-color"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?> .</span>
                                    <h6 class="mb-20"><?= $esp['titulo'] ?></h6>
                                    <p><?= $conteudo ? $conteudo['lead'] : $esp['resumo'] ?></p>
                                    <a href="<?= $base_url ?>/especialidades/<?= $esp['slug'] ?>" class="underline mt-20 d-block">
                                        <span class="text main-color sub-title">Saiba mais <i class="ti-arrow-top-right"></i></span>
                                    </a>
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
