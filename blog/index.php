<?php
$page_title = 'Blog | Psicóloga Michely Ciardulo - Insights Psicanalíticos';
$meta_description = 'Blog da Psicóloga Michely Ciardulo. Artigos sobre psicanálise, terapia de casal, ansiedade, depressão, autoconhecimento e saúde mental.';
$meta_keywords = 'blog psicologia, artigos psicanálise, terapia de casal, ansiedade, depressão, saúde mental';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Blog', 'url' => 'https://michelyciardulo.com.br/blog'],
];
require_once __DIR__ . '/../header.php';

$posts = [
    [
        'title' => 'Equilibrando os pratos da vida',
        'excerpt' => 'Vivemos no tempo do Outro, produzimos para o Outro. Freud nos lembra: "Nós poderíamos ser muito melhores se não quiséssemos ser tão bons."',
        'image' => '',
        'url' => $base_url . '/blog/equilibrando-os-pratos-da-vida',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Reflexão',
    ],
    [
        'title' => 'Quando o sofrimento parece não ter fim',
        'excerpt' => 'O mito de Sísifo nos convida a refletir: por que repetimos padrões dolorosos? Às vezes o sintoma é tudo que o sujeito possui.',
        'image' => '',
        'url' => $base_url . '/blog/quando-o-sofrimento-parece-nao-ter-fim',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Reflexão',
    ],
    [
        'title' => 'Paixão e objeto fantasmático',
        'excerpt' => 'O que sustenta a paixão? Uma análise sobre como o desejo se projeta no outro e cria o "objeto fantasmático" nas relações.',
        'image' => '',
        'url' => $base_url . '/blog/paixao-e-objeto-fantasmatico',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Psicanálise',
    ],
    [
        'title' => 'Estabelecendo limites',
        'excerpt' => 'Dizer "não" é um ato de autocuidado. Estabelecer limites é fundamental para preservar sua saúde mental e seus relacionamentos.',
        'image' => '',
        'url' => $base_url . '/blog/estabelecendo-limites',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Reflexão',
    ],
    [
        'title' => 'Para ser dois é preciso ser um',
        'excerpt' => 'Antes de construir uma relação saudável, é preciso se conhecer. Reflexão sobre individualidade e vínculos afetivos.',
        'image' => '',
        'url' => $base_url . '/blog/para-ser-dois-e-preciso-ser-um',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Reflexão',
    ],
    [
        'title' => 'Como você tem lidado com seu tempo?',
        'excerpt' => 'O tempo é o recurso mais precioso que temos. Reflexão sobre produtividade, presença e o que realmente importa.',
        'image' => '',
        'url' => $base_url . '/blog/como-voce-tem-lidado-com-seu-tempo',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Reflexão',
    ],
    [
        'title' => 'Como funciona a Terapia de Casal?',
        'excerpt' => 'A terapia de casal se insere como uma ferramenta essencial na jornada de compreensão e fortalecimento dos vínculos afetivos.',
        'image' => '',
        'url' => $base_url . '/blog/terapia-de-casal',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Artigo',
    ],
    [
        'title' => 'Fibromialgia: aspectos dolorosos e psicossomáticos',
        'excerpt' => 'Artigo científico sobre os aspectos psicossomáticos da fibromialgia, publicado na Revista REASE.',
        'image' => $assets . '/img/img-artigo01.jpg',
        'url' => 'https://periodicorease.pro.br/rease/article/view/4999/1917',
        'author' => 'Psi. Michely Ciardulo',
        'tag' => 'Artigo',
    ],
];
?>

<style>
.blog-header {
    background: linear-gradient(135deg, #1a2a4a 0%, #2d4a7a 100%);
    padding: 80px 0 40px;
    color: #fff;
}
.blog-header h1 {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 10px;
}
.blog-header p {
    opacity: 0.8;
    font-size: 16px;
}
.blog-list {
    padding: 60px 0 80px;
    background: #f8f9fa;
}
.blog-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: all 0.3s;
    cursor: pointer;
    height: 100%;
}
.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.12);
}
.blog-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}
.blog-card .no-img {
    width: 100%;
    height: 220px;
    background: linear-gradient(135deg, #e8eef9 0%, #d5dff0 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 48px;
    color: #2d4a7a;
}
.blog-card-body {
    padding: 25px;
}
.blog-card-body .tag {
    display: inline-block;
    background: #e8eef9;
    color: #2d4a7a;
    font-size: 12px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    text-transform: uppercase;
    margin-bottom: 12px;
}
.blog-card-body h3 {
    font-size: 20px;
    font-weight: 700;
    color: #1a2a4a;
    margin-bottom: 10px;
    line-height: 1.4;
}
.blog-card-body p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 15px;
}
.blog-card-body .author {
    font-size: 13px;
    color: #999;
    font-weight: 600;
}
</style>

<section class="blog-header">
    <div class="container">
        <h1>Vida em movimento: <b>Insights psicanalíticos</b></h1>
        <p>Artigos e reflexões sobre saúde mental, psicanálise e autoconhecimento.</p>
    </div>
</section>

<section class="blog-list">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post): ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="blog-card" onclick="location.href='<?= $post['url'] ?>'">
                    <?php if ($post['image']): ?>
                        <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
                    <?php else: ?>
                        <div class="no-img"><ion-icon name="create-outline"></ion-icon></div>
                    <?php endif; ?>
                    <div class="blog-card-body">
                        <span class="tag"><?= $post['tag'] ?></span>
                        <h3><?= $post['title'] ?></h3>
                        <p><?= $post['excerpt'] ?></p>
                        <span class="author"><?= $post['author'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
