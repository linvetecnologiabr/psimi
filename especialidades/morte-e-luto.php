<?php
$page_title = 'Morte e Luto | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Acompanhamento psicológico para elaboração do luto. Psicóloga Michely Ciardulo oferece acolhimento diante da perda e da finitude. Atendimento online e presencial.';
$meta_keywords = 'luto psicóloga, elaboração do luto, morte e luto terapia, psicóloga luto são paulo, perda terapia';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Morte e Luto', 'url' => 'https://michelyciardulo.com.br/especialidades/morte-e-luto'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/especialidades">Especialidades</a><span>›</span>
            <a href="#">Morte e Luto</a>
        </div>
        <h1>Morte e Luto</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-04.jpg" alt="Morte e Luto" class="featured-img">
                <div class="intro-text">
                    <p class="lead">O luto é um processo natural diante da perda, mas que pode se tornar extremamente doloroso e paralisante. A terapia oferece um espaço seguro para elaborar a dor e encontrar novas formas de seguir.</p>
                    <p>O luto não se limita à morte de alguém próximo — lamentamos também a perda de relacionamentos, de fases da vida, de projetos, de ideais. Cada perda carrega consigo um universo de significados que precisa ser elaborado.</p>
                </div>
            </div>

            <h2>Compreendendo o luto</h2>

            <div class="topic-item">
                <h3><ion-icon name="heart-dislike-outline"></ion-icon> O luto como processo</h3>
                <p>O luto não é linear nem tem prazo para acabar. É um processo único para cada pessoa, que envolve diferentes emoções: negação, raiva, tristeza, culpa e, eventualmente, a possibilidade de ressignificação.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="leaf-outline"></ion-icon> Lutos não autorizados</h3>
                <p>Muitas vezes a sociedade não autoriza certos lutos — a perda de um animal, um aborto, o fim de um relacionamento. A terapia acolhe todas as formas de perda.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="alert-circle-outline"></ion-icon> Luto complicado</h3>
                <p>Quando o luto se prolonga de forma intensa, impedindo a pessoa de retomar sua vida, pode se configurar como luto complicado, necessitando de acompanhamento profissional.</p>
            </div>

            <h2>O papel da terapia no luto</h2>
            <p>A psicoterapia não busca apagar a dor da perda, mas oferecer um espaço onde essa dor possa ser expressa, acolhida e elaborada. O trabalho terapêutico auxilia na construção de novos sentidos, permitindo que a pessoa mantenha viva a memória de quem partiu enquanto reconstrói sua própria trajetória.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Não existe forma certa de viver o luto.</strong> Cada pessoa tem seu próprio tempo e processo.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia ajuda a <strong>dar sentido à perda</strong> sem negar a dor.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Pedir ajuda é <strong>um ato de cuidado</strong>, não de fraqueza.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Precisa de acolhimento nesse momento?</h3>
        <p>Agende uma consulta em um espaço seguro para falar sobre sua dor.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
