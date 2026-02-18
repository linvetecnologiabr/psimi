<?php
$page_title = 'Baixa Autoestima | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Tratamento psicológico para baixa autoestima. Reconstrua sua autoimagem com a Psicóloga Michely Ciardulo. Atendimento online e presencial em São Paulo.';
$meta_keywords = 'baixa autoestima psicóloga, tratamento autoestima, psicóloga autoestima são paulo, terapia autoestima, autoimagem';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Baixa Autoestima', 'url' => 'https://michelyciardulo.com.br/especialidades/baixa-autoestima'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="breadcrumb-nav">
            <a href="<?= $base_url ?>/">Início</a><span>›</span>
            <a href="<?= $base_url ?>/especialidades">Especialidades</a><span>›</span>
            <a href="#">Baixa Autoestima</a>
        </div>
        <h1>Baixa Autoestima</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-07.jpg" alt="Baixa Autoestima" class="featured-img">
                <div class="intro-text">
                    <p class="lead">A baixa autoestima afeta profundamente a forma como nos relacionamos com nós mesmos e com o mundo. A terapia ajuda a reconstruir a autoimagem e a desenvolver uma relação mais compassiva consigo mesmo.</p>
                    <p>A autoestima é construída ao longo da vida, principalmente nas relações primárias. A forma como fomos olhados, cuidados e reconhecidos pelos nossos cuidadores deixa marcas na forma como nos vemos. Quando essas experiências foram marcadas por críticas, negligência ou invalidação, a autoestima pode ficar fragilizada.</p>
                </div>
            </div>

            <h2>Sinais de baixa autoestima</h2>

            <div class="topic-item">
                <h3><ion-icon name="volume-mute-outline"></ion-icon> Autocrítica excessiva</h3>
                <p>Um diálogo interno severo e punitivo, onde nada que a pessoa faz parece ser bom o suficiente. A autocrítica constante paralisa e gera sofrimento.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="eye-off-outline"></ion-icon> Dificuldade de receber elogios</h3>
                <p>Desconforto ao receber reconhecimento, minimizar conquistas e atribuir seus méritos ao acaso ou aos outros.</p>
            </div>

            <div class="topic-item">
                <h3><ion-icon name="person-outline"></ion-icon> Anulação nas relações</h3>
                <p>Colocar-se sempre em segundo plano, dificuldade de dizer não, aceitar situações que causam sofrimento por medo de não ser aceito.</p>
            </div>

            <h2>A terapia como caminho de reconstrução</h2>
            <p>A psicoterapia psicanalítica investiga a história da construção da autoestima, identificando os eventos e relações que contribuíram para a imagem que a pessoa tem de si mesma. Ao compreender essas origens, torna-se possível reescrever essa narrativa.</p>

            <p>O processo terapêutico não busca criar uma autoestima inflada ou artificial, mas sim uma relação mais realista, compassiva e autêntica consigo mesmo — reconhecendo tanto as qualidades quanto as limitações sem julgamento.</p>

            <div class="highlight-box">
                <ul>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A autoestima <strong>pode ser reconstruída</strong> a qualquer momento da vida.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>Você <strong>merece se ver com mais gentileza</strong> e reconhecer seu valor.</span></li>
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>A terapia oferece um <strong>espaço seguro</strong> para essa transformação.</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Você merece se ver com outros olhos</h3>
        <p>Agende uma consulta e comece a reconstruir sua autoestima.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
