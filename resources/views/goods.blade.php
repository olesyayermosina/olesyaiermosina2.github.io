<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sweet Life</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../resources/css/inform.css') }}">
    <link rel="stylesheet" href="{{ asset('../resources/css/bootstrap-grid.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/cupcake3.png') }}" type="image/png">



</head>
<body>
    <header id="header" class="header">
        <div class="container">
            <div class="logomenu">
                <div class="LG">
                    <a href="?page=main"><img src="{{ asset('img/Logotype1.svg') }}" alt="LogoSL" class="logo"></a>
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
                        <a href="#"><img src="{{ asset('img/shopping-cart.svg') }}" alt="Backet" class="shop" style="margin: 2% 0px 0px;"></a>
                    </li>

                </ul>

                <div class="shopSec">
                    <img src="{{ asset('img/shopping-cartSmall.svg') }}" alt="LogoSL" class="logoS">
                </div>
                <div class="logoSec">
                    <img src="{{ asset('img/LogotypeSmall.svg') }}" alt="LogoSL" class="logoS">
                </div>
                <button class="menuGam">
                    <img src="{{ asset('img/menuSmall.svg') }}" alt="menuSm" class="menuS">

                </button>


            </div>
        </div>
    </header>

    <section id="containCont" class="containCont">
            <div class="container">
                <div class="inside">
                    <div class="texts">
                        <h1>
                            <a href="" class="headText">
                                Класичні торти
                            </a>
                        </h1>
                        <div class = "formact" style="padding-top: 3%; display: flex; flex-direction: column">
                            @foreach($goods as $v)
                                <br>
                                {{$v->name}}
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <div class="goods">
                        <div class="good" style="display: flex; flex-direction: column">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <a name="form"></a>
    <form id="form" class="form" method="post" action="/site1/public/after">
        <div class="container">
            <div class="forma">
                <h2>Не знаєте, що обрати? Заповніть форму і ми вам допоможемо!</h2>

                <div class="form-inner">
                    <div class="enters">
                        <input type="text" placeholder="Введіть ім'я" class="enter" name="name">
                        <input type="tel" placeholder="Введіть телефон" class="enter" name="phone" style="margin-right: 0px;">
                        <input type="email" placeholder="Введіть email" class="enter" name="email">
                        <input type="text" placeholder="Для кого замовлення?" class="enter" name="for" style="margin-right: 0px;">
                    </div>
                    <textarea placeholder="Введіть повідомлення" rows="5" class="textArea" name="text"></textarea>
                    <div class="buttonEnter">
                        <input type="submit" value="Надіслати" name="send">
                    </div>

                </div>

            </div>
        </div>

    </form>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="foots">
                <div class="logo">
                    <a href="?page=main"><img src="{{ asset('img/Logotype1.svg') }}" alt="LogoSL" class="logo"></a>
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
                            <img src="{{ asset('img/phone-call.svg') }}" alt="phoneF" class="fimg" style="padding-right: 12px">
                            <p><a href="tel:+380681234567">+380 681 234 567</a></p>
                        </div>
                        <div class="cont">
                            <img src="{{ asset('img/envelope.svg') }}" alt="phoneF" class="fimg" style="padding-right: 12px">
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
                        <img src="{{ asset('img/copyright.svg') }}" alt="phoneF" class="fimg" style="padding-right: 12px">
                        <p>2021. Всі права захищені</p>
                    </div>
                    <div class="social">
                        <a href="https://www.instagram.com/"><img src="{{ asset('img/instagram.svg') }}" alt="LogoSL" style="padding-right: 30px;"></a>
                        <a href="https://t.me/@tilivizr_iz_brigadi"><img src="{{ asset('img/tg.svg') }}" alt="LogoSL" style="padding-right: 30px;"></a>
                        <a href="https://www.viber.com/"><img src="{{ asset('img/viber.svg') }}" alt="LogoSL"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
