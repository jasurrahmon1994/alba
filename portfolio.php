<?php
$page = "portfolio";
$title = "Alba";
$relocateru = "/";
$relocateuz = "/uz";
$relocateen = "/en";

include "elements/header.php"; ?>

<main>
    <section class="portfolio-intro">
        <div class="bg-image">
            <img src="/assets/img/portfolio-intro.png" alt="">
        </div>
        <h1>Наше портфолио</h1>
    </section>
    <section class="portfolio-works">
        <div class="title">
            <h2>Что мы умеем</h2>
            <p>
                Наша компания оборудована современными технологиями что
                позволяет нам выполнять проекты любой сложности
            </p>
            <span class="line"></span>
        </div>
        <div class="wrapper">
            <div class="item">
                <img src="/assets/img/portfolio-1.png" alt="">
                <div class="yellow"></div>
                <p>Вывески</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-2.png" alt="">
                <div class="yellow"></div>
                <p>Лайтбоксы</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-3.png" alt="">
                <div class="yellow"></div>
                <p>Вывески из нержавеющей стали</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-4.png" alt="">
                <div class="yellow"></div>
                <p>Плакаты и афиши</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-5.png" alt="">
                <div class="yellow"></div>
                <p>Объемные буквы </p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-6.png" alt="">
                <div class="yellow"></div>
                <p>Рекламные стелы</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-7.png" alt="">
                <div class="yellow"></div>
                <p>Рекламные щиты (билборды)</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-8.png" alt="">
                <div class="yellow"></div>
                <p>Реклама на транспорте</p>
            </div>
            <div class="item">
                <img src="/assets/img/portfolio-9.png" alt="">
                <div class="yellow"></div>
                <p>Штендеры и стеллажи</p>
            </div>
        </div>
        <div class="btn-default">загрузить еще</div>
    </section>
    <section class="connection">
        <form action="/assets/libs/telegram_form/mcsend.php" method="POST">
            <div class="title">
                <h2>Хотите узнать наши цены?</h2>
                <p>Оставьте заявку на сайте или позвоните нам. Мы свяжемся с Вами в ближайшее время!</p>
                <span class="line"></span>
            </div>
            <div class="inputs">
                <input type="text" name="user_name" placeholder="Введите имя" required>
                <input type="text" class="phonenumber" name="user_phone" placeholder="Введите номер" required>
                <select name="service_type" required>
                    <option value="0">Выберите вид услуги</option>
                    <option value="Выберите">Выберите</option>
                    <option value="Выберите">Выберите</option>
                    <option value="Выберите">Выберите</option>
                    <option value="Выберите">Выберите</option>
                </select>
            </div>
            <button class="btn-default" type="submit">Оставить заявку</button>
        </form>
    </section>
</main>

<?php include "elements/footer.php"; ?>