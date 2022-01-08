<?php
$page = "about";
$title = "Alba";
$relocateru = "/";
$relocateuz = "/uz";
$relocateen = "/en";

include "elements/header.php"; ?>

<main>
    <section class="about-intro">
        <div class="bg-image">
            <img src="/assets/img/about-intro.png" alt="">
        </div>
        <div class="title">
            <h1>Информация о нас</h1>
            <p>ALBA в переводе с Итальянского означает рассвет! Почему рассвет? С рассвета мы начинаем новый день! И это шанс сделать что ни будь великое!</p>
        </div>
    </section>
    <section class="about-comp">
        <div class="title">
            <h2>Процесс работы</h2>
            <span class="line"></span>
        </div>
        <div class="comp-info">
            <div class="text">
                <h4>Чем мы занимаемся?</h4>
                <p>Мы, рекламно-производственная компания Алба, можем предложить вам целый спектр рекламных услуг —от разработки дизайна до полного воплощения самых смелых идей! Наша компания работает на рынке Узбекистана с 1998 года, а с 2020 года мы сотрудничаем соседними странами. Собственное производство и передовые технологии позволяют нам реализовать смелые проекты без дополнительных наценок.</p>
                <h4>Как мы работаем?</h4>
                <p>
                    На старте мы создадим бесплатный дизайн-макет заказа, технолог поможет разобраться с техническими характеристиками и быстро рассчитает стоимость заказа, а бригада монтажников профессионально выполнит установку. Мы накопили огромный опыт в сборке рекламных вывесок и уверены в качестве нашей продукции.
                </p>
                <h4>С кем сотрудничали?</h4>
                <p>За это время наша компания завоевала огромное доверие многочисленных клиентов, среди которых OOO “Agromir”(TM Meva, TMBliss, TM Marinelle), OOO “MarvinBrands”(TM Dena), СП ОАО “Roison Electronics”, OOO “International Beverages Tashkent”(TM Pepsi), ОАО «Ташэлектроаппарат», OOO “Diyor Biznes”(TM Molochka-uz), OOO “Novofarma Plyus”, ООО “Avitech”, “Musaffo”, “MoneyGram”и др.</p>
            </div>
            <div class="img">
                <img src="/assets/img/about-side.png" alt="">
            </div>
        </div>
    </section>
    <section class="about-codes">
        <div class="contact-info">
            <h3>Наши реквизиты</h3>
            <div class="table">
                <div class="cell">Полное наименование фирмы</div>
                <div class="cell">ООО "Саладин"</div>
                <div class="cell">Юридический адрес</div>
                <div class="cell">г. Ташкент, Мирабадский район, ул. Сайхун 166.</div>
                <div class="cell">МФО</div>
                <div class="cell">01101</div>
                <div class="cell">СТИР</div>
                <div class="cell">305474110</div>
                <div class="cell">ОКОНХ</div>
                <div class="cell">84300</div>
                <div class="cell">Телефон</div>
                <div class="cell">(90)980-60-09</div>
                <div class="cell">Сайт</div>
                <div class="cell">www.alba.uz</div>
                <div class="cell">E-mail</div>
                <div class="cell">alba@alba.uz</div>
            </div>
        </div>
        <div class="payment-info">
            <h3>Наши реквизиты</h3>
            <div class="table">
                <div class="cell">Расчетный счет</div>
                <div class="cell">20208000100870999001</div>
                <div class="cell">Банк</div>
                <div class="cell">АИКБ «Ипак Йули»</div>
            </div>
            <a href="/rekvizit.pdf" target="_blank" class="download">
                <div class="btn-default">Скачать реквизиты</div>
            </a>
            <div class="socials">
                <a href="#!"><img src="/assets/icons/facebook.svg" alt=""></a>
                <a href="http://t.me/alba_advertise"><img src="/assets/icons/telegram.svg" alt=""></a>
                <a href="https://www.instagram.com/alba.uz/"><img src="/assets/icons/instagram.svg" alt=""></a>
            </div>
        </div>
    </section>
    <section class="numbers">
        <div class="wrapper">
            <div class="number">
                <img src="/assets/img/number-1.png" alt="">
                <div class="spans">
                    <span>27</span>
                    <span>+</span>
                </div>
                <p>Профессиональных сотрудников </p>
            </div>
            <div class="number">
                <img src="/assets/img/number-2.png" alt="">
                <div class="spans">
                    <span>13</span>
                    <span>+</span>
                </div>
                <p>Объектов современного оборудования </p>
            </div>
            <div class="number">
                <img src="/assets/img/number-3.png" alt="">
                <div class="spans">
                    <span>20</span>
                    <span>+</span>
                </div>
                <p>Лет на рынки наружной рекламы </p>
            </div>
            <div class="number">
                <img src="/assets/img/number-4.png" alt="">
                <div class="spans">
                    <span>1003</span>
                    <span>+</span>
                </div>
                <p>Довольных клиентов </p>
            </div>

        </div>
    </section>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.124122420435!2d69.29826131589512!3d41.284403010335176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef5459d51a7f1%3A0x7e7c52637832e805!2z0YPQuy4g0KHQsNC50YXRg9C9!5e0!3m2!1sru!2s!4v1641386190632!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>

<?php include "elements/footer.php"; ?>