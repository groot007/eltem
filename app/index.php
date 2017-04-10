<?php
	require_once('integration_vtiger/ModelIntegration.php');
	$leadsource 				= 'Landing-реклама-на-ТС';
	$module_integration = new ModelIntegration($leadsource);
	$hidden_inpunt 			= $module_integration->generate_hidden_inputs();
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Eltem</title>
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta property="og:image" content="path/to/image.jpg">
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="css/main.min.css">
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#000">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#000">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	</head>
	<body>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter43965724 = new Ya.Metrika({ id:43965724, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/43965724" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		 <!-- /Yandex.Metrika counter -->

		<!-- <div id="page-preloader"><span class="spinner"></span></div> -->

		<header>
			<!-- start .top-head -->
			<div class="top-head">
				<!-- start .container -->
				<div class="container">
					<!-- start .row -->
					<div class="row">
						<!-- start .col-lg-4 -->
						<div class="col-lg-4">
							<a href="index.php" class="logo">
								<img src="img/logo.jpg" alt="Eltem" />
							</a>
							<p class="tagline">
								Медтехника от производителя с доставкой по РФ
							</p>
						</div>
						 <!-- end .col-lg-4 -->
						<!-- start .col-lg-4 -->
						<div class="col-lg-4 text-center">
							<a href="#" class="email">Lp@eltem</a>
						</div>
						 <!-- end .col-lg-4 -->
						<!-- start .col-lg-4 -->
						<div class="col-lg-4">
							<a href="tel:88001238080" class="phone">8 (800) 123-80-80</a>
							<a class="btn popup-with-form" href="#test-form">Заказать звонок</a>
						</div>
						 <!-- end .col-lg-4 -->
					</div>
					 <!-- end .row -->
				</div>
				 <!-- end .container -->
			</div>
			 <!-- end .top-head -->
			<!-- start .main-part -->
			<div class="main-part">
				<!-- start .container -->
				<div class="container">
					<!-- start .col-lg-12 -->
					<div class="col-lg-12">
						<h1 class="main-title">Поставка хирургического оборудования в РФ</h1>
						<h3>Анализ, подбор и поставка оборудования, монтаж и ввод в эксплуатацию,
	сервисное сопровождение, ремонт и утилизация.</h3>
					</div>
					 <!-- end .col-lg-12 -->
					 <!-- start .col-lg-5 -->
					 <div class="col-lg-5">
					 	<ul class="menu-nav">
					 		<li><a href="#equip"><span>Оборудование</span></a></li>
					 		<li><a href="#catalog"><span>Скачать полный каталог</span></a></li>
					 		<li><a href="#works"><span>Работы</span></a></li>
					 		<li><a href="#about"><span>О нас</span></a></li>
					 	</ul>
					 	<!-- start .phone-large -->
					 	<a href="tel:88005132363" class="phone-large">8 800 513 23 63</a>
					 	 <!-- end .phone-large -->
					 	 <!-- start .works-time -->
					 	 <p class="works-time">с 9:00 до 19:00 по будням (Новосибирское время)</p>
					 	  <!-- end .works-time -->
					 	<a href="#catalog" class="btn bordered">Скачать каталог</a>
					 	<a href="#catalog" class="btn with-icon">
					 		<span class="icon icon-phone"></span><span>Запросить звонок</span>
					 	</a>
					 </div>
					  <!-- end .col-lg-5 -->
					  <!-- start .col-lg-7 -->
					  <div class="col-lg-7">
						<!-- start .notebook -->
						<div class="notebook">
							<!-- start .video -->
							<div class="video">
								<video  autoplay muted  preload="none" loop>
									<source src="video/emaled.mp4"/>
								</video>
							</div>
							 <!-- end .video -->
						</div>
						 <!-- end .notebook -->
					  </div>
					   <!-- end .col-lg-7 -->
				</div>
				 <!-- end .container -->
			</div>
			 <!-- end .main-part -->
		</header>
		<!-- start .equipment -->
		<section class="equipment">
			<!-- start .container -->
			<div class="container">
				<h2 class="underline">Хирургическое оборудование</h2>
				<!-- start .tabs -->
				<div class="tabs">
					<!-- start .col-lg-3 -->
					<div class="col-lg-3">
						<!-- start .corner-square smaller -->
						<div class="corner-square smaller">
							<!-- start .tab -->
							<div class="tab active" data-toslide="1">
								<figure>
									<!-- start .wrap-img -->
									<div class="wrap-img">
										<img src="img/equipment-1.jpg" alt="Светильники ЭМАЛЕД" />
									</div>
									 <!-- end .wrap-img -->
									<figcaption>
										Светильники ЭМАЛЕД
									</figcaption>
								</figure>
								<!-- start .btn equip-kind -->
								<a  href="#" class="equip-kind">
									Операционное освещение
								</a>
								 <!-- end .btn equip-kind -->
							</div>
							 <!-- end .tab -->
						</div>
						 <!-- end .corner-square smaller -->
					</div>
					 <!-- end .col-lg-3 -->
					<!-- start .col-lg-3 -->
					<div class="col-lg-3">
						<!-- start .corner-square smaller -->
						<div class="corner-square smaller">
							<!-- start .tab -->
							<div class="tab" data-toslide="2">
								<figure>
									<!-- start .wrap-img -->
									<div class="wrap-img">
										<img src="img/equipment-2.jpg" alt="Светильники ЭМАЛЕД" />
									</div>
									 <!-- end .wrap-img -->
									<figcaption>
										Операционные столы МЕДИНa
									</figcaption>
								</figure>
								<!-- start .btn equip-kind -->
								<a  href="#" class="equip-kind">
									<span>
										Операционные столы
									</span>

								</a>
								 <!-- end .btn equip-kind -->
							</div>
							 <!-- end .tab -->
						</div>
						 <!-- end .corner-square smaller -->
					</div>
					 <!-- end .col-lg-3 -->
					<!-- start .col-lg-3 -->
					<div class="col-lg-3">
						<!-- start .corner-square smaller -->
						<div class="corner-square smaller">
							<!-- start .tab -->
							<div class="tab" data-toslide="3">
								<figure>
									<!-- start .wrap-img -->
									<div class="wrap-img">
										<img src="img/equipment-3.jpg" alt="Светильники ЭМАЛЕД" />
									</div>
									 <!-- end .wrap-img -->
									<figcaption>
										Аппараты "ФОТЕК"
									</figcaption>
								</figure>
								<!-- start .btn equip-kind -->
								<a  href="#" class="equip-kind">
									<span>Электрохирургическое оборудование
									</span>

								</a>
								 <!-- end .btn equip-kind -->
							</div>
							 <!-- end .tab -->
						</div>
						 <!-- end .corner-square smaller -->
					</div>
					 <!-- end .col-lg-3 -->
					 <!-- start .col-lg-3 -->
					<div class="col-lg-3">
						<!-- start .corner-square smaller -->
						<div class="corner-square smaller">
							<!-- start .tab -->
							<div class="tab" data-toslide="4">
								<figure>
									<!-- start .wrap-img -->
									<div class="wrap-img">
										<img src="img/equipment-4.jpg" alt="Светильники ЭМАЛЕД" />
									</div>
									 <!-- end .wrap-img -->
									<figcaption>
										Аппарат "СУРГИТРОН"
									</figcaption>
								</figure>
								<!-- start .btn equip-kind -->
								<a  href="#" class="equip-kind">
									<span>
										Радиоволновое оборудование
									</span>

								</a>
								 <!-- end .btn equip-kind -->
							</div>
							 <!-- end .tab -->
						</div>
						 <!-- end .corner-square smaller -->
					</div>
					 <!-- end .col-lg-3 -->
				</div>
				 <!-- end .tabs -->
				<!-- start .arrow-down -->
				<a href="#" class="arrow-down">
					<span class="angle"></span>
				</a>
				 <!-- end .arrow-down -->
				<!-- start .equip-slider -->
				<div class="equip-slider slider">
					<!-- start .slide -->
					<div class="slide">
						<!-- start .main-cont -->
						<div class="main-cont">
							<!-- start .preview -->
							<div class="preview">
								<!-- start .equip-unit-slider -->
								<div class="equip-unit-slider">
									<!-- start .slide -->
									<a class="slide" href="img/slider/emaled-1.jpg" data-inf="Эмалед 100п" ><img src="img/slider/emaled-1.jpg" alt="" /></a>
									<a class="slide" href="img/slider/emaled-2.jpg" data-inf="Эмалед 300п"><img src="img/slider/emaled-2.jpg" alt="" /></a>
									<a class="slide" href="img/slider/emaled-3.jpg" data-inf="Эмалед 500п"><img src="img/slider/emaled-3.jpg" alt="" /></a>
									<a class="slide" href="img/slider/emaled-4.jpg" data-inf="Эмалед 200п"><img src="img/slider/emaled-4.jpg" alt="" /></a>
									 <!-- end .slide -->
								</div>
								 <!-- end .equip-unit-slider -->
							</div>
							 <!-- end .preview -->
							<!-- start .equip-inf -->
							<div class="equip-inf">
								<h3>Светильники ЭМАЛЕД</h3>
								<!-- start .deskr-block -->
								<div class="deskr-block dashed-bdr">
									<h4>Описание</h4>
									<p class="deskr">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
										veniam, quis nostrud exercitation ullamco laboris
									</p>
								</div>
								 <!-- end .deskr-block -->
								<!-- start .deskr-block -->
								<div class="deskr-block dashed-bdr">
									<h4>Назначение</h4>
									<p class="deskr">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
										veniam, quis nostrud exercitation ullamco laboris
									</p>
								</div>
								 <!-- end .deskr-block -->
								<!-- start .deskr-block -->
								<div class="deskr-block dashed-bdr">
									<h4>Варианты сборки</h4>
									<ul>
										<li><span class="icon icon-ceiling"></span><span>потолочные одно-,двух-, трёх- купольные </span></li>
										<li><span class="icon icon-camera"></span><span>с видео камерой и без </span></li>
										<li><span class="icon icon-battery"></span><span>с аварийным питанием и без</span></li>
										<li><span class="icon icon-wall"></span><span>настенный или передвижной</span></li>
									</ul>
								</div>
								 <!-- end .deskr-block -->
								<!-- start .deskr-block -->
								<div class="deskr-block">
									<h4>Товар в наличии</h4>
									<p>Средний срок службы светодиодов  более 60 000 часов или 2500 суток </p>
									<a href="#" class="btn">Оформить заказ</a>
								</div>
							</div>
							 <!-- end .equip-inf -->
						</div>
						 <!-- end .main-cont -->
						<!-- start .how-it-works -->
						<div class="how-it-works">
							<h2 class="underline">Как происходит <br /> монтаж потолочного светильника</h2>
							<!-- start .container -->
							<div class="container">
								<!-- start .video-wrap -->
								<div class="video-wrap corner-square smaller">
									<iframe width="854" height="480" src="https://www.youtube.com/embed/lA40hndOB3M" frameborder="0" allowfullscreen></iframe>
								</div>
								 <!-- end .video-wrap -->
							</div>
							 <!-- end .container -->
						</div>
						 <!-- end .how-it-works -->

					</div>
					 <!-- end .slide -->
					<!-- start .slide -->
					<div class="slide">
						<!-- start .preview -->
						<div class="preview">
							<!-- start .equip-unit-slider -->
							<div class="equip-unit-slider">
								<!-- start .slide -->
								<a class="slide" href="img/slider/emaled-1.jpg"><img src="img/slider/emaled-1.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-2.jpg"><img src="img/slider/emaled-2.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-3.jpg"><img src="img/slider/emaled-3.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-4.jpg"><img src="img/slider/emaled-4.jpg" alt="" /></a>
								 <!-- end .slide -->
							</div>
							 <!-- end .equip-unit-slider -->
						</div>
						 <!-- end .preview -->
						<!-- start .equip-inf -->
						<div class="equip-inf">
							<h3>Светильники ЭМАЛЕД 2 слайд</h3>
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Описание</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Назначение</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Варианты сборки</h4>
								<ul>
									<li><span class="icon icon-ceiling"></span><span>потолочные одно-,двух-, трёх- купольные </span></li>
									<li><span class="icon icon-camera"></span><span>с видео камерой и без </span></li>
									<li><span class="icon icon-battery"></span><span>с аварийным питанием и без</span></li>
									<li><span class="icon icon-wall"></span><span>настенный или передвижной</span></li>
								</ul>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block">
								<h4>Товар в наличии</h4>
								<p>Средний срок службы светодиодов  более 60 000 часов или 2500 суток </p>
								<a href="#" class="btn">Оформить заказ</a>
							</div>
						</div>
						 <!-- end .equip-inf -->
					</div>
					 <!-- end .slide -->
					 <!-- start .slide -->
					<div class="slide">
						<!-- start .preview -->
						<div class="preview">
							<!-- start .equip-unit-slider -->
							<div class="equip-unit-slider">
								<!-- start .slide -->
								<a class="slide" href="img/slider/emaled-1.jpg"><img src="img/slider/emaled-1.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-2.jpg"><img src="img/slider/emaled-2.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-3.jpg"><img src="img/slider/emaled-3.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-4.jpg"><img src="img/slider/emaled-4.jpg" alt="" /></a>
								 <!-- end .slide -->
							</div>
							 <!-- end .equip-unit-slider -->
						</div>
						 <!-- end .preview -->
						<!-- start .equip-inf -->
						<div class="equip-inf">
							<h3>Светильники ЭМАЛЕД 3 слайд</h3>
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Описание</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Назначение</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Варианты сборки</h4>
								<ul>
									<li><span class="icon icon-ceiling"></span><span>потолочные одно-,двух-, трёх- купольные </span></li>
									<li><span class="icon icon-camera"></span><span>с видео камерой и без </span></li>
									<li><span class="icon icon-battery"></span><span>с аварийным питанием и без</span></li>
									<li><span class="icon icon-wall"></span><span>настенный или передвижной</span></li>
								</ul>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block">
								<h4>Товар в наличии</h4>
								<p>Средний срок службы светодиодов  более 60 000 часов или 2500 суток </p>
								<a href="#" class="btn">Оформить заказ</a>
							</div>
						</div>
						 <!-- end .equip-inf -->
					</div>
					 <!-- end .slide -->
					 <!-- start .slide -->
					<div class="slide">
						<!-- start .preview -->
						<div class="preview">
							<!-- start .equip-unit-slider -->
							<div class="equip-unit-slider">
								<!-- start .slide -->
								<a class="slide" href="img/slider/emaled-1.jpg"><img src="img/slider/emaled-1.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-2.jpg"><img src="img/slider/emaled-2.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-3.jpg"><img src="img/slider/emaled-3.jpg" alt="" /></a>
								<a class="slide" href="img/slider/emaled-4.jpg"><img src="img/slider/emaled-4.jpg" alt="" /></a>
								 <!-- end .slide -->
							</div>
							 <!-- end .equip-unit-slider -->
						</div>
						 <!-- end .preview -->
						<!-- start .equip-inf -->
						<div class="equip-inf">
							<h3>Светильники ЭМАЛЕД 4 слайд</h3>
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Описание</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Назначение</h4>
								<p class="deskr">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris
								</p>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block dashed-bdr">
								<h4>Варианты сборки</h4>
								<ul>
									<li><span class="icon icon-ceiling"></span><span>потолочные одно-,двух-, трёх- купольные </span></li>
									<li><span class="icon icon-camera"></span><span>с видео камерой и без </span></li>
									<li><span class="icon icon-battery"></span><span>с аварийным питанием и без</span></li>
									<li><span class="icon icon-wall"></span><span>настенный или передвижной</span></li>
								</ul>
							</div>
							 <!-- end .deskr-block -->
							<!-- start .deskr-block -->
							<div class="deskr-block">
								<h4>Товар в наличии</h4>
								<p>Средний срок службы светодиодов  более 60 000 часов или 2500 суток </p>
								<a href="#" class="btn">Оформить заказ</a>
							</div>
						</div>
						 <!-- end .equip-inf -->
					</div>
					 <!-- end .slide -->
				</div>
				 <!-- end .equip-slider -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .equipment -->
		<!-- start .how-it-works -->
		<!-- <section class="how-it-works"> -->
			<!-- <h2 class="underline">Как происходит <br /> монтаж потолочного светильника</h2> -->
			<!-- start .container -->
			<!-- <div class="container"> -->
				<!-- start .video-wrap -->
				<!-- <div class="video-wrap corner-square smaller"> -->
					<!-- <iframe width="854" height="480" src="https://www.youtube.com/embed/lA40hndOB3M" frameborder="0" allowfullscreen></iframe> -->
				<!-- </div> -->
				 <!-- end .video-wrap -->
			<!-- </div> -->
			 <!-- end .container -->
		<!-- </section> -->
		 <!-- end .how-it-works -->
		<!-- start .catalog-form -->
		<section class="get-catalog">
			<!-- start .container -->
			<div class="container">
				<!-- start .col-lg-6 -->
				<div class="col-lg-6 col-catalog">
					<div class="wrap-catalog"><img src="img/catalog.png" alt="Каталог" /></div>
				</div>
				 <!-- end .col-lg-6 -->
				 <!-- start .col-lg-5 -->
				 <div class="col-lg-5">
					<form action="" class="get-catalog-form">
						<h3>Скачайте полный каталог
хирургического оборудования:</h3>
						<div class="group-input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" placeholder="Имя" name="name" required/>
						</div>
						<div class="group-input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input type="text" placeholder="Телефон" name="phone" class="phone" required/>
						</div>
						<div class="group-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" placeholder="E-mail" name="email" required/>
						</div>
						<button class="btn" type="submit">Получить полный каталог</button>
						<p>Ваши данные конфиденциальны</p>
						<?php echo $hidden_inpunt; ?>
					</form>
				 </div>
				  <!-- end .col-lg-5 -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .catalog-form -->
		<!-- start .example-works -->
		<section class="example-works">
			<!-- start .container -->
			<div class="container">
				<!-- start .col-lg-6 -->
				<div class="col-lg-6">
					<!-- start .underline -->
					<h2 class="underline">Для кого мы работаем?</h2>
					 <!-- end .underline -->
					 <!-- start .list-clients -->
					 <ul class="list-clients">
					 	<li>Государственные медицинские учреждения </li>
					 	<li>Бюджетные лечебно-профилактические учреждения
(больницы, поликлиники), </li>
					 	<li>Центральные районные медицинские центры, </li>
					 	<li>НИИ федерального подчинения медицинской направленности (институт кардиологии, институт туберкулеза,
</li>
					 	<li>Институт онкологии, </li>
					 	<li>Институт хирургии) родильные дома, женские
консультации</li>
					 </ul>
					  <!-- end .list-clients -->
				</div>
				 <!-- end .col-lg-6 -->
				<!-- start .col-lg-6 -->
				<div class="col-lg-6">
					<!-- start .works-slider -->
					<div class="works-slider slider">
						<a href="img/example-works/example-1.jpg"><img src="img/example-works/example-1.jpg" alt="Государственные медицинские учреждения" /></a>
						<a href="img/example-works/example-1.jpg"><img src="img/example-works/example-1.jpg" alt="Государственные медицинские учреждения" /></a>
						<a href="img/example-works/example-1.jpg"><img src="img/example-works/example-1.jpg" alt="Государственные медицинские учреждения" /></a>
						<a href="img/example-works/example-1.jpg"><img src="img/example-works/example-1.jpg" alt="Государственные медицинские учреждения" /></a>
					</div>
					 <!-- end .works-slider -->
				</div>
				 <!-- end .col-lg-6 -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .example-works -->

		<!-- start .reviews -->
		<section class="reviews">
			<!-- start .container -->
			<div class="container">
				<h2 class="underline">Отзывы наших клиентов</h2>
				<blockquote>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				Короче, пользуйтесь услугами ЭЛТЕМ <br />и больше не тратьте время и деньги на поиск!</blockquote>
				<!-- start .row -->
				<div class="row">
					<!-- start .col-lg-6 -->
					<div class="col-lg-6">
						<!-- start .video-wrap -->
						<div class="video-wrap corner-square smaller">
							<iframe width="854" height="480" src="https://www.youtube.com/embed/lA40hndOB3M" frameborder="0" allowfullscreen></iframe>
						</div>
						<ul>
							<li><strong>Ситуация</strong><span>Lorem ipsum dolor sit amet, consectetur</span></li>
							<li><strong>Решение</strong><span>adipisicing elit, sed do eiusmod tempor</span></li>
							<li><strong>Результат</strong><span>incididunt ut labore et</span></li>
						</ul>
						 <!-- end .video-wrap -->
					</div>
					 <!-- end .col-lg-6 -->
					<!-- start .col-lg-6 -->
					<div class="col-lg-6">
						<!-- start .video-wrap -->
						<div class="video-wrap corner-square smaller">
							<iframe width="854" height="480" src="https://www.youtube.com/embed/lA40hndOB3M" frameborder="0" allowfullscreen></iframe>
						</div>
						<ul>
							<li><strong>Ситуация</strong><span>Lorem ipsum dolor sit amet, consectetur</span></li>
							<li><strong>Решение</strong><span>adipisicing elit, sed do eiusmod tempor</span></li>
							<li><strong>Результат</strong><span>incididunt ut labore et</span></li>
						</ul>
						 <!-- end .video-wrap -->
					</div>
					 <!-- end .col-lg-6 -->
				</div>
				 <!-- end .row -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .reviews -->
		<!-- start .services -->
		<section class="services">
			<!-- start .container -->
			<div class="container">
				<!-- start .underline -->
				<h2 class="underline">Оснащаем от одного кабинета <br />
до медицинского центра</h2>
				 <!-- end .underline -->
				 <p>Как говорится, не бывает моноболезней - если что-то болит, это влияет на всю систему организма в целом. 
<br />Поэтому в поставке оборудования для лечебных учреждений мы используем комплексный <br />
подход ко всем направлениям.</p>
				<!-- start .services-items -->
				<div class="services-items">
					<!-- start .service-item -->
					<div class="service-item">
						<!-- start .square-wrap -->
						<div class="square-wrap">
							<div class="square">
								<span class="icon icon-obstetrics"></span>
							</div>
						</div>
						 <!-- end .square-wrap-->
						<h5>Акушерство</h5>
					</div>
					 <!-- end .service-item -->
					 <!-- start .service-item -->
					<div class="service-item">
						<!-- start .square-wrap -->
						<div class="square-wrap">
							<div class="square">
								<!-- <span class="icon icon-obstetrics"></span> -->
							</div>
						</div>
						 <!-- end .square-wrap-->
						<h5>Стерилизация и дезинфекция</h5>
					</div>
					 <!-- end .service-item -->
					 <!-- start .service-item -->
					<div class="service-item">
						<!-- start .square-wrap -->
						<div class="square-wrap">
							<div class="square">
								<span class="icon icon-anesthesia"></span>
							</div>
						</div>
						 <!-- end .square-wrap-->
						<h5>Анестизиология и реанимация</h5>
					</div>
					 <!-- end .service-item -->
					 <!-- start .service-item -->
					<div class="service-item">
						<!-- start .square-wrap -->
						<div class="square-wrap">
							<div class="square">
								<span class="icon icon-xray"></span>
							</div>
						</div>
						 <!-- end .square-wrap-->
						<h5>Рентгенология и томография</h5>
					</div>
					 <!-- end .service-item -->
				</div>
				 <!-- end .services-items -->
				<a href="#" class="btn bordered">Показать все наши направления</a>
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .services -->

		<!-- start .call-me -->
		<section class="call-me">
			<div class="container">
			<!-- start .col-lg-6 -->
			<div class="col-lg-6 text-left">
				<!-- start .underline -->
				<h2 class="underline">Не нашли, что искали?</h2>
				 <!-- end .underline -->
				<!-- start .with-bg -->
				<p class="with-bg">Налейте сабе чай-кофе, пока мы бесплатно
подберем лучшее оборудование <br />
по соотношению цены/качества <br />
под Вашу задачу! </p>
				 <!-- end .with-bg -->
				 <h2>Мы в этом профи!</h2>
			</div>
			 <!-- end .col-lg-6 -->
			 <!-- start .col-lg-6 align-right -->
			 <div class="col-lg-6 text-right">
			 	<form action="" class="get-catalog-form">
					<p>Позвоните по телефону</p>
					<!-- start .phone -->
					<p class="phone">+7 (383) 123-56-89</p>
					 <!-- end .phone -->
					 <p>или оставьте заявку <br />
<span class="upper">И МЫ ВАМ СРАЗУ  ПЕРЕЗВОНИМ</span></p>

					<div class="group-input">
						<!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
						<input type="text" placeholder="Введите свой номер телефона" name="phone" class="phone" required/>
					</div>
					<button class="btn" type="submit">Перезвоните мне</button>
					<?php echo $hidden_inpunt; ?>
				</form>
			 </div>
			  <!-- end .col-lg-6 align-right -->
			</div>
		</section>
		 <!-- end .call-me -->
		<!-- start .steps -->
		<section class="steps">
			<!-- start .underline -->
			<h2 class="underline">Как происходит работа?</h2>
			 <!-- end .underline -->
			<div class="steps-wrap">
				<!-- start .container -->
				<div class="container">
					<!-- start .col-lg-6 -->
					<div class="col-lg-6">
						<!-- start .step -->
						<div class="step">
							<span class="step-number">01</span>
							<!-- start .step-inf -->
							<p class="step-inf"> <strong>Оставляете заявку,</strong> <br />
	или пишете на нашу почту, или <br />
	перезваниваете сами </p>
							 <!-- end .step-inf -->
						</div>
						 <!-- end .step -->
						 <!-- start .step -->
						<div class="step">
							<span class="step-number">02</span>
							<!-- start .step-inf -->
							<p class="step-inf"> <strong>Оставляете заявку,</strong> <br />
	или пишете на нашу почту, или <br />
	перезваниваете сами </p>
							 <!-- end .step-inf -->
						</div>
						 <!-- end .step -->
						 <!-- start .step -->
						<div class="step">
							<span class="step-number">03</span>
							<!-- start .step-inf -->
							<p class="step-inf"> <strong>Оставляете заявку,</strong> <br />
	или пишете на нашу почту, или <br />
	перезваниваете сами </p>
							 <!-- end .step-inf -->
						</div>
						 <!-- end .step -->
						 <!-- start .step -->
						<div class="step">
							<span class="step-number">04</span>
							<!-- start .step-inf -->
							<p class="step-inf"> <strong>Оставляете заявку,</strong> <br />
	или пишете на нашу почту, или <br />
	перезваниваете сами </p>
							 <!-- end .step-inf -->
						</div>
						 <!-- end .step -->
					</div>
					 <!-- end .col-lg-6 -->
				 </div>
				 <!-- end .container -->
				<div class="right-bg"></div>
			</div>
		</section>
		 <!-- end .steps -->

		<!-- start .eltem-today -->
		<section class="statistic">
			<!-- start .underline -->
			<h2 class="underline">ООО НПП "ЭЛТЕМ" СЕГОДНЯ</h2>
			 <!-- end .underline -->
			<!-- start .container -->
			<div class="container">
				<!-- start .statistic-wrap -->
				<div class="statistic-wrap">
					<!-- start .people-block -->
					<div class="left-block">
						<!-- start .peoples -->
						<div class="peoples va">
							<!-- start .wrap -->
							<div class="wrap">
								<span class="number">81</span>
								<p>Человек в штате</p>
							</div>
							 <!-- end .wrap -->
						</div>
						 <!-- end .peoples -->
					</div>
					 <!-- end .people-block -->
					<!-- start .right-block -->
					<div class="right-block">
						<!-- start .top-row -->
						<div class="top-row">
							<!-- start .years -->
							<div class="years va">
								<!-- start .wrap -->
								<div class="wrap">
									<span class="number">26</span>
									<p>Лет на ринке</p>
								</div>
								 <!-- end .wrap -->
							</div>
							 <!-- end .years -->
							 <!-- start .brands -->
							 <div class="brands">
							 	<!-- start .wrap -->
								<div class="wrap">
									<span class="number">55</span>
									<p>Брендов</p>
								</div>
								 <!-- end .wrap -->
								 <!-- start .slider-brand -->
								 <div class="slider-brand slider">
								 	<div class="slide"><img src="img/brand-1.jpg" alt="" /></div>
								 	<div class="slide"><img src="img/brand-1.jpg" alt="" /></div>
								 </div>
								  <!-- end .slider-brand -->
							 </div>
							  <!-- end .brands -->
						</div>
						 <!-- end .top-row -->
						<!-- start .bottom-row -->
						<div class="bottom-row">
							<!-- start .users -->
							<div class="users ">
								<!-- start .border-wrap -->
								<div class="border-wrap va">
									<!-- start .wrap -->
									<div class="wrap">
										<p>Врачей ползуются
											нашим
											оборудованием
											ПРЯМО СЕЙЧАС</p>
										<span class="number">2500+</span>
									</div>
									<!-- end .wrap -->
								</div>
								 <!-- end .border-wrap -->
							</div>
							 <!-- end .users -->
							<!-- start .firms -->
							<div class="firms">
								<!-- start .border-wrap -->
								<div class="border-wrap">
									<!-- start .wrap -->
									<div class="wrap">
										<span class="number">247</span>
										<p>Мед. учреждений стали нашили клиентами</p>
									</div>
									 <!-- end .wrap -->
								</div>
								 <!-- end .border-wrap -->
							</div>
							 <!-- end .firms -->
						</div>
						 <!-- end .bottom-row -->
					</div>
					 <!-- end .right-block -->
				</div>
				 <!-- end .statistic-wrap -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .eltem-today -->



		<!-- POPUP -->
		<form id="test-form" action="mail.php" class="pop-up mfp-hide white-popup-block">
			<h2>Заказать обратный звонок</h2>
			<fieldset style="border:0;">
				<ol>
					<li>
						<input id="name" name="firstname" type="text" placeholder="Имя" required="">
					</li>
					<li>
						<input id="phone" class="phone" name="mobile" type="phone" placeholder="Телефон" required="">
					</li>
					<li>
						<button type="submit" class="pulse">Жду звонка</button>
					</li>
					<li>
						<p>
							Мы гарантируем конфиденциальность
		Ваших данных
						</p>
					</li>
				</ol>
			</fieldset>
			<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером! <br><br>
		Еще мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
			<?php echo $hidden_inpunt; ?>
		</form>
		<!-- END POPUP -->

		<script defer src="//api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
		<script  src="js/scripts.min.js"></script>
		<script  src="integration_vtiger/js/watch.js"></script>
		<script  src="integration_vtiger/form.js"></script>
		<script>
		$("form").on("submit", function(evt) {
			evt.preventDefault();
			var action = $(this).attr("action");
			var $this = $(this);
			$.ajax({
				url: action,
				type: "POST",
				data: $this.serialize(),
				success: function(data) {
					if($this.hasClass("pop-up")){
						$this.addClass("answer");
						$this.find("h2").css("display", "none");
						$this.find("fieldset").css("display", "none");
						$this.find(".success").removeClass("hidden-s");
						setTimeout(function(){
							$(".mfp-close").trigger("click");
						}, 5000)
					}else{
						$this.find(".success").removeClass("hidden-s");
						setTimeout(function(){
							$this.find(".success").addClass("hidden-s");
						}, 5000)
					}
				},
				error: function() {
					console.log("err")
				},
			})
		});
		</script>
	</body>
</html>