	<!-- EXIT INTENT MODAL -->
	<div id="exitModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:99999; justify-content:center; align-items:center;">
		<div style="background:#fff; border-radius:12px; max-width:420px; width:90%; position:relative; overflow:hidden; box-shadow:0 20px 60px rgba(0,0,0,0.3); animation: exitModalIn 0.4s ease;">
			<button onclick="document.getElementById('exitModal').style.display='none'" style="position:absolute; top:10px; right:15px; background:none; border:none; font-size:28px; cursor:pointer; color:#666; z-index:2;">&times;</button>
			<img src="<?= $assets ?>/img/img-home05.jpg" alt="Psicóloga Michely Ciardulo" style="width:100%; height:250px; object-fit:cover; object-position:top;">
			<div style="padding:25px 30px 30px; text-align:center;">
				<p style="color:#555; font-size:15px; margin:0 0 5px;">Não sai antes de falar comigo!</p>
				<h3 style="color:#22B05E; font-size:28px; font-weight:800; margin:0 0 10px; font-style:italic;">ESTOU ONLINE</h3>
				<p style="color:#555; font-size:14px; margin:0 0 20px;">Clique no botão abaixo e agende sua consulta, estou te esperando 😉</p>
				<a href="<?= $whatsapp_url ?>" style="display:block; background:#22B05E; color:#fff; text-decoration:none; padding:14px 20px; border-radius:6px; font-size:16px; font-weight:700; text-transform:uppercase; letter-spacing:0.5px; transition:background 0.3s;" onmouseover="this.style.background='#1a9e50'" onmouseout="this.style.background='#22B05E'">FALAR COM A PSICÓLOGA</a>
			</div>
		</div>
	</div>
	<style>
		@keyframes exitModalIn { from { opacity:0; transform:scale(0.8); } to { opacity:1; transform:scale(1); } }
	</style>
	<script>
	(function(){
		if (sessionStorage.getItem('exitModalShown')) return;
		var shown = false;
		document.addEventListener('mouseout', function(e) {
			if (!e.toElement && !e.relatedTarget && e.clientY < 10 && !shown) {
				shown = true;
				document.getElementById('exitModal').style.display = 'flex';
				sessionStorage.setItem('exitModalShown', '1');
			}
		});
	})();
	</script>

	<!-- START FOOTER -->
	<div class="footer section-padding">
		<div class="container">				
			<div class="row">						
				<div class="col-lg-5 col-sm-6 col-xs-12">
					<div class="single_footer">
						<a href="<?= $site_url ?>"><img src="<?= $assets ?>/img/logo3.png" alt="Michely Ciardulo"></a>         
						<p>Esteja por dentro das últimas novidades, insights e compartilhamentos sobre psicologia, psicanálise e bem-estar. Convido você a me seguir nas redes sociais.</p>
						<div class="social_profile">
							<ul>
								<li><a href="<?= $whatsapp_url ?>" class="bt-whatsapp"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
								<li><a href="<?= $instagram_url ?>" class="bt-instagram"><ion-icon name="logo-instagram"></ion-icon></a></li>
							</ul>
						</div>
					</div>			
				</div>
				
				<div class="col-lg-2 col-sm-6 col-xs-12 menu-link">
					<div class="single_footer">
						<h4>Menu</h4>
						<ul>
							<li><a href="<?= $site_url ?>/#inicio">Início</a></li>
							<li><a href="<?= $site_url ?>/#sobre">Sobre mim</a></li>
							<li><a href="<?= $site_url ?>/#trajetoria">Formações</a></li>
							<li><a href="<?= $site_url ?>/#especialidades">Especialidades</a></li>
							<li><a href="<?= $site_url ?>/blog">Blog</a></li>								
						</ul>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer">
						<h4>Entre em contato</h4>
						<div class="sf_contact">
							<ion-icon name="call-outline"></ion-icon>
							<p>55 11 91341-8537</p>
						</div>
						<div class="sf_contact">
							<ion-icon name="mail-outline"></ion-icon>
							<p>psi.michelyciardulo@gmail.com</p>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-sm-6 col-xs-12">
					<div class="single_footer agendar-consulta-box" onclick="location.href='<?= $whatsapp_url ?>'">
						<h4>Agendar consulta</h4>
						<p>Pronto para sua jornada de bem-estar? Agende sua consulta agora.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END FOOTER -->	

	<!-- START FOOTER COPYRIGHT -->	
	<div class="foot_copy">
		<div class="footer_copyright">
			<p>&copy; <?= date("Y") ?>. Todos os direitos reservados - CNPJ 45.333.337/0001-59 - All Rights Reserved.</p>
		</div>	
	</div>
	<!-- END FOOTER COPYRIGHT -->	

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?= $assets ?>/js/modernizr-2.8.3.min.js"></script>	
	<script src="<?= $assets ?>/js/jquery-simple-mobilemenu.js"></script>		
	<script src="<?= $assets ?>/owlcarousel/js/owl.carousel.min.js"></script>		
	<script src="<?= $assets ?>/js/jquery.magnific-popup.min.js"></script>						
	<script src="<?= $assets ?>/js/jquery.inview.min.js"></script>								
	<script src="<?= $assets ?>/js/scrolltopcontrol.js"></script>	
	<script src="<?= $assets ?>/js/scripts.js?v2"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
		var links = document.querySelectorAll('.mobile_menu a');
		links.forEach(function(link) {
			link.addEventListener('click', function() {
				var smMenuOuter = document.querySelector('.sm_menu_outer');
				var openMenu = document.querySelector('#sm_menu_ham');
				if (smMenuOuter && smMenuOuter.classList.contains('active')) {
					smMenuOuter.classList.remove('active');
					if (openMenu) openMenu.classList.remove('open');
				}
				document.body.classList.remove('mmactive');
			});
		});
	});
	</script>
	</body>
</html>
