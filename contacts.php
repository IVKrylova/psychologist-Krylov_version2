			<div class="contacts" id="contacts">
				<h2 class="left">КОНТАКТЫ</h2>
				<div class="allContacts">
					<p class="contactsOne">
						<a href=tel:+79101031599><i class="fa fa-mobile" aria-hidden="true"></i></a>
						<a href=tel:+79101031599> 8 (910) 103-15-99</a>
					</p>
					<p class="contactsTwo">
						<a href="mailto:basni_krylova@bk.ru"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
						<a href="mailto:basni_krylova@bk.ru"> basni_krylova@bk.ru</a>
					</p>
					<p class="contactsThree">
						<a href="https://join.skype.com/invite/h70XDqDThlth" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
						<a href="https://join.skype.com/invite/h70XDqDThlth" target="_blank"> basni_krylova</a>
					</p>
					<p class="contactsFour">
						<a href="https://www.instagram.com/krylov_alni/?igshid=ffm4pjtbjhtw" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="https://www.instagram.com/krylov_alni/?igshid=ffm4pjtbjhtw" target="_blank"> @krylov_alni</a>
					</p>
					<p class="contactsFive">
						<a href="https://www.tiktok.com/@psy_krylov" target="_blank"><i class="fab fa-tiktok"></i></a>
						<a href="https://www.tiktok.com/@psy_krylov" target="_blank"> @psy_krylov</a>
					</p>
				</div>
			</div>

			<div class="forma">
				<p class="titleForma">Записаться на консультацию или задать вопрос</p>
				<form class="bodyForm bodyFormContacts mediaBodyForm" name="form" method="post" id="formaContacts">
					<input type="text" name="name" required placeholder="Ваше имя">
					<input type="text" name="phone" id="phoneContacts" required placeholder="Ваш телефон">
					<textarea type="text" name="message"  required placeholder="Ваше сообщение"></textarea>
					<p><input class="checkPrivacy" type="checkbox" name="checkboxPrivacy" id="checkContacts">Отправляя сообщение, я даю согласие на обработку своих персональных данных и подтверждаю, что ознакомлен(а) с <a class="check" href="privacy.php">Политикой  конфиденциальности</a></p>
					<input type="hidden" name="bot" value="">
					<?php include 'recaptcha.php'; ?>
					<input class="buttonForm" type="submit" name="submit" value="Отправить">
				</form>
			</div>
		</div>