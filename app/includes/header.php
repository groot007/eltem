<!-- start .top-menu -->
<div class="top-menu">
	<!-- start .container -->
	<div class="container">
		<div class="resp-mnu">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>

		<nav class="inline">
			<ul>
				<li><a href="#top" class="to-id btn-up">Наверх <i class="fa fa-angle-up" aria-hidden="true"></i></a></li>
				<li><a href="#equip" class="to-id">Оборудование</a></li>
				<li><a href="#works" class="to-id">Проекты</a></li>
				<li><a href="#certificate" class="to-id">Сертификаты</a></li>
				<li><a href="#about-company" class="to-id">О нас</a></li>
				<li><a href="#contacts" class="to-id">Контакты</a></li>
			</ul>
		</nav>
		<div class="phone-block inline">
			<a href="tel:<? echo $numberOnTopClear ; ?>" class="phone"><? echo $numberOnTop ; ?></a>
		</div>
	</div>

</div>
 <!-- end .top-menu -->
<header id="top">
			<!-- start .top-head -->
			<div class="top-head">
				<!-- start .container -->
				<div class="container">
					<!-- start .row -->
					<div class="row">
						<!-- start .col-lg-4 -->
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
							<a href="index.php" class="logo">
								<img src="<? echo $pathToImg; ?>logo.jpg" alt="Eltem" />
							</a>
							<p class="tagline">
								Медтехника от производителя с доставкой по РФ
							</p>
						</div>
						 <!-- end .col-lg-4 -->
						<!-- start .col-lg-4 -->
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-4 text-center">
							<a href="#"  data-clipboard-text="<? echo $email; ?>" class="email"><? echo $email; ?></a>
							<div class="cb-message">e-mail скопирован</div>
						</div>
						 <!-- end .col-lg-4 -->
						<!-- start .col-lg-4 -->
						<div class="col-xs-8 col-sm-6 col-md-6 col-lg-4 text-right">
							<a href="tel:<? echo $numberOnTopClear ; ?>" class="phone"><? echo $numberOnTop ; ?></a>
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
			<div class="main-part <? echo $headerBgClass; ?>">
				<!-- start .container -->
				<div class="container">
					<!-- start .col-lg-12 -->
					<div class="col-lg-12">
						<h1 class="main-title"><? echo $headerH1; ?></h1>
						<h3><? echo $headerDeskr; ?></h3>
					</div>
					 <!-- end .col-lg-12 -->
					 <!-- start .col-lg-5 -->
					 <div class="col-xs-12 col-md-5 col-lg-5 head-menu">
					 	<ul class="menu-nav">
					 		<li><a class="to-id" href="#equip"><span>Оборудование</span></a></li>
					 		<li><a class="to-id" href="#get-catalog"><span>Скачать полный каталог</span></a></li>
					 		<li><a class="to-id" href="#works"><span>Работы</span></a></li>
					 		<li><a class="to-id" href="#about-company"><span>О нас</span></a></li>
					 	</ul>
					 	<!-- start .phone-large -->
					 	<a href="tel:88005132363" class="phone-large"><? echo $bigNumber; ?></a>
					 	 <!-- end .phone-large -->
					 	 <!-- start .works-time -->
					 	 <p class="works-time">с 9:00 до 19:00 по будням (Новосибирское время)</p>
					 	  <!-- end .works-time -->
					 	<a href="#get-catalog" class="to-id btn bordered">Скачать каталог</a>
					 	<a href="#test-form" class="popup-with-form btn with-icon">
					 		<span class="icon icon-phone"></span><span>Запросить звонок</span>
					 	</a>
					 </div>
					  <!-- end .col-lg-5 -->
					  <!-- start .col-lg-7 -->
					  <div class="hidden-xs col-md-7  col-lg-7 ">
						<!-- start .notebook -->
						<div class="notebook">
							<!-- start .video -->
							<div class="video">
								<video  autoplay muted  preload="none" loop>
									<source src="<? echo $pathToVideo; ?>/emaled.mp4"/>
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