<?php
	include('dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">

	<title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="cabecalho">
		<div class="conteudocabecalho">
			<a href="#" class="logo"><img src="image/marmitalogo.png" height="100" alt="logomarmita" title="logo marmita">
			</a>
			<nav class="cabecalhomenu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Quem é Dona Rita?</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>

		<div class="maincall">
			<article class="maincallconteudo">
                <div class="maincallconteudospacer"
					<header>
						<h1>Venha experimentar as melhores marmitas da região!</h1>
						<p>Você não vai se arrepender</p>
					</header>
						<p>Escolha o seu sabor e se apaixone!</p>
						<p><a href="#" class="btn">Saiba Mais</a></p>
				</div>
            </article>
        </div>

		<section class="mainblog">
			<header class="mainblogcabeca">
				<h1>Sabores disponíveis</h1>
			</header>
				<?php
					foreach($marmitas as $key => $value){
				?>
				<article>
					<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
					<h2><?=$value['title'];?></h2>
					
				</article>

				<?php
					}
				?>					
			</section>		
			<article class="mainfooter">
				<div class="mainfootercontent">
					<nav class="mainfootercontentmenu">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Quem é Dona Rita?</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contato</a></li>
						</ul>
					</nav>
            	</div>
        	</article>
		

	</main>
	<footer>
		<p>Desenvolvido por Ana Maria</p>
	</footer>
</body>
</html>