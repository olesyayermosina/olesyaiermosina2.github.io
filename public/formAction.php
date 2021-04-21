<?php
if (isset($_POST["send"])) {
    if ($_POST["name"] == "" || $_POST["phone"] == "" || $_POST["email"] == "" || $_POST["for"] == "" || $_POST["text"] == "") {
        echo "<p style='text-decoration: none; color: #673F3E'>Виправте невірно вказані дані:</p><br>";
        if ($_POST["name"] == "") {
            echo "Введіть ім'я<br><br>";
        }
        if ($_POST["phone"] == "") {
            echo "Введіть телефон<br><br>";
        }
        if ($_POST["email"] == "") {
            echo "Введіть електронну пошту<br><br>";
        }
        if ($_POST["for"] == "") {
            echo "Вкажіть, для кого замовленя<br><br>";
        }
        if ($_POST["text"] == "") {
            echo "Введіть повідомлення<br><br>";
        }
    } else{
        echo "<p style='text-decoration: none; color: #673F3E'><a href='?page=main'>На головну</a></p><br>";
    }
}


