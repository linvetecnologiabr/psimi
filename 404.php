<?php
require_once __DIR__ . '/data.php';

http_response_code(404);
$page_title = 'Página não encontrada | Psicóloga Michely Ciardulo';
$meta_description = 'A página que você procura não existe ou foi movida.';
$body_class = 'page-interna page-404';
$noindex = true;

require_once __DIR__ . '/header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <header class="header page-header section-padding valign">
                <div class="container pt-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h6 class="sub-title main-color mb-15">Erro 404</h6>
                                <h1 class="text-u ls1 fz-80">Página não encontrada</h1>
                                <p class="mt-15">A página que você procura não existe ou foi movida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="intro section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="text mb-50">
                                <p>Você pode voltar para a página inicial ou falar comigo pelo WhatsApp.</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center" style="gap: 18px; flex-wrap: wrap;">
                                <a href="<?= $base_url ?>/" class="butn butn-md butn-bord radius-30">
                                    <span class="text">Ir para a home</span>
                                </a>
                                <a href="<?= $whatsapp_url ?>" target="_blank" rel="noopener nofollow" class="butn butn-md butn-bg main-colorbg radius-30">
                                    <span class="text">Falar no WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php require_once __DIR__ . '/footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/scripts.php'; ?>
