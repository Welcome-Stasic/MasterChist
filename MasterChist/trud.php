<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Трудоустроиство</title>
    <script src="js/3.4.js"></script>
    <script src="js/unlazy.with-hashing.iife.js" defer init></script>
</head>
<body>
<?php include('patch/header.php'); ?>
    <div class="flex flex-col items-center justify-start h-screen bg-yellow-50 p-8">
        <h1 class="text-4xl font-bold text-black font-ArialVariable-sans-serif">Свободные вакансии</h1>
        <div class="mt-4 flex items-center justify-center">
          <p class="text-lg text-zinc-800 text-center">Свободных вакансий пока нет</p>
          <img aria-hidden="true" alt="search-icon" src="https://openui.fly.dev/openui/24x24.svg?text=🔍" class="inline-block ml-2" />
        </div>
      </div>
      <template>
        <form ref="form" @submit.prevent="sendEmail">
          <label>Name</label>
          <input type="text" name="user_name">
          <label>Email</label>
          <input type="email" name="user_email">
          <label>Message</label>
          <textarea name="message"></textarea>
          <input type="submit" value="Send">
        </form>
      </template>
      
      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
      <script src="js/emailjs.js"></script>

      <?php include('patch/footer.php'); ?>
</body>
</html>