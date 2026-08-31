<?php
require_once __DIR__ . '/data.php';

$page_title = 'Sobre Mim | Psicóloga Michely Ciardulo - CRP 06/176130';
$meta_description = 'Conheça a Psicóloga Michely Ciardulo. Pós-graduada em Psicanálise e Saúde Mental. Atendimento psicológico online e presencial em São Paulo. CRP 06/176130.';
$body_class = 'page-interna';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Sobre mim', 'url' => '/sobre'],
];

$diferenciais = [
    ['titulo' => 'Sessões online e presencial', 'texto' => 'Atendimento adaptado à sua rotina e necessidade.'],
    ['titulo' => 'Adolescentes, adultos e casais', 'texto' => 'Acompanhamento terapêutico para diferentes fases da vida.'],
    ['titulo' => 'Foco no sujeito', 'texto' => 'Em seus afetos e sua forma de ver o mundo.'],
    ['titulo' => 'Ética e acolhimento', 'texto' => 'Sempre prezando pela escuta ativa e pelo respeito à sua singularidade.'],
];

$como_funciona = [
    ['titulo' => 'Primeiro contato', 'texto' => 'Entre em contato pelo WhatsApp para agendar sua primeira sessão. Nesse momento, combinamos horário, modalidade (online ou presencial) e tiramos suas dúvidas.'],
    ['titulo' => 'Primeira sessão', 'texto' => 'Na primeira sessão, conversamos sobre o que te trouxe até aqui, sua história, suas questões e expectativas. É um momento de acolhimento e de começar a construir o vínculo terapêutico.'],
    ['titulo' => 'Processo terapêutico', 'texto' => 'As sessões acontecem semanalmente, com duração de 50 minutos. O processo é contínuo e respeita o seu tempo — cada pessoa tem seu próprio ritmo de elaboração e transformação.'],
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
                                <h6 class="sub-title main-color mb-15">Sobre mim</h6>
                                <h1 class="text-u ls1 fz-80">Michely Ciardulo</h1>
                                <p class="mt-15">Psicóloga Clínica — <?= $site['crp'] ?></p>
                                <p class="mt-15 lead-sobre">Psicóloga clínica, com uma escuta voltada às singularidades, aos vínculos e às questões que emergem ao longo da vida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="intro section-padding">
                <div class="container">
                    <div class="row lg-marg">
                        <div class="col-lg-8">
                            <div class="row lg-marg">
                                <div class="col-md-6">
                                    <div>
                                        <h6 class="sub-title main-color mb-15">Quem sou</h6>
                                        <h3 class="mb-30">Sou Psicóloga, me oriento pela teoria psicanalítica, te ajudo a compreender e refletir seu lugar nas relações e no mundo, promovendo o autoconhecimento.</h3>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text">
                                        <p class="mb-15">Sou pós-graduada em teoria psicanalítica e pós-graduada em saúde mental e psiquiatria. Realizo atendimento psicológico na modalidade online e presencial, sempre prezando pela ética, escuta ativa e acolhimento.</p>
                                        <p>Acredito que cada pessoa é singular e merece um espaço seguro para explorar suas questões, afetos e formas de se relacionar com o mundo. A psicanálise nos convida a olhar para além do óbvio, buscando compreender as motivações inconscientes que moldam nossas escolhas, relações e sintomas.</p>

                                        <div class="mt-30">
                                            <ul class="rest dot-list">
                                                <?php foreach ($diferenciais as $d): ?>
                                                    <li class="mb-10"><strong><?= $d['titulo'] ?></strong> — <?= $d['texto'] ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="img-full fit-img">
                                <img src="<?= $img ?>/img-slider01.webp" alt="Psicóloga Michely Ciardulo" loading="lazy" decoding="async">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="intro section-padding pt-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text">
                                <h3 class="mb-20">Por que fazer terapia?</h3>
                                <p class="mb-20">A psicoterapia é um espaço de reflexão e transformação. Não se trata apenas de resolver problemas pontuais, mas de construir uma relação mais autêntica consigo mesmo e com os outros. É um investimento em autoconhecimento, em qualidade de vida e em relações mais saudáveis.</p>
                                <p>Muitas vezes carregamos padrões e crenças que nos foram transmitidos ao longo da vida, sem perceber como eles influenciam nossas escolhas e nosso modo de estar no mundo. A terapia nos ajuda a iluminar esses pontos, abrindo espaço para novas possibilidades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="feat section-padding pt-0">
                <div class="container">
                    <div class="sec-head mb-80">
                        <h2 class="fw-600 fz-50 text-u">Como funciona o atendimento</h2>
                    </div>
                    <div class="row">
                        <?php foreach ($como_funciona as $i => $etapa): ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="item-box radius-15 md-mb50">
                                    <span class="mb-30 p-color"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?> .</span>
                                    <h6 class="mb-20"><?= $etapa['titulo'] ?></h6>
                                    <p><?= $etapa['texto'] ?></p>
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
                            <div>
                                <h4 class="mb-15">Vamos juntos nessa jornada?</h4>
                                <p>Agende seu atendimento e dê o primeiro passo em direção ao autoconhecimento.</p>
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
