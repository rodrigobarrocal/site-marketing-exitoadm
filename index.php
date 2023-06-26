<?php
session_start();
$_SESSION["synctoken"]= uniqid(time());
?>
<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<?php include 'template/_head.php'; ?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<title>Êxito - Gestão Estratégica, Operacional e Financeira para escritórios de advocacia.</title>
		<meta name="description" content="Consultoria, Assessoria especializada e gestão estratégica, operacional e financeiras para escritórios de advocacia.">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Êxito - Gestão Estratégica, Operacional e Financeira para escritórios de advocacia.">
		<meta property="og:description" content="Consultoria, Assessoria especializada e gestão estratégica, operacional e financeiras para escritórios de advocacia.">
		<meta property="og:url" content="http://exitoadm.com.br/">
		<meta property="og:image" content="http://exitoadm.com.br/assets/images/tree.png">
		<meta property="fb:admins" content="exitoadm">
		<meta property="fb:app_id" content="255630908296155">
		<script>
			window.fbAsyncInit = function () {
				FB.init({
					appId: '255630908296155',
					cookie: true,
					xfbml: true,
					version: 'v2.10'
				});
				FB.AppEvents.logPageView();
			};
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {
					return;
				}
				js = d.createElement(s);
				js.id = id;
				js.src = "https://connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>

	<body data-spy="scroll" data-target=".navbar-exito">
		<!-- Navbar -->
		<?php include 'template/navbar.php'; ?>
		<!-- /Navbar -->
		<!-- Hero -->
		<section id="home">
			<div class="container wow fadeInUp">
				<h1>
					Gestão Estratégica, <br>
					Operacional e Financeira<br>
					para escritórios de advocacia.
				</h1>
				<!-- <p class="wow fadeInUp">
				A Êxito, é uma Consultoria e Assessoria, que atua no mercado de gestão e administração de escritórios de advocacia.
			</p> -->
				<ul class="list-inline nav-hash">
					<li data-wow-delay="0.3s">
						<a href="#services" class="btn btn-primary btn-lg">Como você pode me ajudar ? </a>
					</li>
					<li data-wow-delay="0.6s">
						<a href="#about" class="btn btn-default btn-outline btn-lg">Quem somos ?</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- /Hero -->
		<!-- Services -->
		<section id="services">
			<div class="container">
				<h2 class="section-header wow fadeInDown">O que podemos fazer por você?</h2>
				<div class="row wow fadeInUp">
					<div class="col-md-6">
						<div class="service">
							<div class="row">
								<div class="col-md-2">
									<span class="pe-7s-compass"></span>
								</div>
								<div class="col-md-10">
									<h3>Gestão Estratégica</h3>
									<p>Se a execução corre em nossas veias, a estratégia está em nosso DNA. Através da síntese entre a estratégia e a execução, ajudamos o Escritório a se conhecer, a compreender seus clientes e a se posicionar no mercado...</p>
									<a href="gestao-estrategica.php" class="btn btn-primary btn-outline">Saiba mais</a>
								</div>
							</div>
						</div>
						<div class="service">
							<div class="row">
								<div class="col-md-2">
									<span class="pe-7s-users"></span>
								</div>
								<div class="col-md-10">
									<h3>Gestão de Pessoas</h3>
									<p>A satisfação dos clientes e, portanto, o desempenho dos Escritórios, está diretamente vinculada ao nível de engajamento de seus colaboradores. </p>
									<a href="gestao-pessoas.php" class="btn btn-primary btn-outline">Saiba mais</a>
								</div>
							</div>
						</div>
						<div class="service">
							<div class="row">
								<div class="col-md-2">
									<span class="pe-7s-helm"></span>
								</div>
								<div class="col-md-10">
									<h3>Gestão de Operações</h3>
									<p>Eficiência e Eficácia, é isso que buscamos na gestão de operações. Eficiência para que as tarefas sejam executadas da melhor forma possível, otimizando os recursos disponíveis com os níveis de qualidade almejados. </p>
									<a href="gestao-operacoes.php" class="btn btn-primary btn-outline">Saiba mais</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="service">
							<div class="row">
								<div class="col-md-2">
									<span class="pe-7s-graph2"></span>
								</div>
								<div class="col-md-10">
									<h3>Gestão Administrativa e Financeira</h3>
									<p>Trabalhamos com escritórios dos mais diferentes portes e segmentos de mercado, por isso, conhecemos as melhores práticas administrativas e financeiras, mas também temos a flexibilidade necessária para nos adaptarmos aos recursos existentes, implantando ou revisando as práticas administrativas, fluxos de trabalho, indicadores, dashboards, entre outros.</p>
									<a href="gestao-administrativa-financeira.php" class="btn btn-primary btn-outline">Saiba mais</a>
								</div>
							</div>
						</div>
						<div class="service">
							<div class="row">
								<div class="col-md-2">
									<span class="pe-7s-piggy"></span>
								</div>
								<div class="col-md-10">
									<h3>Terceirização da Área Financeira</h3>
									<p>A gestão financeira dos Escritórios apresenta peculiaridades e características próprias. Nossas sócias conhecem a fundo tal realidade e só quem já fez é capaz de terceirizar.</p>
									<a href="terceirizacao-area-financeira.php" class="btn btn-primary btn-outline">Saiba mais</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="tree-wrap">
			<div class="tree wow zoomIn"></div>
		</div>
		<section id="about">
			<div class="container">
				<h2 class="section-header wow fadeInDown">Sobre a Êxito</h2>
				<div class="row">
					<div class="col-md-6 col-lg-4 wow fadeInLeft">
						<h3 class="slogan"><em>Nossa paixão é fazer as coisas</em> <span>acontecerem</span></h3>
					</div>
					<div class="col-md-6 col-lg-4 wow fadeInUp">
						<p class="text-justify">A Êxito foi concebida em 2008, com a missão de prestar serviços de consultoria e assessoria especializada para Escritórios de Advocacia. Apesar de,à época, já existirem diversas empresas de consultoria empresarial, o lançamento da Êxito teve por objetivo suprir uma lacuna na gestão de escritórios, ofertando aos clientes conhecimento específico do mercado aliado às melhores práticas de gestão e à capacidade de auxiliar na implementação das soluções.</p>
						<a href="sobre-a-exito.php" class="btn btn-default btn-outline">Mais sobre a Êxito</a>
					</div>
					<div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-6 articles wow fadeInRight">
						<h3>Artigos</h3>
						<?php include 'template/artigos-sidemenu.php' ?>
					</div>
				</div>
			</div>
		</section>
		<!-- <section id="gauges">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 gauge wow bounceIn">
					<i class="pe-7s-portfolio circle-icon variant1"></i>
					<h4>130 Escritórios Atendidos.</h4>
				</div>
				<div class="col-sm-3 gauge wow bounceIn">
					<i class="pe-7s-id circle-icon variant2"></i>
					<h4>57 Colaboradores e Funcionários.</h4>
				</div>
				<div class="col-sm-3 gauge wow bounceIn">
					<i class="pe-7s-display1 circle-icon variant3"></i>
					<h4>450 Estratégias Implementadas.</h4>
				</div>
				<div class="col-sm-3 gauge wow bounceIn">
					<i class="pe-7s-gleam circle-icon variant4"></i>
					<h4>42 Fusões de Escritórios Intermediadas</h4>
				</div>
			</div>
		</div>
	</section> -->

		<section id="testemonials">
			<h2 class="section-header wow fadeInDown">Depoimentos</h2>
			<div class="owl-carousel cases-carousel wow fadeIn">
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>20 anos Brilhantes!</h3>
							<div class="content">
								<blockquote>
									<p>
										Em mais de 20 anos de convivência, pude desfrutar e testemunhar a dedicação, eficiência, lealdade e evolução dessa profissional brilhante!”
									</p>
								</blockquote>
								<em class="who">- Mariane Silveira Pinhão</em>
								<strong class="cia">Sócia do Pinhão e Koiffman Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Resultados Alcançados e Expectativas Atendidas!</h3>
							<div class="content">
								<blockquote>
									<p>
										“Contratamos a Êxito Consultoria e Assessoria para a estruturação e o desenvolvimento de atividades de gestão do PVMP Advogados. Os resultados já alcançados atenderam plenamente às nossas expectativas e colaboraram de forma decisiva para a administração do escritório. Recebemos um serviço de alta qualidade, prestado por profissionais com ótima especialização em administração de escritórios de advocacia e destacada competência, seriedade e comprometimento. Por isso, já contamos com a Êxito para os nossos próximos desafios!”
									</p>
								</blockquote>
								<em class="who">- Patricia Pessoa Valente e Henrique Motta Pinto</em>
								<strong class="cia">Sócios do PVMP Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Lugar de Destaque!</h3>
							<div class="content">
								<blockquote>
									<p>“A Êxito nos presta consultoria na área de controle financeiro há cerca de 3 anos, com profissionalismo e presteza. O Instituto Criança é Vida tem passado pelas auditorias terceirizadas sem qualquer observação e recentemente tornou-se a primeira organização brasileira afiliada ao GIFE a apresentar 100% de Transparência. Os controles desenvolvidos pela Êxito certamente nos ajudaram a estar nesta posição tão especial!”</p>
								</blockquote>
								<em class="who">- Regina Stella Schwandner</em>
								<strong class="cia">Instituto Criança é Vida</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Seriedade e Comprometimento!</h3>
							<div class="content">
								<blockquote>
									<p>“Contamos com a Êxito desde a implantação do nosso escritório, oportunidade em que seu suporte foi fundamental. Trata de empresa extremamente séria e comprometida com o negócio do seu cliente. Seus profissionais atuam com proatividade, integrados com a nossa estrutura, além de zelo para o atingimento de nossos resultados”</p>
								</blockquote>
								<em class="who">- Mauricio Greca Consentino</em>
								<strong class="cia">Sócio fundador de Baraldi Mélega Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Desde o Início!</h3>
							<div class="content">
								<blockquote>
									<p>“A Êxito nos auxiliou na implementação do nosso escritório há 5 anos e, desde então, participou de todas as nossas conquistas, seja nos auxiliando na elaboração e implantação do planejamento estratégico, ou na administração do dia a dia do escritório. Sem dúvida é uma consultoria que conhece de fato o mercado jurídico e se envolve profundamente na atividade do cliente, focando na entrega de resultados.”</p>
								</blockquote>
								<em class="who">- Aitan Portela</em>
								<strong class="cia">Sócio de ASBZ ADVOGADOS - Amaral, Biazzo, Portela e Zucca Sociedade de Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Fazendo a Diferença!</h3>
							<div class="content">
								<blockquote>
									<p>“O trabalho realizado pela Êxito em nosso escritório vai além de suporte técnico administrativo. Os instrumentos de gestão e desenvolvimento do negócio foram cruciais para que conseguissemos hoje alcançar uma estrutura organizada, focada e com objetivos bem definidos. Lembro-me que contratei a Exito quando o escritório tinha apenas três pessoas trabalhando. E de lá para cá todo o trabalho por eles realizado fez diferença em nosso crescimento.”</p>
								</blockquote>
								<em class="who">- Marina Coelho Araújo</em>
								<strong class="cia">Sócia fundadora Costa, Coelho Araújo e Zaclis Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Dedicação, Proatividade e Dinamismo!</h3>
							<div class="content">
								<blockquote>
									<p>“A Machado Filgueiras Advogados Associados há vários anos é atendida pela Êxito Consultoria e estamos plenamente satisfeitos pelo profissionalismo, competência, experiência trazendo excelentes resultados na parte administrativa, financeira, gerencial do nosso escritório. A dedicação, proatividade e dinamismo de toda a equipe da Êxito Consultoria trazem a confiança esperada para mantermos essa parceria de longa data.”</p>
								</blockquote>
								<em class="who">- Edson Machado Filgueiras Júnior</em>
								<strong class="cia">Sócio do Machado Filgueiras Advogados Associados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Equipe Experiente e Motivadas!</h3>
							<div class="content">
								<blockquote>
									<p>“A Êxito tem uma equipe experiente e motivada. Acompanhou de perto as diversas etapas de nossos projetos sempre atendendo prontamente as nossas necessidades. São excelentes parceiros com os quais podemos contar, para sempre aplicarmos as melhores práticas de gestão em nosso escritório.”</p>
								</blockquote>
								<em class="who">- Marcello do Nascimento</em>
								<strong class="cia">Sócio da David do Nascimento Advogados Associados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<!--  -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3>Quebrando Paradigmas!</h3>
							<div class="content">
								<blockquote>
									<p>“A Êxito não é uma simples Consultoria, ela faz e acontece. Ela mudou minha opinião e meu preconceito sobre Consultoria.”</p>
								</blockquote>
								<em class="who">- João Biazzo Filho</em>
								<strong class="cia">Sócio de ASBZ ADVOGADOS - Amaral, Biazzo, Portela e Zucca Sociedade de Advogados</strong>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
			</div>
			<div class="container clients wow fadeIn">
				<h3>Alguns de nossos clientes</h3>
				<ul class="list-inline owl-carousel clients-carousel">
					<li><img src="assets/images/clientes/Clientes_ASBZ.png" alt="ASBZ"></li>
					<li><img src="assets/images/clientes/Clientes_BARALDI.png" alt="BARALDI"></li>
					<li><img src="assets/images/clientes/Clientes_CAB.png" alt="CAB"></li>
					<li><img src="assets/images/clientes/Clientes_CAZ.png" alt="CAZ"></li>
					<li><img src="assets/images/clientes/Clientes_CMG.png" alt="CMG"></li>
					<li><img src="assets/images/clientes/Clientes_CORVO.png" alt="CORVO"></li>
					<li><img src="assets/images/clientes/Clientes_DN.png" alt="DN"></li>
					<li><img src="assets/images/clientes/Clientes_ICV.png" alt="ICV"></li>
					<li><img src="assets/images/clientes/Clientes_MATEUCCI.png" alt="MATEUCCI"></li>
					<li><img src="assets/images/clientes/Clientes_MCP.png" alt="MCP"></li>
					<li><img src="assets/images/clientes/Clientes_MF.png" alt="MF"></li>
					<li><img src="assets/images/clientes/Clientes_MNA.png" alt="MNA"></li>
					<li><img src="assets/images/clientes/Clientes_OCV.png" alt="OCV"></li>
					<li><img src="assets/images/clientes/Clientes_PAGLIUSO.png" alt="PAGLIUSO"></li>
					<li><img src="assets/images/clientes/Clientes_PMMAF.png" alt="PMMAF"></li>
					<li><img src="assets/images/clientes/Clientes_PORTOLAUAND.png" alt="PORTOLAUAND"></li>
					<li><img src="assets/images/clientes/Clientes_PROVEDEL.png" alt="PROVEDEL"></li>
					<li><img src="assets/images/clientes/Clientes_PVG.png" alt="PVG"></li>
					<li><img src="assets/images/clientes/Clientes_PVMP.png" alt="PVMP"></li>
					<li><img src="assets/images/clientes/Clientes_RBBA.png" alt="RBBA"></li>
					<li><img src="assets/images/clientes/Clientes_RCVA.png" alt="RCVA"></li>
					<li><img src="assets/images/clientes/Clientes_SBA.png" alt="SBA"></li>
					<li><img src="assets/images/clientes/Clientes_TOAN.png" alt="TOAN"></li>
					<li><img src="assets/images/clientes/Clientes_WFARIA.png" alt="WFARIA"></li>
					<li><img src="assets/images/clientes/Clientes_briganti.png" alt="briganti"></li>
					<li><img src="assets/images/clientes/Clientes_rubensnaves.png" alt="rubensnaves"></li>
					<li><img src="assets/images/clientes/Clientes_saeki.png" alt="saeki"></li>
					<li><img src="assets/images/clientes/Clientes_THV.png" alt="THV"></li>
					<li><img src="assets/images/clientes/Clientes_Viseu.png" alt="Viseu"></li>
					<li><img src="assets/images/clientes/Clientes_BarcellosTucunduva.png" alt="Barcellos e Tucunduva"></li>
					<li><img src="assets/images/clientes/Clientes_CalladoMoraes.png" alt="Callado e Moraes"></li>
					<li><img src="assets/images/clientes/Clientes_pacifico.png" alt="Pacífico"></li>
					<li><img src="assets/images/clientes/Clientes_schivartche.png" alt="Schivartche"></li>
				</ul>
			</div>
		</section>
		<section id="team">
			<?php include 'template/team.php' ?>
		</section>
		<section id="partners">
			<h2 class="section-header wow fadeInDown">Estamos Apoiando</h2>
			<div class="container wow fadeIn">
				<ul class="list-inline owl-carousel partners-carousel" title="O Instituto Devolver promove a solidariedade em prol de crianças e adolescentes carentes brasileiras, conectando organizações não-governamentais ao voluntariado e doador privado com transparência, integridade, gratidão e compreensão.">
					<li><a href="https://www.institutodevolver.org.br/" target="_blank"><img src="assets/images/partners/Instituto-Devolver.png" alt="O Instituto Devolver promove a solidariedade em prol de crianças e adolescentes carentes brasileiras, conectando organizações não-governamentais ao voluntariado e doador privado com transparência, integridade, gratidão e compreensão."></a></li>
				</ul>
			</div>
		</section>
		<section id="contact">
			<h2 class="section-header wow fadeInDown">Entre em Contato</h2>
			<!-- Form -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form action="_contato_.php" method="post" enctype="multipart/form-data" id="contactForm">
							<input type="hidden" name="token" value="<?=$_SESSION["synctoken"]?>">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" data-validation-required-message="Por favor preencha com seu nome." required="" name="nome" id="nome" placeholder="Seu Nome *" class="form-control" aria-invalid="false">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="email" data-validation-required-message="Por favor preencha com seu email." required="" name="email" id="email" placeholder="Seu Email *" class="form-control">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input type="tel" data-validation-required-message="Por favor preencha com seu telefone." required="" name="telefone" id="telefone" placeholder="Seu Telefone *" class="form-control">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea data-validation-required-message="Por favor escreva sua mensagem." rows="5" required="" name="mensagem" id="mensagem" placeholder="Sua Mensagem *" class="form-control"></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button class="btn btn-lg btn-default" type="submit">Enviar Mensagem</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<?php include 'template/footer.php'; ?>
		<!-- Footer -->
		<!-- Libs Script -->
		<?php include 'template/_scripts.php' ?>
		<!-- Page Script -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script type="text/javascript" src="assets/js/home.js"></script>
		<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSlTwYVAviy_vvsD1c1z0L19xq1eBPWmA&callback=initMap" ype="text/javascript"></script> -->
	</body>

</html>