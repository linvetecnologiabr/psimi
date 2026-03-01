<?php
$is_local = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);
$base_url = $is_local ? '/psimi' : '';
$assets = $base_url . '/assets-new';
$site_url = $is_local ? 'http://localhost/psimi' : 'https://michelyciardulo.com.br';
$whatsapp_url = 'https://api.whatsapp.com/send?phone=5511913418537&text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta...';
$instagram_url = 'https://www.instagram.com/psi.michelyciardulo/';

$page_title = $page_title ?? 'Psicóloga Michely Ciardulo | CRP 06/176130';
$meta_description = $meta_description ?? 'Psicóloga Michely Ciardulo - Atendimento psicológico presencial e online. Especialista em Psicanálise, terapia de casal, ansiedade, burnout, depressão e autoconhecimento. CRP 06/176130';
$meta_keywords = $meta_keywords ?? 'psicóloga são paulo, psicanálise, terapia online, terapia presencial, psicóloga clínica, burnout, terapia de casal, ansiedade, depressão, autoconhecimento';
$og_type = $og_type ?? 'website';
$og_image = $og_image ?? $site_url . '/assets-new/img/og-image.jpg';
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? 'michelyciardulo.com.br') . ($_SERVER['REQUEST_URI'] ?? '/');

// Gerar classe do body automaticamente
$body_class = $body_class ?? '';
if (!$body_class) {
    $script = basename($_SERVER['SCRIPT_FILENAME'] ?? '', '.php');
    $dir = basename(dirname($_SERVER['SCRIPT_FILENAME'] ?? ''));
    if ($script === 'index' && $dir === 'psimi') {
        $body_class = 'page-home';
    } elseif ($dir === 'especialidades') {
        $body_class = 'page-especialidade page-' . $script;
    } elseif ($dir === 'blog') {
        $body_class = 'page-blog page-' . $script;
    } else {
        $body_class = 'page-' . $script;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="google-site-verification" content="k9_XxkrrdBLo_RJjRzkJtV71ol3NOVTOnzEOePHCc7g" />

		<title><?= htmlspecialchars($page_title) ?></title>

		<link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">
		<link rel="alternate" hreflang="pt-BR" href="<?= htmlspecialchars($current_url) ?>">

		<meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
		<meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
		<meta name="author" content="Michely Ciardulo">
		<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
		<meta name="theme-color" content="#525fe1">
		<meta name="geo.region" content="BR-SP">
		<meta name="geo.placename" content="São Paulo">
		<meta name="geo.position" content="-23.5402828;-46.5658437">
		<meta name="ICBM" content="-23.5402828, -46.5658437">

		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="<?= $og_type ?>">
		<meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
		<meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
		<meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
		<meta property="og:site_name" content="Psicóloga Michely Ciardulo - CRP 06/176130">
		<meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:domain" content="michelyciardulo.com.br">
		<meta name="twitter:url" content="<?= htmlspecialchars($current_url) ?>">
		<meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>">
		<meta name="twitter:description" content="<?= htmlspecialchars($meta_description) ?>">
		<meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KL6QCM4Z');</script>

		<link rel="icon" type="image/png" href="<?= $assets ?>/img/favicon.png">
		<link rel="apple-touch-icon" href="<?= $assets ?>/img/favicon.png">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="preconnect" href="https://www.googletagmanager.com">
		<link rel="dns-prefetch" href="https://unpkg.com">

		<link rel="stylesheet" href="<?= $assets ?>/bootstrap/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<link rel="stylesheet" href="<?= $assets ?>/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="<?= $assets ?>/owlcarousel/css/owl.theme.css">
		<link rel="stylesheet" href="<?= $assets ?>/css/jquery-simple-mobilemenu.css">
		<link rel="stylesheet" href="<?= $assets ?>/css/magnific-popup.css">
		<link rel="stylesheet" href="<?= $assets ?>/css/animate.css">
		<link rel="stylesheet" href="<?= $assets ?>/css/style.css">
		<link rel="stylesheet" href="<?= $assets ?>/css/pages.css?v=<?= time() ?>">
		<link rel="stylesheet" href="<?= $assets ?>/css/custom.css?v=<?= time() ?>">

		<!-- Schema.org: WebSite (habilita sitelinks no Google) -->
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"@id": "<?= $site_url ?>#website",
			"name": "Psicóloga Michely Ciardulo",
			"alternateName": "Michely Ciardulo - Psicóloga Clínica CRP 06/176130",
			"url": "<?= $site_url ?>",
			"description": "Psicóloga clínica especializada em Psicanálise. Atendimento presencial e online para adolescentes, adultos e casais em São Paulo.",
			"inLanguage": "pt-BR",
			"publisher": {
				"@id": "<?= $site_url ?>#person"
			}
		}
		</script>

		<!-- Schema.org: Person (entidade principal — psicóloga) -->
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Person",
			"@id": "<?= $site_url ?>#person",
			"name": "Michely Mendes Ciardulo Trajano",
			"alternateName": "Michely Ciardulo",
			"jobTitle": "Psicóloga Clínica",
			"description": "Psicóloga CRP 06/176130, pós-graduada em Teoria Psicanalítica e Saúde Mental e Psiquiatria. Atendimento presencial e online em São Paulo.",
			"url": "<?= $site_url ?>/sobre",
			"image": "<?= $site_url ?>/assets-new/img/img-home05.jpg",
			"telephone": "+55-11-91341-8537",
			"email": "contato@michelyciardulo.com.br",
			"sameAs": [
				"<?= $instagram_url ?>"
			],
			"alumniOf": [
				{"@type": "EducationalOrganization", "name": "Universidade Nove de Julho"},
				{"@type": "EducationalOrganization", "name": "Faculdade Venda Nova do Imigrante - FAVENI"},
				{"@type": "EducationalOrganization", "name": "Faculdade Única"}
			],
			"hasCredential": {
				"@type": "EducationalOccupationalCredential",
				"credentialCategory": "Professional License",
				"recognizedBy": {
					"@type": "Organization",
					"name": "Conselho Regional de Psicologia de São Paulo",
					"alternateName": "CRP-SP"
				},
				"identifier": "CRP 06/176130"
			},
			"knowsAbout": [
				"Psicanálise", "Terapia de Casal", "Ansiedade", "Depressão",
				"Burnout", "Luto", "Baixa Autoestima", "Dependência Emocional",
				"Violência Doméstica", "Insegurança", "Mudança de Carreira",
				"Solidão e Conexão Social"
			],
			"worksFor": {
				"@id": "<?= $site_url ?>#business"
			}
		}
		</script>

		<!-- Schema.org: ProfessionalService / LocalBusiness -->
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": ["ProfessionalService", "HealthAndBeautyBusiness"],
			"@id": "<?= $site_url ?>#business",
			"name": "Psicóloga Michely Ciardulo",
			"url": "<?= $site_url ?>",
			"logo": "<?= $site_url ?>/assets-new/img/logo3.png",
			"image": "<?= $site_url ?>/assets-new/img/og-image.jpg",
			"description": "Consultório de Psicologia Clínica — Atendimento psicológico presencial e online. Especialista em Psicanálise, terapia de casal, ansiedade, burnout, depressão e autoconhecimento.",
			"priceRange": "$$",
			"telephone": "+55-11-91341-8537",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "R. Vilela, 665 - 8º Andar",
				"addressLocality": "São Paulo",
				"addressRegion": "SP",
				"postalCode": "03314-000",
				"addressCountry": "BR"
			},
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": -23.5402828,
				"longitude": -46.5658437
			},
			"openingHoursSpecification": [
				{
					"@type": "OpeningHoursSpecification",
					"dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
					"opens": "08:00",
					"closes": "20:00"
				},
				{
					"@type": "OpeningHoursSpecification",
					"dayOfWeek": "Saturday",
					"opens": "08:00",
					"closes": "14:00"
				}
			],
			"sameAs": ["<?= $instagram_url ?>"],
			"areaServed": [
				{"@type": "City", "name": "São Paulo"},
				{"@type": "Country", "name": "Brasil", "description": "Atendimento online para todo o Brasil"}
			],
			"hasOfferCatalog": {
				"@type": "OfferCatalog",
				"name": "Serviços de Psicologia",
				"itemListElement": [
					{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Terapia Individual", "description": "Atendimento psicológico individual para adolescentes e adultos"}},
					{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Terapia de Casal", "description": "Atendimento psicológico para casais, fortalecimento de vínculos afetivos"}},
					{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Terapia Online", "description": "Atendimento psicológico online para todo o Brasil"}},
					{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Terapia Presencial", "description": "Atendimento presencial em São Paulo, SP"}}
				]
			}
		}
		</script>

		<!-- Schema.org: SiteNavigationElement (orienta Google sobre links principais → sitelinks) -->
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "ItemList",
			"name": "Navegação Principal",
			"itemListElement": [
				{
					"@type": "SiteNavigationElement",
					"position": 1,
					"name": "Sobre Mim",
					"description": "Conheça a Psicóloga Michely Ciardulo, sua formação e abordagem terapêutica.",
					"url": "<?= $site_url ?>/sobre"
				},
				{
					"@type": "SiteNavigationElement",
					"position": 2,
					"name": "Especialidades",
					"description": "Áreas de atuação: ansiedade, depressão, terapia de casal, burnout, luto e mais.",
					"url": "<?= $site_url ?>/especialidades"
				},
				{
					"@type": "SiteNavigationElement",
					"position": 3,
					"name": "Formações",
					"description": "Graduação, pós-graduações e especializações em Psicologia e Psicanálise.",
					"url": "<?= $site_url ?>/formacoes"
				},
				{
					"@type": "SiteNavigationElement",
					"position": 4,
					"name": "Blog",
					"description": "Artigos sobre psicanálise, terapia de casal, autoconhecimento e saúde mental.",
					"url": "<?= $site_url ?>/blog"
				},
				{
					"@type": "SiteNavigationElement",
					"position": 5,
					"name": "Agendar Consulta",
					"description": "Agende sua consulta de psicologia presencial ou online pelo WhatsApp.",
					"url": "<?= $whatsapp_url ?>"
				}
			]
		}
		</script>

		<?php
		// Schema BreadcrumbList dinâmico
		$breadcrumb_items = $breadcrumb_items ?? [];
		if (!empty($breadcrumb_items)):
			$bc_list = [];
			foreach ($breadcrumb_items as $i => $item) {
				$bc_list[] = [
					'@type' => 'ListItem',
					'position' => $i + 1,
					'name' => $item['name'],
					'item' => $item['url']
				];
			}
		?>
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "BreadcrumbList",
			"itemListElement": <?= json_encode($bc_list, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>
		}
		</script>
		<?php endif; ?>

		<?php if (!empty($extra_schema)): ?>
		<script type="application/ld+json">
		<?= json_encode($extra_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
		</script>
		<?php endif; ?>
	</head>

	<body class="<?= $body_class ?>" data-spy="scroll" data-offset="80">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9WCQRY9YHJ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-9WCQRY9YHJ');
	</script>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6QCM4Z"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	<div class="btn-online animated fadeInUp" onclick="location.href='<?= $whatsapp_url ?>'" role="button" aria-label="Abrir WhatsApp para agendar consulta">
		<i class="whatsapp"><ion-icon name="logo-whatsapp"></ion-icon></i>
	</div>

	<div class="top-mobile show-mobile">
		<img src="<?= $assets ?>/img/logo3.png" alt="Michely Ciardulo">
	</div>

	<!-- START NAVBAR -->  
	<div id="navigation" class="navbar-light bg-faded site-navigation navigation2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-20 align-self-center">
					<div class="site-logo">
						<a href="<?= $base_url ?>/"><img src="<?= $assets ?>/img/logo3.png" alt="Michely Ciardulo"></a>
					</div>
				</div>
				
				<div class="col-60 d-flex">
					<nav id="main-menu">
						<ul>
							<li><a href="<?= $base_url ?>/#inicio">Início</a></li>			
							<li><a href="<?= $base_url ?>/sobre">Sobre mim</a></li>	
							<li><a href="<?= $base_url ?>/formacoes">Formações</a></li>	
							<li><a href="<?= $base_url ?>/especialidades">Especialidades</a></li>	
							<li><a href="<?= $base_url ?>/#faq">Perguntas</a></li>	
							<li><a href="<?= $base_url ?>/blog">Blog</a></li>
						</ul>
					</nav>
				</div>
				
				<div class="col-20 d-none d-xl-block text-end align-self-center">
					<a href="<?= $whatsapp_url ?>" class="btn_one" rel="noopener nofollow" target="_blank" aria-label="Agendar consulta via WhatsApp">Agendar consulta</a>
				</div>
				
				<ul class="mobile_menu">
					<li><a href="<?= $base_url ?>/#inicio">Início</a></li>
					<li><a href="<?= $base_url ?>/sobre">Sobre</a></li>
					<li><a href="<?= $base_url ?>/especialidades">Especialidades</a></li>
					<li><a href="<?= $base_url ?>/formacoes">Formações</a></li>
					<li><a href="<?= $base_url ?>/blog">Blog</a></li>
					<li><a href="<?= $whatsapp_url ?>">Agendar consulta</a></li>
				</ul>			
			</div>
		</div>
	</div> 	  
	<!-- END NAVBAR -->
