<?php
$page_title = 'Formações e Especializações | Psicóloga Michely Ciardulo';
$meta_description = 'Formações e especializações da Psicóloga Michely Ciardulo. Bacharel em Psicologia, Pós-graduada em Psicanálise, Saúde Mental e Psiquiatria, Terapia de Casal e Família.';
$meta_keywords = 'formação psicóloga, pós-graduação psicanálise, especialização saúde mental, psicóloga qualificada são paulo';
$breadcrumb_items = [
    ['name' => 'Início', 'url' => 'https://michelyciardulo.com.br/'],
    ['name' => 'Formações', 'url' => 'https://michelyciardulo.com.br/formacoes'],
];
require_once __DIR__ . '/header.php';

$formacoes = [
    ['titulo' => 'Bacharel em Psicologia', 'inst' => 'Universidade Nove de Julho', 'icon' => 'school-outline', 'desc' => 'Graduação completa em Psicologia com formação sólida em diversas abordagens teóricas e práticas clínicas.'],
    ['titulo' => 'Pós-graduada em Teoria Psicanalítica', 'inst' => 'Faculdade Venda Nova do Imigrante – FAVENI', 'icon' => 'school-outline', 'desc' => 'Especialização em teoria psicanalítica com aprofundamento nos conceitos freudianos e pós-freudianos.'],
    ['titulo' => 'Pós-graduada em Saúde Mental e Psiquiatria', 'inst' => 'Faculdade Única', 'icon' => 'school-outline', 'desc' => 'Especialização voltada para a compreensão dos transtornos mentais, diagnóstico e intervenção terapêutica.'],
    ['titulo' => 'Gestão de Recursos Humanos', 'inst' => 'Universidade Anhembi Morumbi', 'icon' => 'school-outline', 'desc' => 'Formação em gestão de pessoas, contribuindo para uma visão ampla das relações humanas no ambiente organizacional.'],
    ['titulo' => 'Terapia de Casal e Família', 'inst' => 'Instituto Gaio', 'icon' => 'school-outline', 'desc' => 'Capacitação especializada em atendimento de casais e famílias, com foco nas dinâmicas relacionais e conjugais.'],
    ['titulo' => 'Casal e Família', 'inst' => 'Livraria do Psicanalista', 'icon' => 'school-outline', 'desc' => 'Aprofundamento teórico e clínico nas questões conjugais e familiares sob a perspectiva psicanalítica.'],
    ['titulo' => 'Aperfeiçoamento em Psicologia Perinatal', 'inst' => 'Instituto Escutha', 'icon' => 'school-outline', 'desc' => 'Formação em psicologia perinatal, abrangendo o acompanhamento da gestação, parto e puerpério.'],
    ['titulo' => 'Formação em Psicanálise — Em percurso', 'inst' => 'Instituto Távola', 'icon' => 'school-outline', 'desc' => 'Formação contínua em psicanálise, aprofundando a prática clínica e a escuta analítica.'],
];
?>

<section class="page-header">
    <div class="container">
        
        <h1>Minhas formações</h1>
        <div class="post-meta">Psicóloga Michely Ciardulo — <strong>CRP 06/176130</strong></div>
    </div>
</section>

<section class="page-content" style="background:#f8f9fa;">
    <div class="container">
        <div class="row">
            <?php foreach ($formacoes as $f): ?>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div style="background:#fff; border-radius:12px; padding:30px; height:100%; box-shadow:0 4px 20px rgba(0,0,0,0.06); border-left:4px solid  #6371fd;">
                    <div style="display:flex; align-items:center; gap:15px; margin-bottom:15px;">
                        <span class="sc_two" style="width:60px; height:60px; line-height:60px; text-align:center; border-radius:30px; font-size:26px; flex-shrink:0; display:inline-block;"><ion-icon name="<?= $f['icon'] ?>"></ion-icon></span>
                        <div>
                            <h3 style="font-size:18px; font-weight:700; color:#525fe1; margin:0;"><?= $f['titulo'] ?></h3>
                            <p style="font-size:13px; color:#2d4a7a; font-weight:600; margin:5px 0 0;"><?= $f['inst'] ?></p>
                        </div>
                    </div>
                    <p style="font-size:15px; color:#555; line-height:1.7; margin:0;"><?= $f['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="page-cta">
    <div class="container">
        <h3>Qualificação a serviço do seu bem-estar</h3>
        <p>Agende sua consulta com uma profissional especializada.</p>
        <a href="<?= $whatsapp_url ?>" class="btn-whatsapp" target="_blank">
            <ion-icon name="logo-whatsapp" style="vertical-align:middle; margin-right:8px;"></ion-icon>
            Agendar Consulta
        </a>
    </div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
