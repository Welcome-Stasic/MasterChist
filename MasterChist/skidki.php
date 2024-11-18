<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Скидки</title>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/unlazy.with-hashing.iife.js" defer init></script>
	<script src="js/3.4.js"></script>
	<script src="js/emailjs.js"></script>
  </head>
  <body>
	
  <?php include('patch/header.php'); ?>
    <div class="flex flex-col md:flex-row bg-yellow-50 p-8">
  <div class="flex-1 space-y-4">
    <div class="bg-black text-yellow-500 p-6 rounded-lg">
      <h2 class="text-lg font-bold">Скидка 10%</h2>
      <p>Постоянным клиентам*</p>
      <p class="text-sm">* 2 и более заказов</p>
    </div>
    <div class="bg-black text-yellow-500 p-6 rounded-lg">
      <h2 class="text-lg font-bold">Скидка 5%</h2>
      <p>Пенсионерам</p>
    </div>
    <div class="bg-black text-yellow-500 p-6 rounded-lg">
      <h2 class="text-lg font-bold">Скидка 5%</h2>
      <p>В День Рождения*</p>
      <p class="text-sm">* Акция действует за 3 дня до и за 3 дня после дня рождения при предъявлении документа</p>
    </div>
    <div class="bg-black text-yellow-500 p-6 rounded-lg">
      <h2 class="text-lg font-bold">Беспроцентная рассрочка</h2>
      <p>Получай сейчас—плати потом</p>
      <p class="text-sm">На 2 месяца!</p>
    </div>
  </div>
  <div class="container flex-1 bg-zinc-200 p-6 rounded-lg ml-8">
	<div class="header flex-1 bg-zinc-200 p-6 rounded-lg ml-8">
	</div>

	<div id="formContainer"></div>
</div>
  <template id="serviceFormTemplate">
	<form id="contact-form" class="flex-1 bg-zinc-200 p-6 rounded-lg ml-8" @submit.prevent="sendEmail">
		<h2 class="text-lg font-bold mb-4">Заполните форму</h2>
		<div class="form-group">
			<label for="name">Ваше имя:</label>
			    <input type="text" placeholder="Имя"  class="border border-zinc-400 p-2 mb-4 w-full rounded"/> 
			<span class="error" id="nameError"></span>
		</div>
		<div class="form-group">
			<label for="phone" >Номер телефона:</label>
			<input type="tel" id="phone" name="phone" required type="tel" placeholder="Ваш телефон" class="border border-zinc-400 p-2 mb-4 w-full rounded">
			<span class="error" id="phoneError"></span>
		</div>
		<div class="form-group">
			<label for="service" >Выберите услугу:</label>
			<select id="service" name="service" required class="border border-zinc-400 p-2 mb-4 w-full rounded" >
				<option value="">Выберите...</option>
				<option value="Химчистка">Химчистка</option>
				<option value="Уборка">Уборка</option>
				<option value="Мойка окон">Мойка окон</option>
				<option value="Другое">Другое</option>
			</select>
			<span class="error" id="serviceError"></span>
		</div>
		<div class="form-group">
			<label for="email">Ваш Email:</label>
			<input type="email" id="email" name="toEmail" required placeholder="Ваш Email" class="border border-zinc-400 p-2 mb-4 w-full rounded">
			<span class="error" id="emailError"></span>
		</div>
		<div class="form-group">
			<input id="submit" name="submit" type="submit" value="Отправить запрос" class="submit bg-yellow-500 text-black p-2 rounded hover:bg-yellow-400">
		</div>
	</form>
</template>
	</div>
	<footer>
<?php include('patch/footer.php'); ?>
</footer>

<!--
	<script setup>
		const sendEmail = () => {
			window.emailjs.sendForm(
				'service_xnmyjpa',
				'template_x0vtuyv',
				'#contact-form',
				'EAAGcARbYFPGkd1Mz'
			)
				.then(() => {
					alert("Сообщение успешно отправлено!");
				})
				.catch((error) => {
					console.error('Ошибка при отправке', error);
				});
		};
	</script>
  </form>
</div> -->
  </body>
</html>