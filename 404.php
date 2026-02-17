<?php
$page_title = 'Página não encontrada | Psicóloga Michely Ciardulo';
$meta_description = 'A página que você procura não foi encontrada.';
http_response_code(404);
require_once __DIR__ . '/header.php';
?>

<div class="container" style="padding: 100px 0; text-align: center; min-height: 60vh;">
	<h1 style="font-size: 80px; color: #8B7355;">404</h1>
	<h2>Página não encontrada</h2>
	<p>A página que você procura não existe ou foi removida.</p>
	<a href="<?= $site_url ?>" class="btn_one" style="margin-top: 30px;">Voltar ao início</a>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
