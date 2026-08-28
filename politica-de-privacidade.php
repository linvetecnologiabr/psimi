<?php
require_once __DIR__ . '/data.php';

$page_title = 'Política de Privacidade | Psicóloga Michely Ciardulo - CRP 06/176130';
$meta_description = 'Política de Privacidade da Psicóloga Michely Ciardulo. Saiba como coletamos, usamos e protegemos seus dados pessoais conforme a LGPD.';
$body_class = 'page-interna';
$breadcrumb = [
    ['nome' => 'Início', 'url' => '/'],
    ['nome' => 'Política de Privacidade', 'url' => '/politica-de-privacidade'],
];

// Conteudo migrado de psimi/politica-de-privacidade.php
$politica_blocos = [
    ['tipo' => 'p', 'texto' => 'A sua privacidade é importante para nós. Esta Política de Privacidade descreve como a Psicóloga Michely Ciardulo (CNPJ 45.333.337/0001-59) coleta, utiliza e protege seus dados pessoais, em conformidade com a <strong>Lei Geral de Proteção de Dados (LGPD — Lei nº 13.709/2018)</strong>.'],
    ['tipo' => 'subtitulo', 'texto' => '1. Quem somos'],
    ['tipo' => 'p', 'texto' => 'Responsável pelo tratamento dos dados:'],
    ['tipo' => 'lista', 'itens' => ['<strong>Nome:</strong> Michely Ciardulo', '<strong>CNPJ:</strong> 45.333.337/0001-59', '<strong>CRP:</strong> 06/176130', '<strong>E-mail:</strong> psi.michelyciardulo@gmail.com', '<strong>WhatsApp:</strong> (11) 91341-8537', '<strong>Site:</strong> https://michelyciardulo.com.br']],
    ['tipo' => 'subtitulo', 'texto' => '2. Quais dados coletamos'],
    ['tipo' => 'subtitulo', 'texto' => 'Dados de contato'],
    ['tipo' => 'p', 'texto' => 'Quando você entra em contato via WhatsApp, coletamos seu nome e número de telefone para fins de agendamento de consultas.'],
    ['tipo' => 'subtitulo', 'texto' => 'Dados de navegação'],
    ['tipo' => 'p', 'texto' => 'Utilizamos Google Analytics 4 (GA4) e Google Tag Manager (GTM) para coletar dados anônimos de navegação: páginas visitadas, tempo de permanência, dispositivo e localização aproximada.'],
    ['tipo' => 'subtitulo', 'texto' => 'Cookies'],
    ['tipo' => 'p', 'texto' => 'Este site utiliza cookies de análise (Google Analytics) para entender como os visitantes interagem com o conteúdo. Você pode desativar cookies nas configurações do seu navegador.'],
    ['tipo' => 'subtitulo', 'texto' => '3. Como utilizamos seus dados'],
    ['tipo' => 'p', 'texto' => 'Os dados coletados são utilizados exclusivamente para:'],
    ['tipo' => 'lista', 'itens' => ['Agendamento e comunicação de consultas psicológicas', 'Análise anônima do comportamento de navegação para melhoria do site', 'Exibição de anúncios relevantes no Google (Google Ads) — apenas dados agregados e anônimos', 'Cumprimento de obrigações legais e éticas da profissão']],
    ['tipo' => 'lista', 'itens' => ['<span><strong>Sigilo profissional:</strong> Todo conteúdo compartilhado nas sessões é protegido pelo sigilo ético do psicólogo, conforme o Código de Ética Profissional do Psicólogo (CFP).</span>', '<span><strong>Não vendemos dados:</strong> Seus dados pessoais jamais são vendidos, alugados ou compartilhados com terceiros para fins comerciais.</span>', '<span><strong>Dados de saúde:</strong> Informações sensíveis de saúde mental compartilhadas nas sessões são tratadas com o mais alto nível de confidencialidade, conforme a LGPD e o CFP.</span>']],
    ['tipo' => 'subtitulo', 'texto' => '4. Base legal para o tratamento'],
    ['tipo' => 'p', 'texto' => 'Tratamos seus dados com base nas seguintes hipóteses legais previstas na LGPD:'],
    ['tipo' => 'lista', 'itens' => ['<strong>Consentimento (art. 7º, I):</strong> Para envio de comunicações e uso de cookies de análise', '<strong>Execução de contrato (art. 7º, V):</strong> Para prestação dos serviços de psicoterapia', '<strong>Legítimo interesse (art. 7º, IX):</strong> Para análise de desempenho do site', '<strong>Cumprimento de obrigação legal (art. 7º, II):</strong> Para atender exigências do CFP e demais normas aplicáveis']],
    ['tipo' => 'subtitulo', 'texto' => '5. Cookies e tecnologias de rastreamento'],
    ['tipo' => 'p', 'texto' => 'Este site utiliza as seguintes tecnologias:'],
    ['tipo' => 'lista', 'itens' => ['<strong>Google Analytics 4 (G-8S4YL352QX):</strong> Análise de tráfego anônimo. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Política do Google</a>', '<strong>Google Tag Manager (GTM-KL6QCM4Z):</strong> Gerenciamento de tags de rastreamento', '<strong>Google Ads:</strong> Exibição de anúncios relevantes a pessoas que buscam por psicólogos online']],
    ['tipo' => 'p', 'texto' => 'Para desativar cookies, acesse as configurações do seu navegador ou utilize o <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">opt-out do Google Analytics</a>.'],
    ['tipo' => 'subtitulo', 'texto' => '6. Seus direitos como titular de dados'],
    ['tipo' => 'p', 'texto' => 'Conforme a LGPD (art. 18), você tem direito a:'],
    ['tipo' => 'subtitulo', 'texto' => 'Acesso'],
    ['tipo' => 'p', 'texto' => 'Solicitar confirmação da existência e acesso aos seus dados pessoais que tratamos.'],
    ['tipo' => 'subtitulo', 'texto' => 'Correção'],
    ['tipo' => 'p', 'texto' => 'Solicitar a correção de dados incompletos, inexatos ou desatualizados.'],
    ['tipo' => 'subtitulo', 'texto' => 'Exclusão'],
    ['tipo' => 'p', 'texto' => 'Solicitar a exclusão de seus dados pessoais, salvo quando necessários por obrigação legal.'],
    ['tipo' => 'subtitulo', 'texto' => 'Revogação'],
    ['tipo' => 'p', 'texto' => 'Revogar o consentimento dado a qualquer momento, sem prejuízo da licitude do tratamento realizado anteriormente.'],
    ['tipo' => 'p', 'texto' => 'Para exercer seus direitos, entre em contato pelo e-mail <strong>psi.michelyciardulo@gmail.com</strong> ou WhatsApp <strong>(11) 91341-8537</strong>. Atenderemos sua solicitação em até 15 dias úteis.'],
    ['tipo' => 'subtitulo', 'texto' => '7. Retenção de dados'],
    ['tipo' => 'p', 'texto' => 'Mantemos seus dados pelo tempo necessário para a prestação dos serviços ou pelo prazo exigido por lei. Dados de sessões psicológicas são mantidos conforme as normas do CFP. Dados de navegação coletados pelo GA4 são retidos por no máximo 14 meses.'],
    ['tipo' => 'subtitulo', 'texto' => '8. Segurança'],
    ['tipo' => 'p', 'texto' => 'Adotamos medidas técnicas e organizacionais adequadas para proteger seus dados contra acesso não autorizado, perda ou destruição, incluindo comunicação via WhatsApp Business, que utiliza criptografia de ponta a ponta.'],
    ['tipo' => 'subtitulo', 'texto' => '9. Links externos'],
    ['tipo' => 'p', 'texto' => 'Este site pode conter links para sites externos (Instagram, WhatsApp). Não somos responsáveis pelas práticas de privacidade desses sites e recomendamos que você leia as políticas de privacidade de cada um.'],
    ['tipo' => 'subtitulo', 'texto' => '10. Alterações nesta política'],
    ['tipo' => 'p', 'texto' => 'Esta política pode ser atualizada periodicamente. A data da última revisão está indicada no topo desta página. Recomendamos que você a consulte regularmente.'],
    ['tipo' => 'subtitulo', 'texto' => '11. Contato e Canal de Atendimento (DPO)'],
    ['tipo' => 'p', 'texto' => 'Para dúvidas, solicitações ou reclamações relacionadas a esta política ou ao tratamento de seus dados:'],
    ['tipo' => 'lista', 'itens' => ['<strong>E-mail:</strong> psi.michelyciardulo@gmail.com', '<strong>WhatsApp:</strong> (11) 91341-8537']],
    ['tipo' => 'p', 'texto' => 'Você também pode entrar em contato com a Autoridade Nacional de Proteção de Dados (ANPD) pelo site <a href="https://www.gov.br/anpd" target="_blank" rel="noopener">gov.br/anpd</a>.'],
];

require_once __DIR__ . '/header.php';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main class="main-bg o-hidden">

            <header class="header page-header section-padding valign">
                <div class="container pt-80">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h6 class="sub-title main-color mb-15">Transparência</h6>
                                <h1 class="text-u ls1 fz-80">POLÍTICA DE PRIVACIDADE</h1>
                                <p class="mt-15">Psicóloga Michely Ciardulo — <?= $site['crp'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="intro section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text">
                                <?php foreach ($politica_blocos as $b): ?>
                                    <?php if ($b['tipo'] === 'subtitulo'): ?>
                                        <h3 class="mt-50 mb-20"><?= $b['texto'] ?></h3>
                                    <?php elseif ($b['tipo'] === 'lista'): ?>
                                        <ul class="rest dot-list mb-30">
                                            <?php foreach ($b['itens'] as $item): ?>
                                                <li class="mb-10"><?= $item ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <p class="mb-20"><?= $b['texto'] ?></p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php require __DIR__ . '/partials-marq-cta.php'; ?>

        </main>

        <?php require_once __DIR__ . '/footer.php'; ?>
    </div>
</div>

<?php require_once __DIR__ . '/scripts.php'; ?>
