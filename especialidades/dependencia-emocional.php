<?php
$page_title = 'Dependência Emocional | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Tratamento para dependência emocional com Psicóloga Michely Ciardulo. Compreenda seus padrões afetivos e construa autonomia emocional. Online e presencial em SP.';
$meta_keywords = 'dependência emocional psicóloga, tratamento dependência emocional, psicóloga dependência afetiva, autonomia emocional terapia';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Dependência Emocional', 'url' => 'https://michelyciardulo.com.br/especialidades/dependencia-emocional'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
       
        <h1>Dependência Emocional</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-08.jpg" alt="Dependência Emocional" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A dependência emocional se caracteriza pela necessidade excessiva do outro para se sentir completo, seguro e validado. A terapia ajuda a compreender esses padrões e construir autonomia afetiva.</p>
                    <p>Na dependência emocional, o sujeito coloca no outro a responsabilidade pelo seu bem-estar, felicidade e sentido de vida. Essa dinâmica gera sofrimento tanto para quem depende quanto para o parceiro, criando relações desequilibradas e, muitas vezes, tóxicas.</p>
                </div>
            </div>

            <h2>Sinais de dependência emocional</h2>

            <div class="topic-grid">
            <div class="topic-item">
                <h3><ion-icon name="link-outline"></ion-icon> Medo intenso de abandono</h3>
                <p>Ansiedade extrema diante da possibilidade de perder o outro. Comportamentos de controle, ciúmes excessivo e necessidade constante de reafirmação do amor.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="person-outline"></ion-icon> Anulação de si mesmo</h3>
                <p>Abrir mão dos próprios desejos, sonhos, amizades e interesses para agradar o outro ou evitar conflitos. Perda gradual da própria identidade.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="sync-outline"></ion-icon> Relações repetitivas</h3>
                <p>Padrão de entrar em relacionamentos com dinâmicas semelhantes, onde a submissão e a idealização do outro se repetem sistematicamente.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="heart-dislike-outline"></ion-icon> Dificuldade de ficar só</h3>
                <p>Sensação de vazio e desamparo quando está sozinho. A solidão é vivida como algo insuportável, levando a relacionamentos por necessidade e não por desejo.</p>
            </div>
            </div>

            <h2>O caminho para a autonomia emocional</h2>
            <p>A psicoterapia investiga as raízes da dependência emocional, frequentemente ligadas a experiências da infância e às relações com figuras de cuidado. Compreender de onde vem essa necessidade é o primeiro passo para transformá-la.</p>

            <p>O processo terapêutico ajuda a construir recursos internos para que o sujeito possa se sustentar emocionalmente, estabelecer relações mais equilibradas e reconhecer que, antes de ser dois, é preciso ser um.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span><strong>Antes de ser dois, é preciso ser um.</strong> A terapia ajuda nessa construção.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Dependência emocional <strong>não é amor</strong> — é uma forma de sofrimento que pode ser transformada.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>É possível <strong>aprender a se relacionar de forma saudável</strong> e prazerosa.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Construa sua autonomia emocional</h3>
        <p>Agende uma consulta e descubra novas formas de se relacionar.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
