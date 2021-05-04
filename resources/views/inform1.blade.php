@extends('index')
@section('css')
    <link rel="stylesheet" href="../resources/css/inform.css">
@endsection
@section('page-content')
    <section id="containCont" class="containCont">
        <div class="container">
            <div class="inside">
                <div class="texts">
                    <h1>
                        <a href="" class="headText">
                            Горіхово-карамельний торт
                        </a>
                    </h1>
                    <p>
                        <a href="?page=menuCakesBrownies" class="insider">
                            Торти та тістечка
                        </a>
                        /
                        <a href="?page=menuCakes" class="insider">
                            Торти
                        </a>
                        /
                        <a href="?page=container1" class="insider">
                            Класичні торти
                        </a>
                    </p>
                </div>
                <div class="goods">
                    <div class="good">
                        <div class="goodImg">

                            <img src="img/clCakeB1.jpg" alt="oneGood" class="goodjpg">

                        </div>
                        <div class="goodText">
                            <h3>300 грн/кг</h3>
                            <p>Горіхові бісквіти, просочені мигдальним сиропом, карамельний крем, солона карамель і 4 види
                                горіхів грубого помелу: кеш’ю, фундук, мигдаль та волоський.</p>
                            <p><b>Мінімальна вага при замовленні - 1500 г. Ціна вказана за 1 кг продукту. Упаковка та декор
                                    оплачуються додатково (потрібно уточняти y менеджера)</b></p>
                            <a href="#" class="buttonOrder">Купити!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
