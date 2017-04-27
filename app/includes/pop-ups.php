<!-- POPUP -->
		<form id="test-form" action="mail.php" class="pop-up mfp-hide white-popup-block">
			<h2>Заказать звонок</h2>
			<fieldset style="border:0;">
				<ol>
					<li>
						<input id="name" name="firstname" type="text" placeholder="Имя"="">
					</li>
					<li>
						<input id="phone" class="phone" name="mobile" required type="phone" placeholder="Телефон">
					</li>
					<li>
						<button type="submit" class="pulse">Отправить</button>
					</li>
					<li>
						<p>
							Ваши данные конфиденциальны

						</p>
					</li>
				</ol>
			</fieldset>
			<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером! <br><br>
		Еще мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
			<?php echo $hidden_inpunt; ?>
		</form>
		<!-- END POPUP -->


		<!-- POPUP  FOR EQUIP-->
		<!-- start .equip-popup -->
		<div class="equip-popup">

		</div>
		 <!-- end .equip-popup -->
		<form id="equip-popup" class="equip-form-popup pop-up mfp-hide white-popup-block">
			<!-- start .left-part -->
			<div class="left-part">
				<!-- start .wrap-equip -->
				<div class="wrap-equip">
					<h3>LED</h3>
					<!-- start .wrap-img -->
					<div class="wrap-img">
						<img src="img/slider/emaled-3.jpg" alt="" />
					</div>
					 <!-- end .wrap-img -->
				</div>
				 <!-- end .wrap-equip -->
			</div>
			 <!-- end .left-part -->
			 <!-- start .right-part -->
			 <div class="right-part">
			 	<!-- start .form-part -->
			 	<div class="form-part">
			 		<h3>Скачайте полный каталог
хирургического оборудования:</h3>
						<div class="group-input">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" placeholder="Имя" name="firstname"/>
						</div>
						<div class="group-input">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input type="text" placeholder="Телефон" name="mobile" required class="phone"/>
						</div>
						<div class="group-input">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="text" placeholder="E-mail" name="email"/>
						</div>
						<button class="btn" type="submit">Получить полный каталог</button>
						<p>Ваши данные конфиденциальны</p>
						<p class="success hidden-s">Спасибо! Уже соединяем c Вашим персональным менеджером! <br><br>
		Еще мы делаем все, что касается оформления рекламно-информационного изображения на любых поверхностях.</p>
						<?php echo $hidden_inpunt; ?>
			 	</div>
			 	 <!-- end .form-part -->

			 </div>
			  <!-- end .right-part -->

		</form>
		<!-- END POPUP -->