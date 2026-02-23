<?php
$page_title = 'Terapia de Casal | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Terapia de casal com Psicóloga Michely Ciardulo. Fortalecimento de vínculos, comunicação e dinâmicas conjugais. Atendimento online e presencial em São Paulo.';
$meta_keywords = 'terapia de casal, psicóloga terapia casal, terapia casal online, terapia casal presencial, casal psicanálise, terapia de casal são paulo';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Terapia de Casal', 'url' => 'https://michelyciardulo.com.br/especialidades/terapia-de-casal'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Terapia de Casal</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-01.jpg" alt="Terapia de Casal" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A terapia de casal é uma ferramenta essencial na jornada de compreensão e fortalecimento dos vínculos afetivos, onde exploramos as influências familiares, expectativas sociais e dinâmicas inconscientes.</p>
                    <p>Na terapia de casal, os parceiros são convidados a explorar suas responsabilidades na construção e manutenção da intimidade emocional, reconhecendo as influências de gênero e as expectativas sociais que permeiam o relacionamento.</p>
                </div>
            </div>

            <h2>O que trabalhamos na terapia de casal</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="search-outline"></ion-icon> Intimidade Emocional</h3>
                <p>Exploramos as responsabilidades de cada parceiro na construção e manutenção da intimidade emocional, reconhecendo influências de gênero e expectativas sociais.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="scale-outline"></ion-icon> Papéis de Gênero</h3>
                <p>Reflexão sobre questões relacionadas à sensação de perda de liberdade e sobre as diferenças de gênero, de acordo com as construções pessoais e sociais de cada parceiro.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="home-outline"></ion-icon> Origens Familiares</h3>
                <p>Um espaço seguro para explorar como as influências familiares moldam a dinâmica do relacionamento, permitindo compreender e reconstruir padrões relacionais.</p>
            </div>

          
            </div>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia de casal <strong>não é exclusiva para casais casados</strong> — qualquer formato de relacionamento amoroso pode se beneficiar.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>O objetivo <strong>não é separar nem unir</strong>, mas promover compreensão mais profunda da relação.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Fazer terapia de casal <strong>não é indicativo de relação falida</strong> — é um passo corajoso rumo a novos recursos relacionais.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer fortalecer seu relacionamento?</h3>
        <p>Agende uma sessão de terapia de casal e descubra novas formas de se conectar.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
