<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
	<meta name="author" content="Theme Industry">
	<!-- description -->
	<meta name="description" content="boltex">
	<!-- keywords -->
	<meta name="keywords" content="">
	<title>Lexlam | Agência Digital</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?= base_url('public/');?>css/bootstrap.min.css">

	<!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
	<link rel="stylesheet" href="<?= base_url('public/');?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('public/');?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('public/');?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('public/');?>css/slick.css">
	<link rel="stylesheet" href="<?= base_url('public/');?>css/cubeportfolio.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/');?>css/component.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101994061-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-101994061-1');
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light">
		<a class="logo" href="<?= base_url();?>">
			<img src="<?= base_url('public/');?>img/logo.png" alt="Lexlam">
		</a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li >
					<a class="nav-link" href="#showcase">Lexlam</a>
				</li>
				<li>
					<a class="nav-link" href="#features">Recursos</a>
				</li>
				<li>
					<a class="nav-link" href="#services">Serviços</a>
				</li>
				<li>
					<a class="nav-link" href="#portfolio">Portifólio</a>
				</li>
				<li>
					<a class="nav-link" href="#teams">Equipe</a>
				</li>
				<li>
					<a class="nav-link" href="#contact">Contato</a>
				</li>
				<li>
					<a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</nav>


	<!--================ Showcase section ===================-->
	<div id="showcase">
		<div class="container showcase">
			<div class="full-width text-center showcase-caption mt-30">
				<h4>Nós Somos a Lexlam</h4>
				<h1>Sua Agência Digital</h1>
				<p>Transformamos inovação tecnológica em estratégias que impactam o seu cliente durante toda a jornada de compra.</p>
				<div class="showcase-button">
					<a href="#features" class="button-style showcase-btn">
						Leia Mais
					</a>
					<a href="#services" class="button-style showcase-btn">
						Iniciar
					</a>
				</div>
			</div>
		</div>
	</div>

	<!--================== Features section =====================-->
	<div id="features">
		<div class="text-center features-caption features">
			<h3>Bem-vindo a nossa agência</h3>
			<h4>Quem somos e o que podemos fazer?</h4>
			<p>
				Somos uma agencia de marketing digital especializada em marketing digital, desenvolvimento de sites e aplicações mobile e Designer Gráfico. Fundada em Julho de 2009 nossa empresa sempre manteve o foco no mercado digital, Acreditando e tornando sonhos de nossos Clientes em realidade. Somos referência em Planejar Sonhos e tornar o Marketing Digital em realidade. Nossos projetos são mensurados em ferramentas especializadas em Data Analytics. Saiba mais, Faça um orçamento!
			</p>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm bottom-space">
					<div class="feature-box">
						<i class="fa fa-image fa-5x fa-icon-image"></i>
						<h3 class="heading-tertiary u-margin-bottom-small">
							Designer
						</h3>
						<p class="feature-box__text">
							Com um Lexlam, tenhamos o prazer de transformar seus sonhos em realidade. Pense nisso!
						</p>
					</div>
				</div>
				<div class="col-sm bottom-space">
					<div class="feature-box">
						<i class="fa fa-bullhorn fa-5x fa-icon-image" ></i>
						<h3 class="heading-tertiary u-margin-bottom-small">Marketing</h3>
						<p class="feature-box__text">
							Tenha seus sonhos realizados sendo compartilhado ao mundo com a Lexlam! Anuncie Conosco!
						</p>
					</div>
				</div>
				<div class="col-sm bottom-space">
					<div class="feature-box">
						<i class="fa fa-5x fa-code fa-icon-image"></i>
						<h3 class="heading-tertiary u-margin-bottom-small">Desenvolvimento</h3>
						<p class="feature-box__text">
							Agora seus sonhos poderão se tornar realidade no mundo Digital. Faça seu site e aplicações conosco!
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="features-section-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm features-section-2-col-1 hover-effect">
					</div>
					<div class="col-sm features-section-2-col-2 ">
						<div class="features-section-2-col-2__content">
							<h2>POR QUE DEVO CONTRATAR?</h2>
							<p>
								POSSUÍMOS MÁXIMA CERTIFICAÇÃO EM LINKS PATROCINADOS, ATENDEMOS COM TRANSPARÊNCIA, PROXIMIDADE E COMPROVAMOS POSICIONAMENTO NA BUSCA ORGÂNICA DO GOOGLE ENTRE AS PRINCIPAIS AGÊNCIAS DE MARKETING DIGITAL DO BRASIL.
								SOMOS COMPROMETIDOS, DEDICADOS.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--================== Services section =====================-->
	<div id="services">

		<div class="container features">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 bottom-space">
					<div class="folded-corner service_tab_1">
						<div class="text">
							<i class="fa fa-image fa-5x fa-icon-image"></i>
							<h3 class="item-title"> Designing</h3>
							<p>
								Fazer Design é pensar em soluções simples para os problemas das pessoas, sendo útil, agradável e coerente. Realizamos isso através de um projeto que leva em conta vários aspectos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 bottom-space">
					<div class="folded-corner service_tab_1">
						<div class="text">
							<i class="fa fa-lightbulb-o fa-5x fa-icon-image" ></i>
							<h3 class="item-title"> Developing</h3>
							<p>
								This is an amazing set of animated accordions based completely on CSS. They come oriented both vertically and horizontally in order to fit properly in your project. In order to see the slides,
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 bottom-space">
					<div class="folded-corner service_tab_1">
						<div class="text">
							<i class="fa fa-truck fa-5x fa-icon-image"></i>
							<h3 class="item-title"> Marketing</h3>
							<p>
								This is an amazing set of animated accordions based completely on CSS. They come oriented both vertically and horizontally in order to fit properly in your project. In order to see the slides,
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 bottom-space">
					<div class="folded-corner service_tab_1">
						<div class="text">
							<i class="fa fa-diamond fa-5x fa-icon-image"></i>
							<h3 class="item-title"> Nova Marca</h3>
							<p>
								This is an amazing set of animated accordions based completely on CSS. They come oriented both vertically and horizontally in order to fit properly in your project. In order to see the slides,
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--================== Portfolio section =====================-->
	<section class="grid3d vertical portfolio" id="portfolio">
		<div class="container">
			<div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
				<!-- <span>Heros Behind The Company</span> -->
				<h3 class="teams-heading">Nosso Projeto Recente</h3>

				<p class="heading_space">Empresas com grande reconhecimento no mercado nacional e internacional já estão melhorando seus resultados conosco. O que você está esperando para entrar em contato e fazer parte desse time de elite?
				</p>
			</div>
		</div>

		<div class="grid-wrap">
			<div class="grid">
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-1.jpg" alt="img01"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-2.jpg" alt="img05"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-3.jpg" alt="img08"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-4.jpg" alt="img02"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-5.jpg" alt="img04"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-6.jpg" alt="img03"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-7.jpg" alt="img09"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-8.jpg" alt="img06"/></figure>
				<figure class="hover-effect"><img src="<?= base_url('public/');?>img/portfolio/img-4.jpg" alt="img07"/></figure>
			</div>
		</div><!-- /grid-wrap -->
		<div class="content gallery-content">
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-1.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>

			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-2.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-3.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-4.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-5.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-6.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-7.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>Our Recent Project</h3>

					<p>Curabitur mollis bibendum luctus. Duis suscipit
						vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in
						maximus metus sollicitudin.
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-8.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<div>
				<div class="text-center col-md-8 offset-md-2 col-sm-12 text-center">
					<h3>O que estas empresas encontraram em nossos serviços?</h3>

					<p>Empresas com grande reconhecimento no mercado nacional e internacional já estão melhorando seus resultados conosco. O que você está esperando para entrar em contato e fazer parte desse time de elite?
					</p>
					<img class="" style="width:100%" src="<?= base_url('public/');?>img/portfolio/img-4.jpg" alt="img01"/>

					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
					thing, but burn, burn, burn like fabulous yellow roman candles exploding like spiders across the stars.</p>
					<p>The only people for me are the mad ones, the ones who are mad to live, mad to talk,
						mad to be saved, desirous of everything at the same time, the ones who never yawn or say a commonplace
						thing, but burn, burn, burn like fabulous yellow roman candles exploding
					like spiders across the stars.</p>
				</div>
			</div>
			<span class="loading"></span>
			<span class="icon close-content">&times;</span>
		</div>
	</section>

	<!--================== Team section =====================-->

	<div id="teams">
		<div class="container">
			<div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
				<!-- <span>Heros Behind The Company</span> -->
				<h1 class="teams-heading">Nosso Time</h1>
				<p class="text-center">Formado por especialistas e apaixonados pelo o que faz</p>

				<p class="heading_space">Você pode ter certeza de que está em boas mãos.  Projetamos um plano de marketing personalizado com base no potencial singular da sua empresa. Analisamos amplamente o cenário mais amplo e depois aprofundamos seus canais de mídia, estratégia e inovação.
				</p>
			</div>

			<div class="row">
				<div class="col-sm">
					<div class="teams-item-box">
						<div class="teams-item">
							<div class="profile-image"><img src="<?= base_url('public/');?>img/jen.png" alt="Jen Image" /></div>
							<div>
								<h3>Cosme</h3>
								<h5>Desenvolvedor</h5>
								<p>Seja reconhecido virtualmente, Crie seu sites, aplicações Web e Mobile.</p>
								<div class="icons">
									<a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="teams-item-box">
						<div class="teams-item">
							<div class="profile-image"><img src="<?= base_url('public/');?>img/mike.png" alt="Mike image" /></div>
							<div>
								<h3>Mabel</h3>
								<h5>Marketing</h5>
								<p>Promova sua marca em mídias sociais, gerando tráfego e leads para sua empresa</p>
								<div class="icons">
									<a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="teams-item-box">
						<div class="teams-item">
							<div class="profile-image"><img src="<?= base_url('public/');?>img/nic.png" alt="Nic image" /></div>
							<div>
								<h3>Alexandro</h3>
								<h5>Designers</h5>
								<p>Tenha sua logo e sua marca estampada entre as maiores empresasda Internet</p>
								<div class="icons">
									<a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!--================== Feedback section =====================-->

	<div id="contact" class="contact">
		<div class="map">
			<iframe height="400" id="gmap_canvas" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Avenida%20Otoniel%20Gomes%20Tavares,%201287%20-%20S%C3%A3o%20Jos%C3%A9%20do%20Barreto,%20Maca%C3%A9%20-%20RJ+(Lexlam%20Ag%C3%AAncia%20Digital)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
					<h1 class="contact-heading">Entre em contato Conosco</h1>
					<p>Com mais de 10 anos de experiência de mercado, a Agência Lexlam é uma empresa especializada em Marketing Digital de Alta Performance. Possuímos um sistema de automação em geração de leads.</p>

					<div class="row margin-15px-bottom">
						<div class="col-sm-1 no-padding">
							<div class="contact-icon text-blue">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-11">
							<p class="text-small">Av Otoniel Gomes Taváres &amp; 1287 <br> Bloco 5, Sala 108</p>
						</div>
					</div>

					<div class="row margin-15px-bottom">
						<div class="col-sm-1 no-padding">
							<div class="contact-icon text-blue">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-11">
							<p class="text-small">(21)9-9645-80333<br>(22)2020-6590</p>
						</div>
					</div>

					<div class="row margin-15px-bottom">
						<div class="col-sm-1 no-padding">
							<div class="contact-icon text-blue">
								<i class="fa fa-globe" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-11 xs-margin-50px-bottom">
							<p class="text-small">contato@lexlam.com.br<br>www.lexlam.com.br</p>
						</div>
					</div>


				</div>


				<div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
					<!-- Starting of ajax contact form -->
					<form class="contact__form" method="post" action="contact_mail.php">
						<!-- Element of the ajax contact form -->
						<div class="row">
							<div class="col-md-6 form-group">
								<input name="name" type="text" class="form-control" placeholder="Nome" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="email" type="email" class="form-control" placeholder="E-mail" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="phone" type="text" class="form-control" placeholder="Telefone" required>
							</div>
							<div class="col-md-6 form-group">
								<input name="subject" type="text" class="form-control" placeholder="Assunto" required>
							</div>
							<div class="col-12 form-group">
								<textarea name="message" class="form-control" rows="3" placeholder="Mensagem" required></textarea>
							</div>
							<div class="col-12">
								<input name="submit" type="submit" class="button-style" value="Enviar">
							</div>
						</div>


					</form>
					<!-- Ending of ajax contact form -->
					<!-- Starting of successful form message -->
					<div class="row">
						<div class="col-12">
							<div class="alert alert-success contact__msg" style="display: none" role="alert">
								Sua mensagem foi enviada com sucesso.
							</div>
						</div>
					</div>
					<!-- Ending of successful form message -->
				</div>
			</div>
		</div>
	</div>
	<footer class="text-center pos-re">
		<div class="container">
			<div class="footer__box">
				<!-- Logo -->
				<a class="logo" href="#">
					<img src="<?= base_url('public/');?>img/logo.png" alt="logo">
				</a>

				<div class="social">
					<a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
					<a href="#0"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>

				<p>&copy; 2009-<?= date('Y') ?> Lexlam. All Rights Reserved.</p>
			</div>
		</div>

		<div class="curve curve-top curve-center"></div>
	</footer>

	<!--================== Modal section =====================-->
	<div>
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header border-bottom-0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-title text-center">
							<h4>Bem vindo!</h4>
						</div>
						<div class="d-flex flex-column text-center">
							<form action="<?= base_url();?>auth/login" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email" placeholder="Entre com seu e-mail">
									<?php echo form_error("email")?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" placeholder="Entre com sua senha">
									<?php echo form_error("password")?>
								</div>
								<button type="submit" class="btn btn-info btn-block btn-round">Entrar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
							</form>

							<div class="text-center text-muted delimiter">Acesse com nossas redes Sociais</div>
							<div class="d-flex justify-content-center social-buttons">
								<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</button>
								<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="fa fa-linkedin" aria-hidden="true"></i>
								</button>
							</di>
						</div>
					</div>
				</div>
				<div class="modal-footer d-flex justify-content-center">
					<div class="signup-section">Ainda não tem cadastro? <a href="#a" class="text-info"> Cadastre-se</a>.</div>
				</div>
			</div>
		</div>
	</div>
	<!--================== Modal section =====================-->

	<script src="<?= base_url('public/');?>./js/jquery.min.js"></script>
	<script src="<?= base_url('public/');?>./js/modernizr.custom.js"></script>
	<script src="<?= base_url('public/');?>./js/bootstrap.min.js"></script>
	<script src="<?= base_url('public/');?>./js/slick.min.js"></script>
	<script src="<?= base_url('public/');?>./js/scrollreveal.min.js"></script>
	<script src="<?= base_url('public/');?>./js/jquery.cubeportfolio.min.js"></script>
	<script src="<?= base_url('public/');?>./js/jquery.matchHeight-min.js"></script>
	<script src="<?= base_url('public/');?>./js/masonry.pkgd.min.js"></script>
	<script src="<?= base_url('public/');?>./js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url('public/');?>./js/classie.js"></script>
	<script src="<?= base_url('public/');?>./js/helper.js"></script>
	<script src="<?= base_url('public/');?>./js/grid3d.js"></script>
	<script src="<?= base_url('public/');?>./js/script.js"></script>
</body>
</html>