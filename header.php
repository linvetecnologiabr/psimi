<?php
$base_url = '/psimi';
$assets = $base_url . '/assets-new';
$site_url = 'https://michelyciardulo.com.br';
$whatsapp_url = 'https://api.whatsapp.com/send?phone=5511913418537&text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20consulta...';
$instagram_url = 'https://www.instagram.com/psi.michelyciardulo/';

$page_title = $page_title ?? 'Psicóloga Michely Ciardulo - Psicanálise em São Paulo | CRP 06/176130';
$meta_description = $meta_description ?? 'Psicóloga Michely Ciardulo - Atendimento psicológico presencial e online. Especialista em Psicanálise, terapia de casal, ansiedade, depressão e autoconhecimento. CRP 06/176130';
$meta_keywords = $meta_keywords ?? 'psicóloga são paulo, psicanálise, terapia online, terapia presencial, psicóloga clínica, terapia de casal, ansiedade, depressão, autoconhecimento';
$og_type = $og_type ?? 'website';
$og_image = $og_image ?? $assets . '/img/logo3.png';
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . ($_SERVER['HTTP_HOST'] ?? 'michelyciardulo.com.br') . ($_SERVER['REQUEST_URI'] ?? '/');
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?= htmlspecialchars($page_title) ?></title>

		<link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">

		<meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
		<meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
		<meta name="author" content="Michely Ciardulo">
		<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

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

		<link rel="stylesheet" href="<?= $assets ?>/bootstrap/css/bootstrap.min.css">		
		<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>	
		<link rel="stylesheet" href="<?= $assets ?>/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="<?= $assets ?>/owlcarousel/css/owl.theme.css">	
		<link rel="stylesheet" href="<?= $assets ?>/css/jquery-simple-mobilemenu.css">			
		<link rel="stylesheet" href="<?= $assets ?>/css/magnific-popup.css">		
		<link rel="stylesheet" href="<?= $assets ?>/css/animate.css">				
		<link rel="stylesheet" href="<?= $assets ?>/css/style.css">		
		<link rel="stylesheet" href="<?= $assets ?>/css/custom.css?v=<?= time() ?>">	
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Schema.org -->
		<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "ProfessionalService",
			"@id": "<?= $site_url ?>",
			"name": "Psicóloga Michely Ciardulo",
			"alternateName": "Michely Mendes Ciardulo Trajano",
			"url": "<?= $site_url ?>",
			"logo": "<?= $assets ?>/img/logo3.png",
			"image": "<?= $assets ?>/img/logo3.png",
			"description": "Psicóloga clínica especializada em Psicanálise, oferecendo atendimento presencial e online para adolescentes, adultos e casais em São Paulo.",
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
				"latitude": "-23.5402828",
				"longitude": "-46.5658437"
			},
			"openingHoursSpecification": {
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
				"opens": "08:00",
				"closes": "20:00"
			},
			"sameAs": ["<?= $instagram_url ?>"],
			"founder": {
				"@type": "Person",
				"name": "Michely Mendes Ciardulo Trajano",
				"jobTitle": "Psicóloga Clínica",
				"description": "Psicóloga CRP 06/176130, pós-graduada em Teoria Psicanalítica e Saúde Mental e Psiquiatria",
				"url": "<?= $site_url ?>",
				"image": "<?= $assets ?>/img/img-home05.jpg",
				"sameAs": ["<?= $instagram_url ?>"],
				"alumniOf": [
					{"@type": "EducationalOrganization", "name": "Universidade Nove de Julho"},
					{"@type": "EducationalOrganization", "name": "Faculdade Venda Nova do Imigrante - FAVENI"},
					{"@type": "EducationalOrganization", "name": "Faculdade Única"}
				],
				"memberOf": {
					"@type": "Organization",
					"name": "Conselho Regional de Psicologia - CRP",
					"identifier": "06/176130"
				}
			}
		}
		</script>
	</head>

	<body data-spy="scroll" data-offset="80">

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

	<div class="btn-online animated fadeInUp" onclick="location.href='<?= $whatsapp_url ?>'">
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
						<a href="<?= $site_url ?>/"><img src="<?= $assets ?>/img/logo3.png" alt="Michely Ciardulo"></a>
					</div>
				</div>
				
				<div class="col-60 d-flex">
					<nav id="main-menu">
						<ul>
							<li><a href="<?= $site_url ?>/#inicio">Início</a></li>			
							<li><a href="<?= $site_url ?>/#sobre">Sobre mim</a></li>	
							<li><a href="<?= $site_url ?>/#trajetoria">Formações</a></li>	
							<li><a href="<?= $site_url ?>/#especialidades">Especialidades</a></li>	
							<li><a href="<?= $site_url ?>/#faq">Perguntas</a></li>	
							<li><a href="<?= $site_url ?>/blog">Blog</a></li>
						</ul>
					</nav>
				</div>
				
				<div class="col-20 d-none d-xl-block text-end align-self-center">
					<a href="<?= $whatsapp_url ?>" class="btn_one">Agendar consulta</a>
				</div>
				
				<ul class="mobile_menu">
					<li><a href="<?= $site_url ?>/#inicio">Início</a></li>
					<li><a href="<?= $site_url ?>/#sobre">Sobre</a></li>
					<li><a href="<?= $site_url ?>/#trajetoria">Especialidades</a></li>
					<li><a href="<?= $site_url ?>/#faq">Perguntas</a></li>
					<li><a href="<?= $site_url ?>/#blog">Blog</a></li>
					<li><a href="<?= $whatsapp_url ?>">Agendar consulta</a></li>
				</ul>			
			</div>
		</div>
	</div> 	  
	<!-- END NAVBAR -->
