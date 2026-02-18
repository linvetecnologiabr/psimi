<?php
$page_title = 'Insegurança | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Tratamento psicológico para insegurança. Fortaleça sua autoconfiança com acompanhamento da Psicóloga Michely Ciardulo. Atendimento online e presencial em São Paulo.';
$meta_keywords = 'insegurança psicóloga, tratamento insegurança, autoconfiança terapia, psicóloga insegurança são paulo';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Insegurança', 'url' => 'https://michelyciardulo.com.br/especialidades/inseguranca'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/especialidades">Especialidades</a><span>›</span>
            <a href="#">Insegurança</a>
        </div>
        <h1>Insegurança</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-06.jpg" alt="Insegurança" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A insegurança pode se manifestar em diversas áreas da vida — nos relacionamentos, no trabalho, nas decisões cotidianas. A terapia ajuda a compreender suas raízes e construir uma relação mais segura consigo mesmo.</p>
                    <p>A insegurança frequentemente tem suas raízes nas experiências da infância e nas relações primárias. A forma como fomos cuidados, validados e reconhecidos nos primeiros anos de vida deixa marcas profundas na forma como nos vemos e nos posicionamos no mundo.</p>
                </div>
            </div>

            <h2>Como a insegurança se manifesta</h2>

            <div class="topic-item">
                <h3><ion-icon name="eye-off-outline"></ion-icon> Comparação constante</h3>
                <p>Sentir-se sempre inferior aos outros, comparar-se constantemente e acreditar que nunca é bom o suficiente. A busca por aprovação externa se torna um ciclo sem fim.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="alert-circle-outline"></ion-icon> Medo de errar</h3>
                <p>Evitar desafios, procrastinar decisões importantes e permanecer na zona de conforto por medo de falhar e ser julgado.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="people-outline"></ion-icon> Nos relacionamentos</h3>
                <p>Ciúmes excessivo, necessidade de controle, dificuldade de confiar no outro e medo constante de abandono ou rejeição.</p>
            </div>

            <h2>O caminho terapêutico</h2>
            <p>A terapia psicanalítica investiga as origens da insegurança, permitindo que o sujeito compreenda de onde vêm seus medos e sua necessidade de validação. Ao acessar essas raízes, torna-se possível construir uma relação mais autêntica e segura consigo mesmo.</p>

            <p>O processo terapêutico fortalece a capacidade de se posicionar, de fazer escolhas baseadas em seus próprios desejos e de tolerar a imperfeição — tanto a própria quanto a dos outros.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A insegurança <strong>tem raízes que podem ser compreendidas</strong> e transformadas.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Segurança emocional é <strong>uma construção</strong>, não algo que se nasce tendo.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia ajuda a <strong>validar quem você é</strong>, sem depender da aprovação alheia.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Construa uma relação mais segura consigo</h3>
        <p>Agende uma consulta e comece a fortalecer sua autoconfiança.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
