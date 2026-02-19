<?php
$page_title = 'Especialidades | Psicóloga Michely Ciardulo';
$meta_description = 'Conheça as especialidades da Psicóloga Michely Ciardulo: terapia de casal, violência doméstica, depressão, luto, ansiedade, insegurança, baixa autoestima, dependência emocional e burnout.';
$meta_keywords = 'especialidades psicóloga, terapia de casal, depressão, ansiedade, luto, violência doméstica, baixa autoestima, dependência emocional';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
];
require_once __DIR__ . '/../header.php';

$especialidades = [
    ['title' => 'Terapia de Casal', 'slug' => 'terapia-de-casal', 'img' => 'box-01.jpg', 'desc' => 'Fortalecimento dos vínculos afetivos e compreensão das dinâmicas conjugais.'],
    ['title' => 'Violência Doméstica', 'slug' => 'violencia-domestica', 'img' => 'box-02.jpg', 'desc' => 'Acolhimento e suporte psicológico para vítimas de violência doméstica.'],
    ['title' => 'Depressão', 'slug' => 'depressao', 'img' => 'box-03.jpg', 'desc' => 'Tratamento e acompanhamento psicológico para quadros depressivos.'],
    ['title' => 'Morte e Luto', 'slug' => 'morte-e-luto', 'img' => 'box-04.jpg', 'desc' => 'Elaboração do luto e acolhimento diante da perda e finitude.'],
    ['title' => 'Ansiedade', 'slug' => 'ansiedade', 'img' => 'box-05.jpg', 'desc' => 'Compreensão e manejo dos sintomas ansiosos e suas raízes emocionais.'],
    ['title' => 'Insegurança', 'slug' => 'inseguranca', 'img' => 'box-06.jpg', 'desc' => 'Trabalho terapêutico para fortalecimento da autoconfiança e segurança emocional.'],
    ['title' => 'Baixa Autoestima', 'slug' => 'baixa-autoestima', 'img' => 'box-07.jpg', 'desc' => 'Reconstrução da autoimagem e valorização pessoal.'],
    ['title' => 'Dependência Emocional', 'slug' => 'dependencia-emocional', 'img' => 'box-08.jpg', 'desc' => 'Compreensão dos padrões de dependência afetiva e construção de autonomia.'],
    ['title' => 'Burnout', 'slug' => 'burnout', 'img' => 'box-03.jpg', 'desc' => 'Tratamento para esgotamento profissional, exaustão emocional e recuperação da qualidade de vida.'],
    ['title' => 'Mudança de Carreira', 'slug' => 'mudanca-de-carreira', 'img' => 'box-09.jpg', 'desc' => 'Apoio psicológico para transições profissionais e redescoberta de propósito.']
   
];
?>

<section class="page-header">
    <div class="container">
 
        <h1>Minhas Especialidades</h1>
        <div class="post-meta">Áreas de atuação da <strong>Psicóloga Michely Ciardulo</strong></div>
    </div>
</section>

<section class="esp-grid">
    <div class="container">
        <div class="row">
            <?php foreach ($especialidades as $esp): ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <a href="<?= $base_url ?>/especialidades/<?= $esp['slug'] ?>" class="esp-card">
                    <img src="<?= $assets ?>/img/<?= $esp['img'] ?>" alt="<?= $esp['title'] ?> - Psicóloga Michely Ciardulo">
                    <div class="esp-card-body">
                        <h3><?= $esp['title'] ?></h3>
                        <p><?= $esp['desc'] ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Precisa de ajuda profissional?</h3>
        <p>Agende uma consulta e descubra como a terapia pode transformar sua vida.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank">
            <ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>
            Agendar Consulta
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
