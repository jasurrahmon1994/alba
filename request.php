<?php
$page = "request";
$title = "Alba";
$relocateru = "/";
$relocateuz = "/uz";
$relocateen = "/en";

include "elements/header.php"; ?>

<main>
    <section class="request">
        <div class="bg-image">
            <img src="/assets/img/contact-intro.png" alt="">
        </div>
        <div class="wrapper">
            <div class="title">
                <h2>Закажите обратный звонок, оставте заявку, вы вам позвоним</h2>
                <span class="line"></span>
            </div>
            <form action="/assets/libs/telegram_form/mcsend.php" method="POST">
                <input type="text" name="user_name" placeholder="Имя" required>
                <input type="text" class="phonenumber" name="user_phone" placeholder="Номер" required>
                <textarea name="user_text" cols="30" rows="10" placeholder="Напишите что нибуд..."></textarea>
                <button type="submit" class="btn-default">Отправить</button>
            </form>
            <div class="socials">
                <a href="#!"><img src="/assets/icons/facebook.svg" alt=""></a>
                <a href="http://t.me/alba_advertise"><img src="/assets/icons/telegram.svg" alt=""></a>
                <a href="https://www.instagram.com/alba.uz/"><img src="/assets/icons/instagram.svg" alt=""></a>
            </div>
        </div>
    </section>
</main>

<?php include "elements/footer.php"; ?>