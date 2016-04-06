<?php
require_once ('src/Header.php');
?>
<!-- Treść -->
<div class="container" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
	 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<div id="kon_text">
		<h1>Masz pytania? Zadzwoń lub napisz!</h1>
		<p><span class="c_h_1">tel.:</span> +48 696 XXX XXX</p>
		<p class="kont_p">Czekam na twój telefon w godzinach od 10:00 do 17:00.</p>
		<p><span class="c_h_1">e-mail:</span> <a href="mailto:regina.anam@gmail.com" class="mail">Regina.Anam@gmail.com</a></p>
		<p class="kont_p">Odpowiedź otrzymasz w ciągu 1 dnia roboczego.</p>

		<legend>Wypełnij formularz</legend>
		<?php
		require_once ('src/ContactForm.php');
		?>
		<form method="post" role="form" >
			<ul class="form-style-1">
				<li><label>E-mail:<span class="required">*</span></label>
					<input type="email" name="mail" class="field-long" placeholder="Podaj swój e-mail" required></li>
				<li><label>Tytuł:<span class="required">*</span></label>
					<input type="text" name="title" class="field-long" placeholder="Podaj tytuł wiadomości" required></li>
				<li><label>Twoja wiadomość:<span class="required">*</span></label>
					<textarea name="message" class="field-long field-textarea" wrap="virtual" placeholder="Treść wiadomości" required></textarea></li>
				<li><input type="submit" name="send" value="Wyślij wiadomość"></li>
			</ul>
		</form>
    </div>
</div>
<?php
require_once ('src/Footer.php');
?>