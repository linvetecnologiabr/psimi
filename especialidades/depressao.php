<?php
$page_title = 'Depressão | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Tratamento psicológico para depressão com Psicóloga Michely Ciardulo. Abordagem psicanalítica, atendimento online e presencial em São Paulo. CRP 06/176130.';
$meta_keywords = 'depressão psicóloga, tratamento depressão, psicóloga depressão são paulo, terapia depressão online';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Depressão', 'url' => 'https://michelyciardulo.com.br/especialidades/depressao'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/especialidades">Especialidades</a><span>›</span>
            <a href="#">Depressão</a>
        </div>
        <h1>Depressão</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-03.jpg" alt="Depressão" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A depressão vai além da tristeza. É um sofrimento profundo que afeta a forma como a pessoa se relaciona consigo mesma, com os outros e com o mundo. A psicoterapia é fundamental para a compreensão e elaboração desse quadro.</p>
                    <p>Na perspectiva psicanalítica, a depressão pode ser compreendida como uma resposta a perdas — reais ou simbólicas — que não foram adequadamente elaboradas. O sujeito se retira do mundo, perde o interesse pelas coisas e pelas pessoas, sentindo um vazio que parece não ter explicação.</p>
                </div>
            </div>

            <h2>Sinais que merecem atenção</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="sad-outline"></ion-icon> Tristeza persistente</h3>
                <p>Sentimento de tristeza profunda que não passa, acompanhado de desesperança e sensação de vazio, mesmo sem um motivo aparente.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="moon-outline"></ion-icon> Alterações no sono e apetite</h3>
                <p>Insônia ou excesso de sono, perda ou aumento significativo de apetite. O corpo também expressa o sofrimento psíquico.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="volume-mute-outline"></ion-icon> Perda de interesse</h3>
                <p>Desinteresse por atividades que antes eram prazerosas, isolamento social e dificuldade de sentir prazer nas coisas cotidianas.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="brain-outline"></ion-icon> Dificuldade de concentração</h3>
                <p>Pensamentos negativos recorrentes, dificuldade para tomar decisões, sensação de cansaço mental constante.</p>
            </div>
            </div>

            <h2>Como a terapia pode ajudar</h2>
            <p>A psicoterapia oferece um espaço para que o sujeito possa falar sobre seu sofrimento, investigar suas causas e construir novas formas de lidar com a dor. O processo terapêutico não busca simplesmente eliminar os sintomas, mas compreender o que eles comunicam.</p>

            <p>Através da escuta analítica, é possível acessar conteúdos inconscientes que sustentam o quadro depressivo, abrindo caminho para a elaboração e transformação.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Depressão não é frescura.</strong> É um sofrimento real que merece atenção e cuidado profissional.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia pode ser combinada com <strong>acompanhamento psiquiátrico</strong> quando necessário.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>O primeiro passo é <strong>pedir ajuda</strong>. Você não precisa enfrentar isso sozinho(a).</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Você não precisa sofrer sozinho(a)</h3>
        <p>Agende uma consulta e dê o primeiro passo em direção ao cuidado.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
