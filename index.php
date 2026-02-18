<?php
// FAQPage Schema
$extra_schema = [
	'@context' => 'https://schema.org',
	'@type' => 'FAQPage',
	'mainEntity' => [
		['@type' => 'Question', 'name' => 'Como posso agendar uma consulta com a Psicóloga Michely Ciardulo?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Para agendar uma consulta, você pode acessar a seção "Agendar Consulta" no site e seguir as instruções. Você também pode entrar em contato diretamente pelo WhatsApp ou e-mail fornecidos.']],
		['@type' => 'Question', 'name' => 'Como funcionam as sessões de terapia?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Cada sessão é focada no sujeito, em seus afetos e em sua forma de ser no mundo, promovendo autoconhecimento e melhorando a qualidade das relações.']],
		['@type' => 'Question', 'name' => 'Quais são as modalidades de atendimento oferecidas?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A Psicóloga Michely Ciardulo oferece sessões tanto online quanto presenciais, adaptando-se à sua conveniência e necessidades.']],
		['@type' => 'Question', 'name' => 'Quem pode se beneficiar da terapia?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A Psicóloga Michely Ciardulo atende adolescentes, adultos e casais. A abordagem foca em melhorar suas relações e bem-estar emocional, ajudando você a enfrentar desafios pessoais e a desenvolver um autoconhecimento mais profundo.']],
		['@type' => 'Question', 'name' => 'Como funciona o reembolso de planos de saúde?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Atualmente a Psicóloga Michely Ciardulo atua com atendimento particular. No entanto, emite nota fiscal de acordo com os valores pagos na sessão para que você verifique o reembolso junto ao seu plano. A maioria dos planos de saúde oferece reembolso.']],
		['@type' => 'Question', 'name' => 'Quais são as especialidades oferecidas?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'As especialidades incluem terapia de casal, violência doméstica, depressão, luto, ansiedade, insegurança, baixa autoestima, dependência emocional e mudança de carreira.']],
		['@type' => 'Question', 'name' => 'Onde são realizadas as sessões presenciais?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'As sessões presenciais são realizadas na R. Vilela, 665 - 8º Andar, São Paulo, SP. Para mais detalhes, entre em contato pelo WhatsApp.']],
		['@type' => 'Question', 'name' => 'Quais são as qualificações da Michely?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A Psicóloga Michely Ciardulo é Bacharel em Psicologia, pós-graduada em Teoria Psicanalítica, Saúde Mental e Psiquiatria, entre outras especializações. CRP 06/176130.']],
	]
];
require_once __DIR__ . '/header.php';
?>

<section class="home_bg hb_height" id="inicio">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="imagem-topo-mobile">
					<img class="show-mobile" src="<?= $assets ?>/img/img-slider01.jpg" alt="Psicóloga Michely Ciardulo">
					<span class="sobre-psi show-mobile">
						<ion/psimi/assets-new/img/img-home05.jpg-icon name="checkmark-circle-outline"></ion-icon>
						<h2>Michely Ciardulo - Psicóloga Clínica</h2>
						<h3>CRP-06/176130</h3>
					</span>	
				</div>		

				<div class="hero-text ht_top">
					<h1>Promovendo relações autênticas através da <span>Psicanálise.</span></h1>
					<span class="box-inicie">Faça terapia com Psicóloga Michely Ciardulo</span>
					<p>Psicóloga, dedicada à Psicanálise e a relacionamentos autênticos.</p>
				</div>
				<div class="home_sb">
					<a href="<?= $whatsapp_url ?>" class="btn_one"><ion-icon name="calendar-outline"></ion-icon> Agendar consulta</a>
				</div>					
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<img class="no-show-mobile" src="<?= $assets ?>/img/img-slider01.jpg" alt="Psicóloga Michely Ciardulo">
				<span class="sobre-psi no-show-mobile">
					<ion-icon name="checkmark-circle-outline"></ion-icon>
					<h2>Michely Ciardulo - Psicóloga Clínica</h2>
					<h3>CRP-06/176130</h3>
				</span>			
			</div>
		</div>
	</div>
</section>	


<div class="partner-logo section-padding wow fadeInUp">
	<div class="container">
		<div class="row part_bg">
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="partner_title">
					<h3><span>Bacharel em Psicologia</span>, com especialização e percurso em Psicanálise.</h3>
				</div>					
			</div>
			<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
				<div class="expertice-psicanalitica">
					<ul>
						<li>
							<ion-icon name="medal-outline"></ion-icon>
							<p>Homologada e ativa no CRP</p>
						</li>
						<li>
							<ion-icon name="school-outline"></ion-icon>
							<p>Pós-graduada em teoria Psicanalítica</p>
						</li>
						<li>
							<ion-icon name="school-outline"></ion-icon>
							<p>Pós-graduada em sáude mental e psiquiatria</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<section id="sobre" class="ab_area wow fadeInUp area-sobre section-padding pattern-section pattern-dots">
	<div class="container">									
		<div class="row">								
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="<?= $assets ?>/img/img-home05.jpg" class="img-fluid" alt="Psicóloga Michely Ciardulo" loading="lazy" width="540" height="540">
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Sobre: Psicóloga Michely Ciardulo</h2>
					<p>Sou Psicóloga, me oriento pela teoria psicanalítica, te ajudo a compreender e refletir seu lugar nas relações e no mundo, promovendo o autoconhecimento.</p>
					<p>Sou pós-graduada em teoria psicanalítica e pós-graduada em saúde mental e psiquiatria. Realizo atendimento psicológico na modalidade online e presencial, sempre prezando pela ética, escuta ativa e acolhimento.</p>
					<ul>
						<li><ion-icon name="checkmark-circle-outline"></ion-icon>Sessões online e presencial.</li>
						<li><ion-icon name="checkmark-circle-outline"></ion-icon>Acompanhamento terapêutico à adolescentes, adultos e casais.</li>
						<li><ion-icon name="checkmark-circle-outline"></ion-icon>Focada no sujeito, em seus afetos e sua <br>forma de ver o mundo.</li>
					</ul>
					<a class="btn_one" href="<?= $whatsapp_url ?>">Vamos juntos nessa jornada, agende sua sessão! <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="trajetoria" class="top_cat__area wow fadeInUp section-padding pattern-section pattern-circles">
	<div class="container">									
		<div class="section-title text-center">
			<h2>Trajetória e formação</h2>
			<p>Confira abaixo minhas especializações</p>
		</div>						
		<div class="row">					
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Bacharel em Psicologia</h3>
					<h5>Universidade nove de Julho</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Pós-graduada em Teoria Psicanalítica</h3>
					<h5>Faculdade Venda Nova do Imigrante – FAVENI</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Pós-graduada em Saúde Mental e Psiquiatria</h3>
					<h5>Faculdade Única</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Gestão de Recursos Humanos</h3>
					<h5>Universidade Anhembi Morumbi</h5>
				</div>
			</div>
		</div>
		<div class="row">					
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Terapia de Casal e Familia</h3>
					<h5>Instituto Gaio</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Casal e Família</h3>
					<h5>Livraria do Psicanalista</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Instituto Escutha</h3>
					<h5>Aperfeiçoamento em psicologia Perinatal</h5>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two"><ion-icon name="school"></ion-icon></span>
					<h3>Formação em Psicanálise - Em percurso</h3>
					<h5>Instituto Távola</h5>
				</div>
			</div>
		</div>
		<a class="btn_one" href="<?= $whatsapp_url ?>">Agende sua consulta! <i class="ti-arrow-top-right"></i></a>
	</div>
</section>


<section id="especialidades" class="top_cat__area especialidades section-padding pattern-section pattern-rings">
	<div class="container">									
		<div class="section-title text-center">
			<h2>Minhas especialidades</h2>
			<p>Confira abaixo as especialidades que eu trabalho</p>
		</div>						
		<div class="row">													
			<div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="cat_list">
					<ul>
						<li><a href="<?= $base_url ?>/especialidades/terapia-de-casal"><img src="<?= $assets ?>/img/box-01.jpg" alt="Terapia de casal" loading="lazy"> Terapia de casal</a></li>
						<li><a href="<?= $base_url ?>/especialidades/violencia-domestica"><img src="<?= $assets ?>/img/box-02.jpg" alt="Violência doméstica" loading="lazy"> Violência doméstica</a></li>
						<li><a href="<?= $base_url ?>/especialidades/depressao"><img src="<?= $assets ?>/img/box-03.jpg" alt="Depressão" loading="lazy"> Depressão</a></li>
						<li><a href="<?= $base_url ?>/especialidades/morte-e-luto"><img src="<?= $assets ?>/img/box-04.jpg" alt="Morte e Luto" loading="lazy"> Morte e Luto</a></li>
						<li><a href="<?= $base_url ?>/especialidades/ansiedade"><img src="<?= $assets ?>/img/box-05.jpg" alt="Ansiedade" loading="lazy"> Ansiedade</a></li>
						<li><a href="<?= $base_url ?>/especialidades/inseguranca"><img src="<?= $assets ?>/img/box-06.jpg" alt="Insegurança" loading="lazy"> Insegurança</a></li>
						<li><a href="<?= $base_url ?>/especialidades/baixa-autoestima"><img src="<?= $assets ?>/img/box-07.jpg" alt="Baixa autoestima" loading="lazy"> Baixa autoestima</a></li>
						<li><a href="<?= $base_url ?>/especialidades/dependencia-emocional"><img src="<?= $assets ?>/img/box-08.jpg" alt="Dependência emocional" loading="lazy"> Dependência emocional</a></li>
						<li><a href="<?= $base_url ?>/especialidades/mudanca-de-carreira"><img src="<?= $assets ?>/img/box-01.jpg" alt="Mudança de Carreira" loading="lazy"> Mudança de Carreira</a></li>
					</ul>
				</div>
			</div>
		</div>
		<a class="btn_one" href="<?= $whatsapp_url ?>">Agende sua consulta! <i class="ti-arrow-top-right"></i></a>
	</div>
</section>


<!-- START TESTIMONIALS -->
<section id="depoimentos" class="depoimentos section-padding wow fadeInUp pattern-section pattern-diamond">
	<div class="container">
		<div class="section-title">
			<h2>Depoimentos de clientes reais</h2>
			<h5>Confira depoimentos reais feitas por pacientes, os nomes dos pacientes foram abreviados para preservar a privacidade.</h5>
		</div>						
		<div class="row">					
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div id="testimonial-slider2" class="owl-carousel wow fadeInUp">

					<?php
					$depoimentos = [
						['nome' => 'LMAS', 'texto' => 'Profissional tecnicamente,academicamente capacitada com olhar plural atendendo demandas de várias áreas das nossas vidas. Nos ajuda evoluir,provoca reflexão oque traz resultados positivos para a terapia. Recomendo.'],
						['nome' => 'ECLM', 'texto' => 'Michely sempre muito compreensiva e sempre nos ajuda muito a nos entender.'],
						['nome' => 'RBS', 'texto' => 'Excelente profissional. Ouve atentamente, faz reflexões e propõe um importante crescimento psicológico.'],
						['nome' => 'GAS', 'texto' => 'Profissional EXCELENTE. Super indico.'],
						['nome' => 'SMS', 'texto' => 'A cada encontro fico contando os dias para o próximo.'],
						['nome' => 'RBS', 'texto' => 'Michely é maravilhosa. Interage de forma assertiva e sempre clara acerca de nossos posicionamentos, possibilitando uma maior autorreflexão.'],
						['nome' => 'LMAS', 'texto' => 'Extremamente qualificada,ética,capacitada,paciente.Amo ela!!!'],
						['nome' => 'SMS', 'texto' => 'Gratidão por me fazer ver por outro ângulo oque as vezes eu não consigo.'],
						['nome' => 'RAC', 'texto' => 'Uma profissional, tem uma tranquilidade e um atendimento excepcional. Super recomendo, vem me ajudando muito.'],
						['nome' => 'ECC', 'texto' => 'Dra Michely é simplesmente perfeita! Adorei nossa primeira consulta... me deixou super a vontade para falar e me trouxe várias exercícios de reflexão. Já quero a próxima consulta!!!'],
						['nome' => 'RBS', 'texto' => 'Muito paciente, demonstra segurança ao tratar a abordagem, comenta sempre nossos posicionamentos de forma imparcial e nos ajuda a refletir criticamente sobre a situação a partir de nós mesmos.'],
						['nome' => 'DMB', 'texto' => 'Me senti muito acolhida, desde a primeira sessão. Fiquei muito animada e acredito que conseguirei ao final do tratamento ter sucesso.'],
						['nome' => 'LB', 'texto' => 'Já adorei na primeira sessão. Ela te dá espaço pra fala e no final te mostra vários pontos não percebidos.'],
						['nome' => 'AR', 'texto' => 'Ótima profissional, compreensiva e doce!!! Faz a terapia ser mais leve.'],
					];
					foreach ($depoimentos as $dep): ?>
					<div class="testimonial">
						<ion-icon class="icon-chat" name="chatbox-ellipses-outline"></ion-icon>
						<div class="testimonial_content">										
							<p><?= $dep['texto'] ?></p>
						</div>
						<div class="testi_pic_title">
							<div class="test-pacient">
								<div class="esq"><ion-icon name="person"></ion-icon></div>
								<div class="dir">
									<h4><?= $dep['nome'] ?></h4>
									<p>Paciente</p>
								</div>
							</div>
							<span class="stars">
								<ul>
									<li><ion-icon name="star"></ion-icon></li>
									<li><ion-icon name="star"></ion-icon></li>
									<li><ion-icon name="star"></ion-icon></li>
									<li><ion-icon name="star"></ion-icon></li>
									<li><ion-icon name="star"></ion-icon></li>
								</ul>
							</span>
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
		<a class="btn_one" href="<?= $whatsapp_url ?>">Agende sua consulta! <i class="ti-arrow-top-right"></i></a>
	</div>
</section>
<!-- END TESTIMONIALS -->


<div class="partner-logo section-padding wow fadeInUp area-redesociais">
	<div class="container">
		<div class="row part_bg">
			<div class="col-lg-4 col-sm-4 col-xs-12">
				<div class="partner_title">
					<h3>
						<span>Siga minhas redes sociais.</span> 
						<i>Esteja por dentro das últimas novidades, insights e compartilhamentos sobre psicologia, psicanálise e bem-estar.</i>
					</h3>
				</div>					
			</div>
			<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
				<div class="expertice-psicanalitica">
					<ul>
						<li onclick="location.href='<?= $instagram_url ?>'">
							<ion-icon name="logo-instagram"></ion-icon>
							<p>Instagram</p>
						</li>
						<li onclick="location.href='<?= $whatsapp_url ?>'">
							<ion-icon name="logo-whatsapp"></ion-icon>
							<p>Whatsapp</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid area-faq pattern-section pattern-cross" id="faq">
	<div class="container">
		<div class="section-title">
			<h2>Perguntas frequentes</h2>
			<h5>Tire suas dúvidas sobre o atendimento psicológico.</h5>
		</div>
	</div>
	
	<div class="row justify-content-center">
		<div class="col-12 col-sm-10 col-lg-8">
			<div class="accordion faq-accordian" id="faqAccordion">

				<?php
				$faqs = [
					['id' => 'One', 'pergunta' => 'Como posso agendar uma consulta?', 'resposta' => 'Para agendar uma consulta, você pode acessar a seção "Agendar Consulta" no site e seguir as instruções. Você também pode entrar em contato diretamente pelo WhatsApp ou e-mail fornecidos.', 'delay' => '0.2s'],
					['id' => 'Six', 'pergunta' => 'Como funcionam as sessões de terapia?', 'resposta' => 'Cada sessão é focada no sujeito, em seus afetos e em sua forma de ser no mundo, promovendo autoconhecimento e melhorando a qualidade das relações.', 'delay' => '0.3s'],
					['id' => 'Two', 'pergunta' => 'Quais são as modalidades de atendimento oferecidas?', 'resposta' => 'A Psicóloga Michely Ciardulo oferece sessões tanto online quanto presenciais, adaptando-se à sua conveniência e necessidades.', 'delay' => '0.3s'],
					['id' => 'Three', 'pergunta' => 'Quem pode se beneficiar da terapia?', 'resposta' => 'A Psicóloga Michely Ciardulo atende adolescentes, adultos e casais. Minha abordagem foca em melhorar suas relações e bem-estar emocional, ajudando você a enfrentar desafios pessoais e a desenvolver um autoconhecimento mais profundo.', 'delay' => '0.4s'],
					['id' => 'Four', 'pergunta' => 'Como funciona o reembolso de planos de saúde?', 'resposta' => 'Atualmente a Psicóloga Michely Ciardulo atua com atendimento particular. No entanto, emito nota fiscal de acordo com os valores pagos na sessão para que você verifique o reembolso junto ao seu plano. A maioria dos planos de saúde oferece reembolso. Você paga pelo valor da sessão, eu forneço a nota fiscal e você encaminha ao plano junto com o encaminhamento médico para reembolso. É importante ter um encaminhamento médico de qualquer especialidade para a psicoterapia. Cada convênio tem seus próprios critérios, então recomendo que você verifique com seu plano os detalhes sobre o reembolso.', 'delay' => '0.4s'],
					['id' => 'Five', 'pergunta' => 'Quais são as especialidades oferecidas?', 'resposta' => 'As especialidades da Psicóloga Michely Ciardulo incluem terapia de casal, violência doméstica, depressão, luto, ansiedade, insegurança, baixa autoestima e dependência emocional.', 'delay' => '0.4s'],
					['id' => 'Seven', 'pergunta' => 'Onde são realizadas as sessões presenciais?', 'resposta' => 'As sessões presenciais são realizadas em São Paulo, SP. Para mais detalhes, entre em contato no telefone 11 5026-7452.', 'delay' => '0.4s'],
					['id' => 'Eight', 'pergunta' => 'Quais são as qualificações da Michely?', 'resposta' => 'A Psicóloga Michely Ciardulo é Bacharel em Psicologia, pós-graduada em Teoria Psicanalítica, Saúde Mental e Psiquiatria, entre outras especializações. Sempre prezo pela ética, escuta ativa e acolhimento.', 'delay' => '0.4s'],
				];
				foreach ($faqs as $faq): ?>
				<div class="card border-0 wow fadeInUp" data-wow-delay="<?= $faq['delay'] ?>">
					<div class="card-header" id="heading<?= $faq['id'] ?>">
						<h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse<?= $faq['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $faq['id'] ?>"><?= $faq['pergunta'] ?><span class="lni-chevron-up"></span></h6>
					</div>
					<div class="collapse" id="collapse<?= $faq['id'] ?>" aria-labelledby="heading<?= $faq['id'] ?>" data-parent="#faqAccordion">
						<div class="card-body">
							<p><?= $faq['resposta'] ?></p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>


<section id="blog" class="home_course section-padding pattern-section pattern-rings">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-xs-12">
				<div class="section-title">
					<h2>Vida em movimento: <b>Insights psicanalíticos</b></h2>
				</div>					
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="cour_btn">
					<a href="<?= $base_url ?>/blog" class="btn_one">Ver todos posts <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single_course" onclick="location.href='<?= $base_url ?>/blog/equilibrando-os-pratos-da-vida'">
					<div class="single_c_img">
						<img src="" class="img-fluid" alt="Equilibrando os pratos da vida">
						<span class="item-artigo">Reflexão</span>
					</div>
					<h4>Equilibrando os pratos da vida</h4>
					<p>Freud: "Nós poderíamos ser muito melhores se não quiséssemos ser tão bons."</p>
					<div class="price">Psi. Michely Ciardulo</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single_course" onclick="location.href='<?= $base_url ?>/blog/quando-o-sofrimento-parece-nao-ter-fim'">
					<div class="single_c_img">
						<img src="" class="img-fluid" alt="Quando o sofrimento parece não ter fim">
						<span class="item-artigo">Reflexão</span>
					</div>
					<h4>Quando o sofrimento parece não ter fim</h4>
					<p>O mito de Sísifo e a repetição do sofrimento à luz de Camus e Freud.</p>
					<div class="price">Psi. Michely Ciardulo</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="single_course" onclick="location.href='<?= $base_url ?>/blog/terapia-de-casal'">
					<div class="single_c_img">
						<img src="" class="img-fluid" alt="Terapia de Casal - Psicóloga Michely Ciardulo">
						<span class="item-artigo">Artigo</span>
					</div>
					<h4>Como funciona a Terapia de Casal?</h4>
					<p>Entenda o processo terapêutico e os vínculos afetivos na conjugalidade.</p>
					<div class="price">Psi. Michely Ciardulo</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once __DIR__ . '/footer.php'; ?>
