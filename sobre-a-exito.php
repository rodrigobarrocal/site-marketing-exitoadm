<?php $section = 'about' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include 'template/_head.php'; ?>
	<title>Sobre a Êxito - Gestão Estratégica, Operacional e Financeira para Escritórios de Advocacia.</title>
</head>
<body data-spy="scroll" data-target=".navbar-exito">
	<!-- Navbar -->
	<?php include 'template/navbar_interna.php'; ?>
	<!-- /Navbar -->
	<section id="content-top">
		<div class="container">
			<h1>Sobre a Êxito</h1>
		</div>
	</section>
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="text-justify">A Êxito foi concebida em 2008, com a missão de prestar serviços de consultoria e assessoria especializada para Escritórios de Advocacia. Apesar de, à época, já existirem diversas empresas de consultoria empresarial, o lançamento da Êxito teve por objetivo suprir uma lacuna na gestão de escritórios, ofertando aos clientes conhecimento específico do mercado aliado às melhores práticas de gestão e à capacidade de auxiliar na implementação das soluções.</p>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel about-carousel">
						<img src="assets/images/about/team-01.jpg" alt="" class="img-responsive">
						<img src="assets/images/about/team-02.jpg" alt="" class="img-responsive">
						<img src="assets/images/about/team-02.jpg" alt="" class="img-responsive">
					</div>
				</div>
			</div> -->
			<h2>Nossa paixão é fazer as coisas <span>acontecerem</span></h2>
			<div class="row">
				<div class="col-sm-6">
					<p class="text-justify">O próprio nome, Êxito, deriva dessa familiaridade com o segmento jurídico, no qual os advogados abraçam as causas de seus clientes e conduzem seus processos sempre em busca de um desfecho favorável, ou seja, visando o tão almejado êxito.</p>
					<p class="text-justify">A convivência entre advogados ao longo do tempo, nos ensinou a valorizar cada etapa do processo e a buscar incansavelmente seu desfecho bem-sucedido. É isso que buscamos, é isso que queremos, ajudar nossos clientes a alcançar sucesso ao final de qualquer desafio!</p>
				</div>
				<div class="col-sm-6">
					<p class="text-justify">Acreditamos que é fundamental conhecer a cultura de cada escritório, seus diferenciais, seus sócios, seu mercado de atuação e suas necessidades. É a partir dessa compreensão que desenvolvemos sua estratégia, elaboramos e auxiliamos a implementação de seu plano de ação e medimos seus resultados. Nossa expertise não está apenas na Consultoria, mas também na Assessoria na implementação das soluções, na execução, no acompanhamento, no aprimoramento e na avaliação dos resultados conquistados.</p>
				</div>
			</div>
		</div>
	</section>
	<section id="team" class="inside">
		<?php include 'template/team.php' ?>
	</section>
	<!-- Footer -->
	<?php include 'template/footer.php'; ?>
	<!-- Footer -->
	<!-- Libs Script -->
	<?php include 'template/_scripts.php' ?>
	<!-- Page Script -->
	<script type="text/javascript">
		$(document).ready(function() {
			// $(".about-carousel").owlCarousel({
			// 	items: 1,
			// 	loop: true,
			// 	autoplay: true,
			// 	autoplayTimeout: 3000,
			// 	autoplaySpeed: 2500,
			// 	smartSpeed: 2500,
			// 	animateOut: 'fadeOut',
			// 	animateIn: 'fadeIn',
			// 	dots: false,
			// });
		});
	</script>
</body>
</html>
