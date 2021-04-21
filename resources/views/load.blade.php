<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sweet Life</title>
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    <?php
    $styleContainer = array('container1', 'containerBaby', 'containerBiscuits', 'containerBrownie', 'containerDesserts',
        'containerJelly', 'containerPP', 'containerWedding');
    $styleDegustation = array('degustation');
    $styleDelivery = array('delivery');
    $styleInform = array('inform1', 'inform2', 'inform3', 'inform4', 'inform5', 'inform6', 'inform7', 'inform8', 'inform9',
        'informBaby1', 'informBaby2', 'informBaby3', 'informBiscuit1', 'informBiscuit2', 'informBiscuit3',
        'informBrownie1', 'informBrownie2', 'informBrownie3', 'informDessert1', 'informDessert2', 'informDessert3',
        'informJelly1', 'informJelly2', 'informJelly3', 'informPP1', 'informPP2', 'informPP3',
        'informWed1', 'informWed2', 'informWed3', 'afterform');
    $styleMain = array('main');
    $styleMenu = array('menu', 'menuCakes', 'menuCakesBrownies');

    $var = $_GET['page']??'main';
    if (in_array($var, $styleContainer)){
        echo '<link rel="stylesheet" href="../resources/css/container.css">';
    } elseif (in_array($var, $styleDegustation)){
        echo '<link rel="stylesheet" href="../resources/css/degustation.css">';
    } elseif (in_array($var, $styleDelivery)){
        echo '<link rel="stylesheet" href="../resources/css/delivery.css">';
    } elseif (in_array($var, $styleInform)){
        echo '<link rel="stylesheet" href="../resources/css/inform.css">';
    } elseif (in_array($var, $styleMain)){
        echo '<link rel="stylesheet" href="../resources/css/main.css">';
    } elseif (in_array($var, $styleMenu)){
        echo '<link rel="stylesheet" href="../resources/css/menu.css">';
    } else{
        echo '<link rel="stylesheet" href="../resources/css/main.css">';
    }
    ?>
	<link rel="stylesheet" href="../resources/css/bootstrap-grid.css">
	<link rel="shortcut icon" href="img/cupcake3.png" type="image/png">



</head>
<body>
    <?php
        include('header.php');
        $var = $_GET['page']??'main';
        $var = htmlspecialchars($var);
        include($var.'.php');
        if (in_array($var, $styleMain)||in_array($var, $styleMenu)||in_array($var, $styleContainer)){
                include('form.php');
        }
        include('footer.php');
    ?>
</body>
</html>
