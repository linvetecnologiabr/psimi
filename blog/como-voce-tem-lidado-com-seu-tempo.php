<?php
$page_title = 'Como você tem lidado com seu tempo? | Psicóloga Michely Ciardulo';
$meta_description = 'Reflexão sobre o tempo e nossa relação com ele. Como lidamos com a pressa, a presença e a qualidade das nossas experiências. Por Psicóloga Michely Ciardulo.';
$meta_keywords = 'tempo, reflexão sobre tempo, qualidade de vida, presença, psicóloga reflexão, saúde mental tempo';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Como você tem lidado com seu tempo', 'url' => 'https://michelyciardulo.com.br/blog/como-voce-tem-lidado-com-seu-tempo'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/como-voce-tem-lidado-com-seu-tempo'],
];
require_once __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="<?= $assets ?>/css/pages.css">

<section class="page-header">
    <div class="container">
      
        <h1>Como você tem lidado com seu Tempo?</h1>
        <div class="post-meta">Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">
            <img src="<?= $assets ?>/img/img-tempo.jpg" alt="Como você tem lidado com seu Tempo?" class="featured-img">

            <p class="lead">Há quem diga que o bem mais precioso é o tempo!</p>

            <p>Vivemos tentando a todo custo gerir o tempo, na esperança de termos tempo para fazer mais coisas, muitas vezes sem nem saber quais são.</p>

            <p>Ouvimos música assistindo séries, acompanhando as redes sociais, respondendo uma mensagem no WhatsApp, comendo alguma coisa, e quando falam conosco, respondemos "uhum" ou balançamos a cabeça como quem está prestando atenção em alguma coisa. "Ganha-se" tempo com o acumular das tarefas e não com a qualidade da presença.</p>

            <p>Muitas mães questionam o tão apressado tempo que transforma seu bebê da noite para o dia em uma criança "independente", andando sozinha pela casa.</p>

            <p>Na infância desejamos ser adolescentes. Na adolescência, desejamos apressar o tempo e ter a liberdade de um adulto. Na vida adulta, sentimos saudade de quando éramos crianças, onde tudo parecia ser mais simples.</p>

            <p>Na velhice, gostaríamos de ter mais tempo para as coisas que não tivemos tempo para perceber que eram importantes.</p>

            <p>Estamos sempre insatisfeitos com o apressamento ou a lentidão do tempo. Frequentemente, nos perdemos em suas nuances, alheios à sua natureza fugaz e generosa. Esse tempo, tão valioso, escorre por entre nossos dedos sem que possamos detê-lo.</p>

            <p><strong>Para você, quanto tempo o tempo tem? O que você tem feito com o seu tempo?</strong></p>

            <div class="reference">
                <strong>Por Michely Ciardulo</strong>
                Psicóloga Clínica — CRP 06/176130
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer refletir sobre sua relação com o tempo?</h3>
        <p>Agende uma consulta e construa uma vida com mais presença e sentido.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
