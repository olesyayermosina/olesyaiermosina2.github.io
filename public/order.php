<a name="form"></a>
<form id="form" class="form" method="post" action="/site1/public/buy">
    <div class="container">
        <div class="forma">
            <h2>Зробити замовлення</h2>

            <div class="form-inner">
                <div class="enters">
                    <input type="tel" placeholder="Введіть телефон" class="enter" name="phone">
                    <input type="email" placeholder="Введіть email" class="enter" name="email" style="margin-right: 0px;">
                    <input type="text" placeholder="Введіть назву виробу" class="enter" name="good">
                    <input type="date" placeholder="На коли замовлення?" class="enter" name="deadline" style="margin-right: 0px;">
                </div>
                <textarea placeholder="Введіть адресу (для доставки)" rows="1" class="textArea" name="text"></textarea>
                <div class="buttonEnter">
                    <input type="submit" value="Замовити!" name="send">
                </div>
            </div>

        </div>
    </div>

</form>
