<?php
$page_title = 'Equilibrando os pratos da vida | Psicóloga Michely Ciardulo';
$meta_description = 'Reflexão sobre a pressão de ser bom demais e como equilibrar as demandas da vida. Freud nos lembra: cada um deve procurar, por si, tornar-se feliz.';
$meta_keywords = 'equilíbrio emocional, pressão social, freud felicidade, psicóloga equilíbrio, saúde mental, psicoterapia, psicóloga são paulo';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Equilibrando os pratos da vida', 'url' => 'https://michelyciardulo.com.br/blog/equilibrando-os-pratos-da-vida'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/equilibrando-os-pratos-da-vida'],
];
require_once __DIR__ . '/../header.php';
?>
<link rel="stylesheet" href="<?= $assets ?>/css/pages.css">

<section class="page-header">
    <div class="container">
       
        <h1>Equilibrando os Pratos da Vida</h1>
        <div class="post-meta">Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">
            <img src="<?= $assets ?>/img/img-pratos.jpg" alt="Equilibrando os Pratos da Vida" class="featured-img">

            <blockquote>"Nós poderíamos ser muito melhores se não quiséssemos ser tão bons."<br><small>— Sigmund Freud</small></blockquote>

            <p class="lead">Às vezes sentimos que a vida é um grande malabarismo: trabalho, família, relacionamento, saúde, finanças, lazer... E quando um prato cai, a culpa chega antes mesmo do barulho.</p>

            <p>Vivemos no tempo do Outro. Produzimos para o Outro, nos apresentamos para o Outro, nos avaliamos pelos olhos do Outro. A pressão de ser bom em tudo — bom profissional, bom pai, bom parceiro, boa filha — cria uma demanda impossível de ser atendida.</p>

            <p>Freud nos ensinou que a tentativa de ser perfeito é, paradoxalmente, uma das maiores fontes de adoecimento psíquico. Quando tentamos corresponder a um ideal inatingível, nos afastamos daquilo que realmente somos e do que realmente precisamos.</p>

            <div class="topic-item">
                <h3><ion-icon name="scale-outline"></ion-icon> O "adoecimento saudável"</h3>
                <p>Existe um momento em que o corpo e a mente dizem "basta". Ansiedade, insônia, irritabilidade, sensação de vazio — são sinais de que os pratos estão pesados demais. E reconhecer isso não é fraqueza: é o primeiro passo para uma reorganização genuína.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="compass-outline"></ion-icon> A psicoterapia como caminho</h3>
                <p>Na terapia, não se trata de aprender a segurar mais pratos, mas de entender quais são realmente seus e quais você carrega por obrigação, culpa ou medo. É um espaço para se perguntar: o que EU quero? O que faz sentido para a MINHA vida?</p>
            </div>

            <div class="highlight-box">
                <p>"Cada um deve procurar, por si, tornar-se feliz." — Freud</p>
            </div>

            <p>Tornar-se feliz não é um destino, é um percurso. E esse percurso passa por aceitar que nem todos os pratos precisam estar girando ao mesmo tempo — e que tudo bem se alguns deles caírem.</p>

            <div class="reference">
                <strong>Por Michely Ciardulo</strong>
                Psicóloga Clínica — CRP 06/176130
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Precisa de ajuda para equilibrar sua vida?</h3>
        <p>Agende uma consulta e encontre seu próprio ritmo.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
