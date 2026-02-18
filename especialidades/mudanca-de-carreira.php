<?php
$page_title = 'Mudança de Carreira | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Apoio psicológico para mudança de carreira e transição profissional. Psicóloga Michely Ciardulo ajuda a compreender seus desejos e construir novos caminhos.';
$meta_keywords = 'mudança de carreira psicóloga, transição profissional terapia, psicóloga carreira são paulo, orientação profissional psicanálise';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Mudança de Carreira', 'url' => 'https://michelyciardulo.com.br/especialidades/mudanca-de-carreira'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/especialidades">Especialidades</a><span>›</span>
            <a href="#">Mudança de Carreira</a>
        </div>
        <h1>Mudança de Carreira</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-01.jpg" alt="Mudança de Carreira" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A mudança de carreira é um momento de profunda reflexão sobre quem somos, o que desejamos e qual sentido queremos dar à nossa vida profissional. A terapia oferece suporte para essa transição.</p>
                    <p>Muitas vezes, a insatisfação profissional não é apenas sobre o trabalho em si, mas sobre o lugar que ocupamos no mundo. Escolhas feitas sob pressão familiar, social ou financeira podem nos afastar dos nossos desejos mais autênticos, gerando um sentimento de vazio e falta de propósito.</p>
                </div>
            </div>

            <h2>Quando a carreira pede reflexão</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="sad-outline"></ion-icon> Esgotamento profissional</h3>
                <p>Burnout, desmotivação constante, sensação de que o trabalho perdeu o sentido. Quando ir trabalhar se torna um fardo diário.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="sync-outline"></ion-icon> Sensação de estar no lugar errado</h3>
                <p>A percepção de que a carreira atual não corresponde a quem você é, seus valores e seus desejos mais profundos.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="alert-circle-outline"></ion-icon> Medo de mudar</h3>
                <p>O desejo de mudança existe, mas o medo da instabilidade financeira, do julgamento dos outros e do desconhecido paralisa a ação.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="help-circle-outline"></ion-icon> Crise de identidade profissional</h3>
                <p>"Não sei o que quero fazer" — quando a dúvida sobre o caminho profissional reflete questões mais profundas sobre identidade e propósito.</p>
            </div>
            </div>

            <h2>O papel da terapia na transição</h2>
            <p>A psicoterapia não é orientação vocacional — é um espaço para compreender as motivações inconscientes por trás das escolhas profissionais, os medos que impedem a mudança e os desejos que pedem espaço.</p>

            <p>Ao investigar sua história, suas relações e seus padrões, torna-se possível fazer escolhas mais alinhadas com quem você verdadeiramente é, construindo uma carreira que faça sentido para sua vida.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Nunca é tarde para recomeçar.</strong> A mudança é possível em qualquer fase da vida.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia ajuda a <strong>separar o desejo próprio das expectativas alheias</strong>.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Mudar de carreira é <strong>um ato de coragem e autoconhecimento</strong>.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer redescobrir seu propósito profissional?</h3>
        <p>Agende uma consulta e dê o primeiro passo em direção a uma carreira que faça sentido.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
