<?php
$page_title = 'Sobre Mim | Psicóloga Michely Ciardulo - CRP 06/176130';
$meta_description = 'Conheça a Psicóloga Michely Ciardulo. Pós-graduada em Psicanálise e Saúde Mental. Atendimento psicológico online e presencial em São Paulo. CRP 06/176130.';
$meta_keywords = 'psicóloga michely ciardulo, sobre psicóloga, psicóloga são paulo, psicanálise, CRP 06/176130';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Sobre mim', 'url' => 'https://michelyciardulo.com.br/sobre'],
];
require_once __DIR__ . '/header.php';
?>

<section class="page-header">
    <div class="container">

        <h1>Sobre Mim</h1>
        <div class="post-meta">Psicóloga Michely Ciardulo — <strong>CRP 06/176130</strong></div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/img-slider01.jpg" alt="Psicóloga Michely Ciardulo" class="featured-img">
                
                <div class="intro-text">
                    <p class="lead">Sou Psicóloga, me oriento pela teoria psicanalítica, te ajudo a compreender e refletir seu lugar nas relações e no mundo, promovendo o autoconhecimento.</p>
                    <p>Sou pós-graduada em teoria psicanalítica e pós-graduada em saúde mental e psiquiatria. Realizo atendimento psicológico na modalidade online e presencial, sempre prezando pela ética, escuta ativa e acolhimento.</p>
    
    
                    <p>Acredito que cada pessoa é singular e merece um espaço seguro para explorar suas questões, afetos e formas de se relacionar com o mundo. A psicanálise nos convida a olhar para além do óbvio, buscando compreender as motivações inconscientes que moldam nossas escolhas, relações e sintomas.</p>

                
                     <p>Meu trabalho é caminhar ao seu lado nessa jornada de autoconhecimento, oferecendo uma escuta qualificada e acolhedora, respeitando seu tempo e sua história.</p>

                
                </div>
            </div>

           
            <div class="highlight-box">
                <ul>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span><strong>Sessões online e presencial</strong> — Atendimento adaptado à sua rotina e necessidade.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span><strong>Adolescentes, adultos e casais</strong> — Acompanhamento terapêutico para diferentes fases da vida.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span><strong>Foco no sujeito</strong> — Em seus afetos e sua forma de ver o mundo.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span><strong>Ética e acolhimento</strong> — Sempre prezando pela escuta ativa e pelo respeito à sua singularidade.</span>
                    </li>
                </ul>
            </div>

            <h2>Por que fazer terapia?</h2>
            <p>A psicoterapia é um espaço de reflexão e transformação. Não se trata apenas de resolver problemas pontuais, mas de construir uma relação mais autêntica consigo mesmo e com os outros. É um investimento em autoconhecimento, em qualidade de vida e em relações mais saudáveis.</p>

            <p>Muitas vezes carregamos padrões e crenças que nos foram transmitidos ao longo da vida, sem perceber como eles influenciam nossas escolhas e nosso modo de estar no mundo. A terapia nos ajuda a iluminar esses pontos, abrindo espaço para novas possibilidades.</p>

            <h2>Como funciona o atendimento</h2>

            <div class="topic-item">
                <h3><ion-icon name="clipboard-outline"></ion-icon> Primeiro contato</h3>
                <p>Entre em contato pelo WhatsApp para agendar sua primeira sessão. Nesse momento, combinamos horário, modalidade (online ou presencial) e tiramos suas dúvidas.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="people-outline"></ion-icon> Primeira sessão</h3>
                <p>Na primeira sessão, conversamos sobre o que te trouxe até aqui, sua história, suas questões e expectativas. É um momento de acolhimento e de começar a construir o vínculo terapêutico.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="sync-outline"></ion-icon> Processo terapêutico</h3>
                <p>As sessões acontecem semanalmente, com duração de 50 minutos. O processo é contínuo e respeita o seu tempo — cada pessoa tem seu próprio ritmo de elaboração e transformação.</p>
            </div>

        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Vamos juntos nessa jornada?</h3>
        <p>Agende sua consulta e dê o primeiro passo em direção ao autoconhecimento.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank">
            <ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>
            Agendar Consulta
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
