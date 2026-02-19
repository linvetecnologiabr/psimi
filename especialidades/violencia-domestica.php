<?php
$page_title = 'Violência Doméstica | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Atendimento psicológico especializado para vítimas de violência doméstica. Acolhimento, escuta e suporte terapêutico com a Psicóloga Michely Ciardulo em São Paulo.';
$meta_keywords = 'violência doméstica psicóloga, atendimento violência doméstica, psicóloga vítimas violência, acolhimento violência doméstica são paulo';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Violência Doméstica', 'url' => 'https://michelyciardulo.com.br/especialidades/violencia-domestica'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">

        <h1>Violência Doméstica</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-02.jpg" alt="Violência Doméstica" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A violência doméstica é uma das formas mais devastadoras de sofrimento humano. O atendimento psicológico oferece um espaço seguro de acolhimento, escuta e reconstrução para quem vivencia essa realidade.</p>
                    <p>A violência doméstica não se limita à agressão física — ela se manifesta também nas formas psicológica, moral, patrimonial e sexual. Muitas vezes, a vítima não reconhece que está sendo violentada, pois a violência é naturalizada no cotidiano da relação.</p>
                </div>
            </div>

            <h2>Formas de violência doméstica</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="heart-dislike-outline"></ion-icon> Violência Psicológica</h3>
                <p>Manipulação, humilhação, controle excessivo, ciúmes patológicos, isolamento social e desvalorização constante. Muitas vezes invisível, mas profundamente destrutiva.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="chatbubble-outline"></ion-icon> Violência Moral</h3>
                <p>Calúnia, difamação e injúria — ataques à reputação e dignidade da vítima perante família, amigos e sociedade.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="hand-left-outline"></ion-icon> Violência Física</h3>
                <p>Qualquer ação que cause dano à integridade física, desde empurrões até agressões graves. A violência física frequentemente coexiste com outras formas de violência.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="cash-outline"></ion-icon> Violência Patrimonial</h3>
                <p>Controle financeiro, destruição de pertences, impedimento de trabalhar — formas de manter a vítima em situação de dependência e submissão.</p>
            </div>
            </div>

            <h2>O papel da terapia</h2>
            <p>A psicoterapia para vítimas de violência doméstica tem como objetivo oferecer um espaço de acolhimento onde a pessoa possa elaborar suas experiências, reconstruir sua autoestima e desenvolver recursos para romper ciclos de violência.</p>

            <p>O trabalho terapêutico ajuda a compreender as dinâmicas que mantêm a pessoa presa nesse ciclo, fortalecendo sua autonomia emocional e capacidade de tomar decisões sobre sua própria vida.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Você não está sozinha.</strong> Buscar ajuda é um ato de coragem e amor próprio.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia oferece <strong>sigilo absoluto</strong> e um espaço seguro para falar sobre suas experiências.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Central de Atendimento à Mulher: <strong>Ligue 180</strong> (24 horas, gratuito).</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Precisa de acolhimento profissional?</h3>
        <p>Agende uma consulta em um espaço seguro e sigiloso.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
