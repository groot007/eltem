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
		<link rel="stylesheet" href="libs/jquery-ui-1.9.2.custom/css/jquery-ui-1.9.2.custom.min.css">
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
			<h1>HELLL33</h1>
		</header>

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