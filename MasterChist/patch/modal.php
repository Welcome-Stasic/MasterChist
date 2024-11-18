<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modal.css">
<div class="modal" id="modal">
</head>
<body>
        <div class="modal-content">
            <span class="close" id="close">&times;</span>
            <h2>Оставить заявку</h2>
            <form id="form">
                <input class='modal-input' type="text" id="name" placeholder="Имя">
                <input class='modal-input' list='services' id="service" placeholder="Услуга">
                <datalist id='services'>
                    <option value='Химчистка'>
                    <option value='Уборка'>
                    <option value='Мойка окон'>
                </datalist>
                <input class='modal-input' type="tel" id="phone" placeholder="Номер телефона">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
</body>
</html>