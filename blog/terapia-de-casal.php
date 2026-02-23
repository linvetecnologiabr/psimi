<?php
$page_title = 'Como funciona a terapia de casal? | Psicóloga Michely Ciardulo';
$meta_description = 'Como funciona a terapia de casal na psicanálise? Psicóloga Michely Ciardulo explica vínculos afetivos, papéis de gênero e o papel do terapeuta. São Paulo.';
$meta_keywords = 'terapia de casal, psicóloga terapia de casal, como funciona terapia de casal, terapia casal são paulo, psicanálise casal, terapia casal online, terapia casal presencial';
$og_type = 'article';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
    ['name' => 'Terapia de Casal', 'url' => 'https://michelyciardulo.com.br/blog/terapia-de-casal'],
];
$extra_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $page_title,
    'author' => ['@type' => 'Person', 'name' => 'Michely Ciardulo', 'jobTitle' => 'Psicóloga Clínica'],
    'publisher' => ['@type' => 'Organization', 'name' => 'Psicóloga Michely Ciardulo', 'url' => 'https://michelyciardulo.com.br'],
    'datePublished' => '2025-01-15',
    'dateModified' => '2025-01-15',
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://michelyciardulo.com.br/blog/terapia-de-casal'],
];
require_once __DIR__ . '/../header.php';
?>

<style>
.blog-post-header {
    background: linear-gradient(135deg, #1a2a4a 0%, #2d4a7a 100%);
    padding: 80px 0 40px;
    color: #fff;
}
.blog-post-header .breadcrumb-nav {
    margin-bottom: 20px;
}
.blog-post-header .breadcrumb-nav a {
    color: rgba(255,255,255,0.7);
    text-decoration: none;
    font-size: 14px;
}
.blog-post-header .breadcrumb-nav a:hover {
    color: #fff;
}
.blog-post-header .breadcrumb-nav span {
    color: rgba(255,255,255,0.5);
    margin: 0 8px;
    font-size: 14px;
}
.blog-post-header h1 {
    font-size: 36px;
    font-weight: 800;
    margin: 0 0 15px;
    line-height: 1.3;
}
.blog-post-header .post-meta {
    font-size: 14px;
    color: rgba(255,255,255,0.7);
}
.blog-post-header .post-meta strong {
    color: #fff;
}
.blog-post-content {
    padding: 50px 0 80px;
}
.blog-post-content .post-body {
    max-width: 800px;
    margin: 0 auto;
}
.blog-post-content .post-featured-img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 35px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}
.blog-post-content .post-body p {
    font-size: 17px;
    line-height: 1.9;
    color: #444;
    margin-bottom: 20px;
    text-align: justify;
}
.blog-post-content .post-body p.lead {
    font-size: 19px;
    color: #333;
    font-weight: 500;
    border-left: 4px solid #2d4a7a;
    padding-left: 20px;
    margin-bottom: 30px;
}
.blog-post-content .post-body h2 {
    font-size: 26px;
    font-weight: 700;
    color: #1a2a4a;
    margin: 40px 0 20px;
}
.blog-post-content .post-body h3 {
    font-size: 20px;
    font-weight: 700;
    color: #2d4a7a;
    margin: 30px 0 15px;
}
.blog-post-content .post-body .topic-item {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 25px 30px;
    margin-bottom: 20px;
    border-left: 4px solid #2d4a7a;
}
.blog-post-content .post-body .topic-item h3 {
    margin-top: 0;
    font-size: 18px;
}
.blog-post-content .post-body .topic-item p {
    margin-bottom: 0;
    font-size: 16px;
}
.blog-post-content .post-body .highlight-box {
    background: linear-gradient(135deg, #f0f4ff 0%, #e8eef9 100%);
    border-radius: 12px;
    padding: 30px;
    margin: 35px 0;
}
.blog-post-content .post-body .highlight-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.blog-post-content .post-body .highlight-box ul li {
    font-size: 16px;
    color: #444;
    padding: 10px 0;
    border-bottom: 1px solid rgba(0,0,0,0.06);
    display: flex;
    align-items: flex-start;
    gap: 12px;
}
.blog-post-content .post-body .highlight-box ul li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.blog-post-content .post-body .highlight-box ul li ion-icon {
    color: #2d4a7a;
    font-size: 20px;
    flex-shrink: 0;
    margin-top: 2px;
}
.blog-post-content .post-body .reference {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px 25px;
    margin-top: 40px;
    font-size: 14px;
    color: #666;
}
.blog-post-content .post-body .reference strong {
    color: #333;
    display: block;
    margin-bottom: 5px;
}
.blog-cta {
    background: linear-gradient(135deg, #1a2a4a 0%, #2d4a7a 100%);
    padding: 60px 0;
    text-align: center;
    color: #fff;
}
.blog-cta h3 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 15px;
}
.blog-cta p {
    font-size: 16px;
    opacity: 0.85;
    margin-bottom: 25px;
}
.blog-cta .btn-whatsapp {
    display: inline-block;
    background: #22B05E;
    color: #fff;
    text-decoration: none;
    padding: 15px 40px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s;
}
.blog-cta .btn-whatsapp:hover {
    background: #1a9e50;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(34,176,94,0.4);
}
@media (max-width: 768px) {
    .blog-post-header { padding: 70px 0 30px; }
    .blog-post-header h1 { font-size: 26px; }
    .blog-post-content .post-body .topic-item { padding: 20px; }
    .blog-cta h3 { font-size: 22px; }
}
</style>

<!-- JSON-LD Article Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Como funciona a Terapia de Casal?",
    "author": {
        "@type": "Person",
        "name": "Psicóloga Michely Ciardulo",
        "jobTitle": "Psicóloga Clínica",
        "description": "CRP 06/176130"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Psicóloga Michely Ciardulo"
    },
    "datePublished": "2026-02-17",
    "description": "Entenda como funciona a terapia de casal na psicanálise. Vínculos afetivos, papéis de gênero, transmissão geracional e o papel do terapeuta.",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?= $site_url ?>/blog/terapia-de-casal"
    }
}
</script>

<section class="blog-post-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a>
            <span>›</span>
            <a href="<?= $base_url ?>/blog">Blog</a>
            <span>›</span>
            <a href="#">Terapia de Casal</a>
        </div>
        <h1>Como funciona a Terapia de Casal?</h1>
        <div class="post-meta">
            Por <strong>Psicóloga Michely Ciardulo</strong> — CRP: 06/176130
        </div>
    </div>
</section>

<section class="blog-post-content">
    <div class="container">
        <div class="post-body">

            <img src="<?= $assets ?>/img/img-casal.jpg" alt="Terapia de Casal - Psicóloga Michely Ciardulo" class="post-featured-img">

            <p class="lead">A terapia de casal se insere como uma ferramenta essencial na jornada de compreensão e fortalecimento dos vínculos afetivos. Neste contexto, mergulhamos nas profundezas da conjugalidade contemporânea, onde as influências familiares, expectativas sociais e dinâmicas inconscientes desempenham papéis fundamentais.</p>

            <div class="topic-item">
                <h3><ion-icon name="search-outline"></ion-icon> Explorando a Responsabilidade na Intimidade Emocional</h3>
                <p>Na terapia de casal, os parceiros são convidados a explorar suas responsabilidades na construção e manutenção da intimidade emocional, reconhecendo as influências de gênero e as expectativas sociais associadas (Nunan, 2003).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="scale-outline"></ion-icon> Papéis de Gênero</h3>
                <p>Na terapia de casal, os casais são convidados a refletirem sobre questões relacionadas à sensação de perda de liberdade e sobre as diferenças de gênero, de acordo com as construções pessoais e sociais de cada um dos pares (Nunan, 2003).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="water-outline"></ion-icon> Certezas Efêmeras</h3>
                <p>Dentro do contexto terapêutico, os casais são convidados a explorar suas expectativas em relação ao relacionamento, reconhecendo a natureza transitória das certezas e buscando construir uma base mais sólida de confiança mútua.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="home-outline"></ion-icon> Investigando as Origens Familiares na Conjugalidade</h3>
                <p>A terapia de casal proporciona um espaço seguro para a exploração das influências familiares na dinâmica do relacionamento, permitindo que os parceiros compreendam e reconstruam padrões relacionais patológicos e ou adoecidos (McDougall, 1993).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="brain-outline"></ion-icon> Vínculos Inconscientes</h3>
                <p>A terapia de casal auxilia os casais a identificarem e explorarem os vínculos inconscientes que moldam suas interações, promovendo uma maior consciência e compreensão mútua de como conteúdos por vezes inconscientes se atualizam na relação (Eiguer, 1984).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="people-outline"></ion-icon> Colusões e Expectativas Não Expressas</h3>
                <p>A terapia de casal abre espaço para a investigação das colusões (acordo secreto) e expectativas não expressas que podem gerar conflitos e ressentimentos, incentivando uma comunicação autêntica e empática entre os parceiros (Willi, 1978).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="leaf-outline"></ion-icon> Espaço Transicional</h3>
                <p>Durante o processo terapêutico, os casais são encorajados a cultivar um espaço de exploração e crescimento mútuo, onde possam integrar suas realidades internas e externas de forma criativa e enriquecedora (Winnicott, 1971).</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="git-branch-outline"></ion-icon> Transmissão Psíquica Geracional</h3>
                <p>A terapia de casal reconhece a importância da transmissão psíquica geracional na construção da identidade e dos padrões relacionais individuais, incentivando os parceiros a explorarem suas heranças familiares e a construírem narrativas mais conscientes e autênticas (Kaës, 1993).</p>
            </div>

            <h2>O papel transformador da terapia de casal</h2>
            <p>A terapia de casal se revela como um espaço de exploração e transformação, onde os parceiros são convidados a navegar nas complexidades de suas relações, reconhecendo e integrando as influências do passado, as expectativas do presente e as aspirações para o futuro. Em meio às tempestades e às calmarias, a terapia de casal pode ser compreendida como uma espécie de farol, vai iluminando junto com o par amoroso, pontos obscuros, proporcionando novas narrativas e formas de se relacionar.</p>

            <div class="highlight-box">
                <ul>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span>A terapia de casal <strong>não é exclusiva para casais casados</strong>; qualquer formato de relacionamento amoroso pode realizar terapia de casal.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span>O objetivo da terapia de casal <strong>não é separar nem unir o casal</strong>, mas sim promover uma compreensão mais profunda da relação.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span>Assim como na psicoterapia individual, a terapia de casal <strong>não busca direcionar o casal para uma decisão específica</strong>, mas sim explorar as questões subjacentes, insatisfações e queixas do par amoroso.</span>
                    </li>
                    <li>
                        <ion-icon name="checkmark-circle"></ion-icon>
                        <span>Fazer terapia de casal <strong>não é indicativo de uma relação falida</strong>; ao contrário, é um passo corajoso em direção à construção de novos recursos relacionais e conscientização de pontos conflituosos.</span>
                    </li>
                </ul>
            </div>

            <div class="reference">
                <strong>Referência:</strong>
                Féres-Carneiro, Terezinha. <em>FAMÍLIA E CASAL: efeitos da contemporaneidade</em>.
            </div>

        </div>
    </div>
</section>

<section class="blog-cta">
    <div class="container">
        <h3>Quer saber mais sobre terapia de casal?</h3>
        <p>Agende uma consulta e descubra como a terapia pode transformar seu relacionamento.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank">
            <ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>
            Agendar Consulta
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
