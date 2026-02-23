<?php
$page_title = 'Quando o sofrimento não tem fim | Psi. Michely Ciardulo';
$meta_description = 'Reflexão sobre o mito de Sísifo e a repetição do sofrimento. Por que repetimos padrões dolorosos? Psicóloga Michely Ciardulo explica à luz de Camus e Freud.';
$meta_keywords = 'sofrimento, mito de sísifo, repetição, freud, camus, psicóloga sofrimento, sintoma psicanálise, psicóloga são paulo';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Quando o sofrimento parece não ter fim', 'url' => 'https://michelyciardulo.com.br/blog/quando-o-sofrimento-parece-nao-ter-fim'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/quando-o-sofrimento-parece-nao-ter-fim'],
];
require_once __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="<?= $assets ?>/css/pages.css">

<section class="page-header">
    <div class="container">
        <h1>Sofrimento Parece Não Ter Fim</h1>
        <div class="post-meta">Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">
            <img src="<?= $assets ?>/img/img-sofrimento.jpg" alt="Quando o Sofrimento Parece Não Ter Fim" class="featured-img">

            <p class="lead">O mito de Sísifo, interpretado à luz das ideias de Albert Camus e Sigmund Freud, oferece uma perspectiva intrigante sobre como algumas pessoas se encontram aprisionadas aos seus próprios sintomas, repetindo-os incessantemente como Sísifo carrega sua pedra.</p>

            <p>Camus enxerga Sísifo como um símbolo do absurdo da existência, onde a repetição da tarefa reflete a busca incessante por sentido em um mundo aparentemente sem propósito. Analogamente, muitas pessoas parecem presas em um ciclo semelhante, repetindo e mantendo-se ligadas a fontes de sofrimento, como se estivessem carregando suas próprias pedras morro acima, apenas para vê-las rolar de volta.</p>

            <p>Para Freud, a persistência no sofrimento pode ser entendida como uma forma de repetição inconsciente de experiências dolorosas do passado, não elaboradas e aspectos não integrados. Assim como Sísifo retorna repetidamente à sua tarefa, algumas pessoas repetem seus sintomas como uma maneira de lidar com traumas e conteúdos conflituosos.</p>

            <div class="topic-item">
                <h3><ion-icon name="fitness-outline"></ion-icon> Às vezes o sintoma é tudo que o sujeito possui</h3>
                <p>Ao refletirmos sobre o mito de Sísifo, somos convidados a examinar nossa própria relação com o sofrimento e a tarefa árdua e inconsciente de mantê-los em seu exato lugar.</p>
            </div>

            <p>É possível que ao reconhecermos nossas próprias pedras, possamos encontrar uma maneira possível não de exterminar o sintoma, mas de viver uma vida mais aderente ao que desejamos, às vezes negociando, às vezes elaborando.</p>

            <div class="reference">
                <strong>Por Michely Ciardulo</strong>
                Psicóloga Clínica — CRP 06/176130
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer quebrar o ciclo de repetição?</h3>
        <p>Agende uma consulta e comece a compreender seus padrões.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
