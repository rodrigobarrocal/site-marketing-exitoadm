<nav class="navbar navbar-exito">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
				<img src="assets/images/logo-exitoadm.png" alt="Exito ADM 10 Ano" height="65">
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php#home">Home</a></li>
				<li class="<?php echo ($section == 'services' ? 'active' : ''); ?>"><a href="index.php#services">O que podemos fazer por você ?</a></li>
				<li class="<?php echo ($section == 'about' ? 'active' : ''); ?>"><a href="index.php#about">Sobre a Êxito</a></li>
				<li><a href="index.php#testemonials">Depoimentos</a></li>
				<li class="<?php echo ($section == 'team' ? 'active' : ''); ?>"><a href="index.php#team">Equipe</a></li>
				<li><a href="index.php#contact">Contato</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>