<?php
	include('dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="image/favicon.ico">
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
		<section class="mainblog">
			<header class="mainblogcabeca">
				<h1>Sabores disponíveis</h1>
			</header>
				<?php
                    $id = $_GET['id'];

					foreach($marmitas as $key => $value){
                        if($value['id'] == $id){
				?>
				<article>
					<a href="#"><img src=<?=$value['imagem'];?>></a>
					<h2><?=$value['title'];?></h2>
					<p><?=$value['description'];?></p>
				</article>

				<?php
                        }
					}
				?>					
			</section>	  
            <section class="mainblog">
		        <header class="mainblogcabeca">
                    <h1>Ainda ficou com dúvidas?</h1>
                    <p> Entre em contato comigo!<br> (11)91111-1111</p>
                </header>
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