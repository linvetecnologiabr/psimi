<?php
$page_title = 'Ansiedade | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Tratamento psicológico para ansiedade. Psicóloga Michely Ciardulo ajuda a compreender e manejar os sintomas ansiosos. Atendimento online e presencial em São Paulo.';
$meta_keywords = 'ansiedade psicóloga, tratamento ansiedade, psicóloga ansiedade são paulo, terapia ansiedade online, terapia ansiedade presencial, crise de ansiedade';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Ansiedade', 'url' => 'https://michelyciardulo.com.br/especialidades/ansiedade'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
       
        <h1>Ansiedade</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-05.jpg" alt="Ansiedade" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A ansiedade é uma resposta natural do organismo diante de situações de incerteza ou ameaça. Porém, quando se torna excessiva e constante, pode comprometer significativamente a qualidade de vida.</p>
                    <p>Na perspectiva psicanalítica, a ansiedade é compreendida como um sinal — algo no inconsciente pede para ser escutado. Os sintomas ansiosos são uma forma do psiquismo comunicar conflitos que não encontram outra via de expressão.</p>
                </div>
            </div>

            <h2>Manifestações da ansiedade</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="pulse-outline"></ion-icon> Sintomas físicos</h3>
                <p>Taquicardia, falta de ar, tremores, sudorese, tensão muscular, dores de cabeça e problemas gastrointestinais. O corpo fala quando a mente não encontra palavras.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="brain-outline"></ion-icon> Sintomas psicológicos</h3>
                <p>Preocupação excessiva, pensamentos catastróficos, dificuldade de concentração, irritabilidade, sensação de que algo ruim vai acontecer.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="sync-outline"></ion-icon> Comportamentos evitativos</h3>
                <p>Evitar situações, lugares ou pessoas por medo. Procrastinação, isolamento social e dificuldade de tomar decisões como estratégias inconscientes de proteção.</p>
            </div>
            </div>

            <h2>Como a terapia ajuda</h2>
            <p>A psicoterapia psicanalítica busca ir além do controle dos sintomas — ela investiga as raízes da ansiedade, os conflitos inconscientes que a alimentam e os padrões que se repetem na vida do sujeito.</p>

            <p>Compreender o que a ansiedade comunica é o primeiro passo para transformar a relação com ela. A terapia não promete eliminar toda angústia, mas oferece ferramentas para lidar com ela de forma mais consciente e menos paralisante.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Ansiedade não é falta de força.</strong> É um sinal de que algo precisa de atenção.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia ajuda a <strong>compreender as causas</strong>, não apenas os sintomas.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Atendimento <strong>online e presencial</strong> para sua comodidade.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>A ansiedade não precisa te controlar</h3>
        <p>Agende uma consulta e descubra novas formas de lidar com a angústia.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
