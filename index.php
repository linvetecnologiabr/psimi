<?php
$incluir_faq_schema = true;
require_once __DIR__ . '/header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <!-- HERO -->
            <header class="header header-personal valign bg-img full-vh" data-background="<?= $img ?>/img-slider01.webp" data-overlay-dark="6" style="background-image: url('<?= $img ?>/img-slider01.webp')" id="inicio">
                <div class="container ontop">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="caption">

                                <h1 class="fw-700 mb-10">
                                    Um espaço de escuta para olhar para o sofrimento, os
                                    <span class="main-color">vínculos</span> e as histórias que nos constituem.
                                </h1>
                                <h3><?= $site['nome'] ?> · <?= $site['profissao'] ?> <span class="assinatura-crp"><?= $site['crp'] ?></span></h3>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="d-flex align-items-center mt-60">
                                            <div class="icon-img-60">
                                                <img src="<?= $assets ?>/imgs/icon-img/arrow-down-big.png" alt="" width="60" height="60" decoding="async">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info d-flex align-items-center justify-content-end mt-100">
                        <div class="item">
                            <h6 class="sub-title mb-10">E-mail :</h6>
                            <span class="p-color"><?= $contato['email'] ?></span>
                        </div>
                        <div class="item">
                            <h6 class="sub-title mb-10">WhatsApp :</h6>
                            <span class="p-color"><?= $contato['telefone'] ?></span>
                        </div>
                        <div class="item">
                            <h6 class="sub-title mb-10">Endereço :</h6>
                            <span class="p-color"><?= $contato['endereco_linha1'] ?>, <?= $contato['endereco_linha2'] ?></span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- MARQUEE ESPECIALIDADES -->
            <section class="marq">
                <div class="main-marq lrg sub-bg pt-20 pb-20 shadow-off">
                    <div class="slide-har st1">
                        <?php for ($b = 0; $b < 2; $b++): ?>
                            <div class="box">
                                <?php foreach ($especialidades as $esp): ?>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center">
                                            <span><?= $esp['titulo'] ?></span>
                                            <span class="icon-img-50 ml-40"><img src="<?= $assets ?>/imgs/star.png" alt="" width="50" height="50" loading="lazy" decoding="async"></span>
                                        </h4>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>

            <!-- SOBRE -->
            <section class="about-author section-padding" id="sobre">
                <div class="container with-pad">
                    <div class="row lg-marg">
                        <div class="col-lg-5 valign">
                            <div class="profile-img">
                                <div class="img">
                                    <img src="<?= $img ?>/img-home05.webp" alt="Psicóloga Michely Ciardulo" width="540" height="540" loading="lazy" decoding="async">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 valign">
                            <div class="cont">
                                <h6 class="sub-title main-color mb-30">Sobre mim</h6>
                                <div class="text">
                                    <h4 class="mb-30">
                                        Sou psicóloga clínica,
                                        <span class="fw-200">me oriento pela psicanálise. Meu trabalho parte da escuta daquilo que cada pessoa traz, considerando sua história, seus vínculos, seus conflitos, seus desejos e os modos como certas questões podem se repetir ao longo da vida.</span>
                                    </h4>
                                    <p class="mb-20">Acredito no espaço clínico como possibilidade de falar sobre aquilo que causa sofrimento, inclusive quando ainda não encontramos palavras para nomeá-lo. Mais do que buscar respostas prontas, trata-se de dar lugar à própria história e ao que nela insiste em aparecer.</p>
                                    <p>Sou pós-graduada em Teoria Psicanalítica e em Saúde Mental e Psiquiatria e sigo em percurso de formação em Psicanálise. Realizo psicoterapia online e presencial para adolescentes, adultos e casais.</p>

                                    <div class="numbers mt-50">
                                        <div class="row lg-marg">
                                            <?php foreach ($atendimento as $item): ?>
                                                <div class="col-md-6">
                                                    <div class="item bord-thin-top pt-30 d-flex align-items-end mt-20">
                                                        <div>
                                                            <h6 class="p-color sub-title"><?= $item['texto'] ?></h6>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="icon-atendimento"><i class="<?= $item['icone'] ?>" aria-hidden="true"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                    <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-md butn-bord radius-30 mt-50">
                                        <span class="text">Vamos juntos nessa jornada, agende sua sessão!</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ESPECIALIDADES -->
            <section class="work-card section-padding pb-0" id="especialidades">
                <div class="container">
                    <div class="sec-head mb-80">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="sub-title main-color mb-5">Temas que podem ser trabalhados em psicoterapia</span>
                                <h3 class="fw-600 fz-50 text-u d-rotate wow">
                                    <span class="rotate-text">Confira as <span class="fw-200">especialidades.</span></span>
                                </h3>
                            </div>
                            <div class="ml-auto vi-more">
                                <a href="<?= $base_url ?>/especialidades" class="butn butn-sm butn-bord radius-30"><span>Ver todas</span></a>
                                <span class="icon ti-arrow-top-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="cards">
                        <?php foreach ($especialidades as $esp): ?>
                            <div class="card-item sub-bg">
                                <a href="<?= $base_url ?>/especialidades/<?= $esp['slug'] ?>" class="card-link" aria-label="<?= htmlspecialchars($esp['titulo']) ?>"></a>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="cont">
                                            <div>
                                                <div class="mb-15">
                                                    <a href="<?= $base_url ?>/especialidades/<?= $esp['slug'] ?>" class="tag">Especialidade</a>
                                                </div>
                                                <h4><?= $esp['titulo'] ?></h4>
                                            </div>
                                            <div>
                                                <p><?= $esp['resumo'] ?></p>
                                                <a href="<?= $base_url ?>/especialidades/<?= $esp['slug'] ?>" class="underline mt-15">
                                                    <span class="text main-color sub-title">Saiba mais <i class="ti-arrow-top-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="img">
                                            <img src="<?= $img ?>/<?= $esp['img'] ?>" alt="<?= $esp['titulo'] ?>" loading="lazy" decoding="async">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="container">
                    <div class="sec-bottom mt-100">
                        <div class="main-bg d-flex align-items-center">
                            <h6 class="fz-14 fw-400">Atendimento <span class="fw-600">online e presencial</span> para adolescentes, adultos e casais</h6>
                            <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-sm butn-bord radius-30 ml-30">
                                <span class="text">Entrar em contato</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TRAJETORIA E FORMACAO -->
            <section class="my-skills section-padding" id="trajetoria">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="sec-head text-center mb-80">
                                <h3>Trajetória e formação<br><span class="opacity-7">confira minhas especializações.</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row md-marg">
                        <?php foreach ($formacoes as $f): ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="item mb-30">
                                    <div class="box-bord">
                                        <h6 class="fz-18"><?= $f['titulo'] ?></h6>
                                    </div>
                                    <h6 class="fz-14 p-color mt-15"><?= $f['instituicao'] ?></h6>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="text-center mt-50">
                        <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-md butn-bord radius-30">
                            <span class="text">Agende seu atendimento</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- DEPOIMENTOS -->
            <section class="testim-modern section-padding sub-bg bord-top-grd bord-bottom-grd" id="depoimentos">
                <div class="container">
                    <div class="sec-head mb-80">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="sub-title main-color mb-5">Depoimentos</span>
                                <h3 class="fw-600 fz-50 text-u d-rotate wow">
                                    <span class="rotate-text">Depoimentos <span class="fw-200">de pacientes reais.</span></span>
                                </h3>
                                <p class="mt-15">Os nomes dos pacientes foram abreviados para preservar a privacidade.</p>
                            </div>
                            <div class="ml-auto">
                                <div class="swiper-arrow-control">
                                    <div class="swiper-button-prev"><span class="ti-arrow-left"></span></div>
                                    <div class="swiper-button-next"><span class="ti-arrow-right"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testim-swiper3 out-right" data-carousel="swiper" data-loop="true" data-space="30">
                        <div class="swiper-container" id="content-carousel-container-unq-testim" data-swiper="container">
                            <div class="swiper-wrapper">
                                <?php foreach ($depoimentos as $dep): ?>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="cont">
                                                <h6 class="sub-title mb-15">Paciente</h6>
                                                <div class="text">
                                                    <p>“ <?= $dep['texto'] ?> ”</p>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6 class="fz-18"><?= $dep['nome'] ?></h6>
                                                        <span class="p-color opacity-8 fz-15 mt-5">Paciente</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section class="page-faqs section-padding pb-0 position-re" id="faq">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div>
                                <div class="sec-head mb-50">
                                    <h6 class="sub-title main-color mb-15">Perguntas frequentes</h6>
                                    <h3>Tire suas dúvidas sobre <br>o atendimento psicológico.</h3>
                                </div>
                                <div class="accordion bord">
                                    <?php foreach ($faqs as $i => $faq): ?>
                                        <div class="item wow fadeInUp<?= $i === 0 ? ' active' : '' ?>" data-wow-delay="<?= number_format($i * 0.1 + 0.1, 1) ?>s">
                                            <div class="title">
                                                <h6><?= $faq['pergunta'] ?></h6>
                                                <span class="ico ti-plus"></span>
                                            </div>
                                            <div class="accordion-info">
                                                <p><?= $faq['resposta'] ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img1"><img src="<?= $img ?>/img-home03.webp" alt="" loading="lazy" decoding="async"></div>
                <div class="img2"><img src="<?= $assets ?>/imgs/arw0.png" alt="" width="40" height="40" loading="lazy" decoding="async"></div>
                <div class="img3"><img src="<?= $img ?>/img-home04.webp" alt="" loading="lazy" decoding="async"></div>
            </section>

            <!-- BLOG -->
            <section class="blog style2 section-padding" id="blog">
                <div class="container">
                    <div class="sec-head mb-80">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="sub-title main-color mb-5">Vida em movimento</span>
                                <h3 class="fw-600 fz-50 text-u d-rotate wow">
                                    <span class="rotate-text">Insights <span class="fw-200">psicanalíticos.</span></span>
                                </h3>
                            </div>
                            <div class="ml-auto vi-more">
                                <a href="<?= $base_url ?>/blog" class="butn butn-sm butn-bord radius-30"><span>Ver todos posts</span></a>
                                <span class="icon ti-arrow-top-right"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($posts as $post): ?>
                            <div class="col-lg-4">
                                <div class="item md-mb50">
                                    <div class="info sub-title p-color d-flex align-items-center mb-20">
                                        <div>Psi. Michely Ciardulo</div>
                                        <div class="ml-30"><?= $post['categoria'] ?></div>
                                    </div>
                                    <a href="<?= $base_url ?>/blog/<?= $post['slug'] ?>" class="img fit-img d-block">
                                        <img src="<?= $img ?>/<?= $post['img'] ?>" alt="<?= $post['titulo'] ?>" loading="lazy" decoding="async">
                                    </a>
                                    <div class="cont pt-30">
                                        <h5><a href="<?= $base_url ?>/blog/<?= $post['slug'] ?>"><?= $post['titulo'] ?></a></h5>
                                        <p class="mt-15"><?= $post['resumo'] ?></p>
                                        <a href="<?= $base_url ?>/blog/<?= $post['slug'] ?>" class="butn-crev d-flex align-items-center mt-30">
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

            <!-- MARQUEE CTA -->
            <section class="call-marq section-padding o-hidden">
                <div class="main-marq lrg sub-bg pt-20 pb-20">
                    <div class="slide-har st1">
                        <div class="box">
                            <?php for ($i = 0; $i < 12; $i++): ?>
                                <div class="item">
                                    <h4 class="d-flex align-items-center">
                                        <span>Agendar atendimento</span>
                                        <span class="icon-img-50 ml-40"><img src="<?= $assets ?>/imgs/star.png" alt="" width="50" height="50" loading="lazy" decoding="async"></span>
                                    </h4>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="overlay-link" aria-label="Agendar atendimento pelo WhatsApp"></a>
                    </div>
                </div>
                <div class="main-marq bord-item">
                    <div class="slide-har st2">
                        <?php for ($b = 0; $b < 2; $b++): ?>
                            <div class="box">
                                <?php for ($i = 0; $i < 6; $i++): ?>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center">
                                            <span>Falar com a psicóloga</span>
                                            <span class="icon-img-50"></span>
                                        </h4>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        <?php endfor; ?>
                        <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="overlay-link" aria-label="Falar com a psicóloga pelo WhatsApp"></a>
                    </div>
                </div>
            </section>

        </main>

        <?php require_once __DIR__ . '/footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/scripts.php'; ?>