<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterChist</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <script src="js/3.4.js"></script>
    <script src="js/unlazy.with-hashing.iife.js" defer init></script>
</head>
<body>
<?php include('patch/header.php'); ?>
<?php include('patch/modal.php'); ?>
    <section class="main">
        <object class="oval">
        </object>
        <img class="logo--head" src="assets/masterchist-fotor-bg-remover-2024071361140.png" alt="лого">
        <div class="head--text">
            <p class="head--title">ООО "МастерЧист"</p>
            <p class="head--subtitle">Клининговая компания</p>
        </div>
        <div class="section--dark">
            <div class="dark1">
                <p class="dark1--opit">С 2014 года</p>
                <p class="dark1--opit-opit">Опыт</p>
            </div>
            <div class="dark2">
                <p class="dark2--opit">>50тыс.</p>
                <p class="dark2--opit-opit">Довольных клиентов</p>
            </div>
        </div>
        <div class="dark3">
            <p class="dark3--opit">1180+</p>
            <p class="dark3--opit-opit">Уборок в год</p>
        </div>
        <div class="dark4">
            <p class="dark4--opit"> 0%</p>
            <p class="dark4--opit-opit">Рассрочка</p>
        </div>
        <button @click="OpenModal" class="buttom--effect">Оставить
            заявку<button>
    </section>
    <!--
    <div class="modal" v-if="modalOpened">
        <div @ckick="closeModal" class="modal-background">
        </div>
        <div class="modal-content">Content</div>
    </div> 
    -->
    <script src="js/modal.js">
    </script>
    <section class="onas">
        <h class="section_onas--title">О нас</h>
        <div class="info--onas">
            <p class="info--onas-one">Представляем вам нашу клининговую
                компанию, где чистота и профессионализм на первом уровне!<br> Мы
                не
                просто убираем, мы преображаем ваши пространства, делая их
                сияющими и уютными.<br> Наши специалисты используют только
                профессиональное оборудование и средства ведущих брендов.<br>
                .Большой опыт, работаем с 2014 г., чистим качественно, тщательно
                на результат!<br> Работаем официально, документы оформляем, чеки
                выдаём</p>
            <p class="info--onas-two">Помимо частных заказов мы оказывем услуги
                крупным объектам: киноцентрам,<br> офисным помещениям, складам и
                так
                далее...</p>
            <p class="info--onas-three">У нас отличный сервис и ответственный
                подход, работаем без выходных с 6:00 до 20:00 по МСК<br> (при
                договорённости возможны выезды в любое (и ночное) время).<br>
                Доверьтесь нам, и мы превратим рутинную уборку в настоящее
                искусство. С нами - всегда чисто,<br> всегда комфортно!</p>
        </div>
        <object class="oval-two">
        </object>
        <div class="head--text">
            <img class="logo--onas" src="assets/masterchist-fotor-bg-remover-2024071361140.png" alt="лого">
            <h class="section_onas--goroda">Наши города</h>
            <ul class="ul-onas">
                <li class="li-onas">Чайковский</li>
                <li class="li-onas">Воткинск</li>
                <li class="li-onas">Шаркан</li>
                <li class="li-onas">Ижевск</li>
                <li class="li-onas">Близлежащие населённые пункты</li>
            </ul>
    </section>
    <section class="form">
        <img class="shvabra" src="assets/100024915365b4.png" alt="Швабра">
        <div class="section__lable-lable">
            <input class="lable-section" placeholder="Имя"></input>
            <label for='input_element'></label>
            <input list='options' class='lable-section' name='input_name' placeholder="Интересующая услуга">
            <datalist id='options'>
                <option value='Химчистка'>
                <option value='Уборка'>
                <option value='Мойка окон'>
            </datalist>
            <label>
                <input class="lable-section" placeholder="Ваш телефон"></input>
            </label>
            <button class="button--Lable">Отправить</button>
        </div>
    </section>
    <?php include('patch/footer.php'); ?>
</body>

</html>