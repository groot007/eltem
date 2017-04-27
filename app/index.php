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
		<meta name="format-detection" content="telephone=no">
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

		<? include("includes/header.php") ?>
		<? include("includes/slider-equip.php") ?>
		<? include("includes/get-catalog.php") ?>
		<? include("includes/example-works.php") ?>
		<? include("includes/reviews.php") ?>
		<? include("includes/services.php") ?>
		<? include("includes/call-me.php") ?>
		<? include("includes/steps.php") ?>
		<? include("includes/eltem-today.php") ?>
		<? include("includes/our-team.php") ?>
		<? include("includes/privilege.php") ?>
		<? include("includes/certificate.php") ?>
		<? include("includes/about-company.php") ?>
		<? include("includes/contacts-map.php") ?>
		<? include("includes/pop-ups.php") ?>


 		<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
 		<script >
 			ymaps.ready(init);
			  function init () {
			    var myMap3 = new ymaps.Map("map", {
				    center: [54.957729, 82.949606],
				    zoom:17,
				    controls: ["zoomControl"]
				  });
			  myGeo = new ymaps.GeoObject({
	            // Описание геометрии.
	            geometry: {
	                type: "Point",
	                coordinates: [54.958529, 82.946696]
	            },
	            // Свойства.
	            properties: {
	                iconCaption: 'Оловозаводская улица, 25к4',
	                clusterCaption: 'Заголовок',
	            },
	        },{
	        	// preset: 'islands#blueDotIconWithCaption',
	         iconLayout: 'default#image',
			       //  // Своё изображение иконки метки.
			        iconImageHref: '/img/icons/map-icon.png',
			       //  // Размеры метки.
			        iconImageSize: [56, 95],
			       //  // Смещение левого верхнего угла иконки относительно
			       //  // её "ножки" (точки привязки).
			        iconImageOffset: [-25, -95]
			     }
			   );
			  myMap3.geoObjects.add(myGeo);
			};
 		</script>
		<script  src="js/scripts.min.js"></script>
		<script  src="integration_vtiger/js/watch.js"></script>
		<!-- <script  src="integration_vtiger/form.js"></script> -->
		<script>
		</script>
	</body>
</html>