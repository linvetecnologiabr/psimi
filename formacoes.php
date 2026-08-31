<?php
require_once __DIR__ . '/data.php';

$page_title = 'Formações | Psicóloga Michely Ciardulo - CRP 06/176130';
$meta_description = 'Formação acadêmica da Psicóloga Michely Ciardulo: Psicologia, Teoria Psicanalítica, Saúde Mental e Psiquiatria, Terapia de Casal e Família e Psicologia Perinatal.';
$body_class = 'page-interna';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Formações', 'url' => '/formacoes'],
];

// Descricoes vindas de psimi/formacoes.php
$formacoes_detalhe = [
    'Bacharel em Psicologia' => 'Graduação completa em Psicologia com formação sólida em diversas abordagens teóricas e práticas clínicas.',
    'Pós-graduada em Teoria Psicanalítica' => 'Especialização em teoria psicanalítica com aprofundamento nos conceitos freudianos e pós-freudianos.',
    'Pós-graduada em Saúde Mental e Psiquiatria' => 'Especialização voltada para a compreensão dos transtornos mentais, diagnóstico e intervenção terapêutica.',
    'Gestão de Recursos Humanos' => 'Formação em gestão de pessoas, contribuindo para uma visão ampla das relações humanas no ambiente organizacional.',
    'Terapia de Casal e Família' => 'Capacitação especializada em atendimento de casais e famílias, com foco nas dinâmicas relacionais e conjugais.',
    'Casal e Família' => 'Aprofundamento teórico e clínico nas questões conjugais e familiares sob a perspectiva psicanalítica.',
    'Aperfeiçoamento em Psicologia Perinatal' => 'Formação em psicologia perinatal, abrangendo o acompanhamento da gestação, parto e puerpério.',
    'Formação em Psicanálise – Em percurso' => 'Formação contínua em psicanálise, aprofundando a prática clínica e a escuta analítica.',
];

require_once __DIR__ . '/header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <header class="header page-header section-padding valign">
                <div class="container pt-80">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h6 class="sub-title main-color mb-15">Trajetória e formação</h6>
                                <h1 class="text-u ls1 fz-80">Minhas formações</h1>
                                <p class="mt-15">Psicóloga Michely Ciardulo — <?= $site['crp'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="feat section-padding">
                <div class="container">
                    <div class="row">
                        <?php foreach ($formacoes as $i => $f): ?>
                            <div class="col-lg-6">
                                <div class="item-box radius-15 mb-30">
                                    <span class="mb-30 p-color"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?> .</span>
                                    <h6 class="mb-10"><?= $f['titulo'] ?></h6>
                                    <h6 class="sub-title main-color mb-20"><?= $f['instituicao'] ?></h6>
                                    <p><?= $formacoes_detalhe[$f['titulo']] ?? '' ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="intro section-padding pt-0">
                <div class="container">
                    <div class="sec-bottom">
                        <div class="sub-bg d-flex align-items-center">
                            <div class="cta-icone" aria-hidden="true"><i class="pe-7s-medal"></i></div>
                            <div>
                                <h4 class="mb-15">Qualificação a serviço do seu bem-estar</h4>
                                <p>Agende seu atendimento com uma profissional especializada.</p>
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

            <?php require __DIR__ . '/partials-marq-cta.php'; ?>

        </main>

        <?php require_once __DIR__ . '/footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/scripts.php'; ?>
