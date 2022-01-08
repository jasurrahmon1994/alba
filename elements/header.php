<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/libs/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/libs/LIGHTGALLERY/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/styles/navfooter.css">


    <title><?php echo $title ?></title>
</head>

<body>

    <header>
        <nav class="navigation">
            <a href="/" class="logo">
                <img src="/assets/icons/logo-header.svg" alt="logo-alba">
            </a>
            <ul class="nav-links">
                <li class="nav-link">
                    <a href="/" <?php if($page == 'index') echo 'class=active' ?>>Главная</a>
                </li>
                <li class="nav-link">
                    <a href="/about.php" <?php if($page == 'about') echo 'class=active' ?> >О компании</a>
                </li>
                <li class="nav-link">
                    <a href="/portfolio.php" <?php if($page == 'portfolio') echo 'class=active' ?> >Портфолио</a>
                </li>
                <li class="nav-link">
                    <a href="/request.php" <?php if($page == 'request') echo 'class=active' ?> >Оставить заявку</a>
                </li>
                <li class="nav-link">
                    <a href="#!">
                        <img src="/assets/icons/phone-yellow.svg" alt="">
                        +998909806009
                    </a>
                </li>
            </ul>
            <div class="mobile-btns">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </nav>
    </header>