<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sweet Life</title>
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <?php echo $__env->yieldContent('css'); ?>
	<link rel="stylesheet" href="../resources/css/bootstrap-grid.css">
	<link rel="shortcut icon" href="img/cupcake3.png" type="image/png">



</head>
<body>
    <header id="header" class="header">
    <div class="container">
        <div class="logomenu">
            <div class="LG">
                <a href="?page=main"><img src="img/Logotype1.svg" alt="LogoSL" class="logo"></a>
            </div>
            <ul class="menu">
                <li>
                    <a href="?page=main">Головна</a>
                </li>
                <li>
                    <a href="?page=menu">Меню</a>
                </li>
                <li>
                    <a href="?page=degustation">Дегустація</a>
                </li>
                <li>
                    <a href="?page=delivery">Доставка та оплата</a>
                </li>
                <li>
                    <a href="#"><img src="img/shopping-cart.svg" alt="Backet" class="shop" style="margin: 2% 0px 0px;"></a>
                </li>

            </ul>

            <div class="shopSec">
                <img src="img/shopping-cartSmall.svg" alt="LogoSL" class="logoS">
            </div>
            <div class="logoSec">
                <img src="img/LogotypeSmall.svg" alt="LogoSL" class="logoS">
            </div>
            <button class="menuGam">
                <img src="img/menuSmall.svg" alt="menuSm" class="menuS">

            </button>


        </div>
    </div>
</header>
    <?php echo $__env->yieldContent('page-content'); ?>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="foots">
                <div class="logo">
                    <a href="?page=main"><img src="img/Logotype1.svg" alt="LogoSL" class="logo"></a>
                </div>
                <div class="footsMain">
                    <div class="footText">
                        <h4>Навігація</h4>
                        <p><a href="?page=main">Головна</a></p>
                        <p><a href="?page=menu">Меню</a></p>
                        <p><a href="?page=degustation">Дегустація</a></p>
                        <p><a href="?page=delivery">Доставка та оплата</a></p>
                    </div>
                    <div class="contacts">
                        <h4>Наші контакти</h4>
                        <div class="cont">
                            <img src="img/phone-call.svg" alt="phoneF" class="fimg" style="padding-right: 12px">
                            <p><a href="tel:+380681234567">+380 681 234 567</a></p>
                        </div>
                        <div class="cont">
                            <img src="img/envelope.svg" alt="phoneF" class="fimg" style="padding-right: 12px">
                            <p><a href="mailto:sweetlife@gmail.com">sweetlife@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="footText" style="margin-bottom: 0px;">
                        <h4>Адреса</h4>
                        <p>Україна, м. Київ</p>
                        <p>вул. Київська, 123</p>
                        <p>03036</p>
                    </div>
                </div>
                <div class="footLow">
                    <div class="cont">
                        <img src="img/copyright.svg" alt="phoneF" class="fimg" style="padding-right: 12px">
                        <p>2021. Всі права захищені</p>
                    </div>
                    <div class="social">
                        <a href="https://www.instagram.com/"><img src="img/instagram.svg" alt="LogoSL" style="padding-right: 30px;"></a>
                        <a href="https://t.me/@tilivizr_iz_brigadi"><img src="img/tg.svg" alt="LogoSL" style="padding-right: 30px;"></a>
                        <a href="https://www.viber.com/"><img src="img/viber.svg" alt="LogoSL"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php /**PATH C:\Bitnami\wampstack-8.0.3-1\apache2\htdocs\site1\resources\views/index.blade.php ENDPATH**/ ?>