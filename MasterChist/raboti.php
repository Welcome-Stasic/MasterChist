<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>До/После</title>
    <link rel="stylesheet" href="css/uslugi.css">
    <script src="js/3.4.js"></script>
    <script src="js/unlazy.with-hashing.iife.js" defer init></script>
</head>
<body>
<?php include('patch/header.php'); ?>
    <div class="bg-yellow-50 p-8">
        <h1 class="text-4xl font-bold mb-4">Результат работ —</h1>
        <p class="text-lg text-muted-foreground mb-8">главный показатель
            качества</p>
        <div class="flex justify-between">
            <div class="flex flex-col items-center">
                <img src="assets/допосле/Подоконник.png"
                    alt="Before image of cabinet"
                    class="w-full rounded-lg shadow-lg mb-4" />
                <span class="text-zinc-700">Назад</span>
            </div>
            <div class="flex flex-col items-center">
                <img src="assets/допосле/Стелаж.png"
                
                    alt="After image of cabinet"
                    class="w-full rounded-lg shadow-lg mb-4" />
                <span class="text-zinc-700">Далее</span>
            </div>
        </div>
    </div>
    <?php include('patch/footer.php'); ?>
</body>
</html>