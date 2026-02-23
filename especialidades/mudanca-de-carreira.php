<?php
$page_title = 'Autoconhecimento | Psicóloga Michely Ciardulo - São Paulo';
$meta_description = 'Autoconhecimento na perspectiva psicanalítica. Psicóloga Michely Ciardulo ajuda a reconhecer padrões inconscientes. Atendimento online e presencial em São Paulo.';
$meta_keywords = 'autoconhecimento psicóloga, autoconhecimento psicanálise, psicóloga autoconhecimento são paulo, terapia autoconhecimento online, terapia autoconhecimento presencial';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Especialidades', 'url' => 'https://michelyciardulo.com.br/especialidades'],
    ['name' => 'Autoconhecimento', 'url' => 'https://michelyciardulo.com.br/especialidades/mudanca-de-carreira'],
];
require_once __DIR__ . '/../header.php';
?>

<section class="page-header">
    <div class="container">
      
        <h1>Autoconhecimento</h1>
        <div class="post-meta">Especialidade da <strong>Psicóloga Michely Ciardulo</strong> — CRP 06/176130</div>
    </div>
</section>

<section class="page-content">
    <div class="container">
        <div class="content-body">

            <div class="content-intro">
                <img src="<?= $assets ?>/img/box-09.jpg" alt="Autoconhecimento" class="featured-img">
                <div class="intro-text">
                    <p class="lead">Autoconhecer-se não é um exercício de autoanálise solitária nem uma busca por uma versão ideal de si mesmo. Também não se trata de alcançar um estado permanente de equilíbrio ou clareza absoluta.</p>
                    <p>Na perspectiva psicanalítica, o autoconhecimento implica reconhecer que não somos inteiramente transparentes para nós mesmos. Há desejos, fantasias, conflitos e ambivalências que operam para além da consciência imediata. Muitas escolhas que parecem racionais ou "naturais" estão atravessadas por marcas inconscientes, por experiências precoces e por modos de vínculo que foram se estruturando ao longo da vida.</p>
                </div>
            </div>

            <p>Conhecer-se exige coragem para sustentar perguntas. Perguntas sobre repetições, sobre sofrimentos que retornam, sobre relações que seguem um mesmo roteiro. Não se trata de buscar culpados no passado, mas de compreender como determinadas experiências foram inscritas na história subjetiva e continuam produzindo efeitos.</p>
            <p>Na clínica, o autoconhecimento não acontece por meio de técnicas rápidas ou fórmulas motivacionais. Ele se constrói na fala. Ao falar e ser escutado, o sujeito começa a reconhecer sentidos que antes estavam dispersos. Aquilo que era apenas mal-estar pode ganhar nome. Aquilo que parecia destino pode revelar-se como repetição.</p>
            <p>Autoconhecer-se não significa controlar tudo o que se sente ou eliminar conflitos internos. Significa ampliar a consciência sobre a própria implicação nas escolhas e nos vínculos. Significa reconhecer limites, assumir responsabilidades e também legitimar desejos.</p>
            <p>Esse processo não produz perfeição. Produz maior autenticidade.</p>
            <p>E é a partir dessa autenticidade que novas formas de viver e de se relacionar podem se tornar possíveis.</p>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Quer redescobrir seu propósito profissional?</h3>
        <p>Agende uma consulta e dê o primeiro passo em direção a uma carreira que faça sentido.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank"><ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>Agendar Consulta</a>
    </div>
</section>

<?php require_once __DIR__ . '/../footer.php'; ?>
