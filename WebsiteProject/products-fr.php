<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
</head>
<body>

    <?php 
        include ("commonCode.php");
        navigationBar("Products","FR");
        
    $namesOfProducts = ["BMW 320d", "Mercedes C-Class", "Volkswagen Golf", "Aston Martin D89", "Ferrari F430", "Porsche 911 Carrera S (997)", "Mercedes-Benz SLR McLaren"];
    $imagesOfProducts = ["images/BMW 320d.png", "images/Mercedes-Benz C-Class.png", "images/Volkswagen Golf 8.png", "images/Aston Martin DB9.png", "images/Ferrari F430.png", "images/Porsche 911 Carrera S (997).png", "images/Mercedes-Benz SLR McLaren.png"];
    $pricesOfProducts = ["24,500€", "29,900€", "19,200€", "39,900€", "89,00€", "42,00€", "289,00€"];
    $yearsOfProducts = ["2021", "2022", "2022", "2005", "2006", "2007", "2004"];
    $mileagesOfProducts = [68.500, 37.890, 42.500, 59.800, 48.000, 42.500, 31.100];
    $fuelsOfProducts = ["Diesel", "Diesel", "Petrol", "5.9L V12", "4.3L V8", "3.8L Flat-six", "Supercharged V8"];
    $gearboxesOfProducts = ["Automatic", "Automatic", "Automatic", "Automatic", "Automatic", "Manual", "Automatic"];
    ?>
    

    <div class="AllItems">

    <?php
    for($i=0; $i < count($namesOfProducts); $i++) {
    ?>
        <div class="oneItem">
            <div><?= $namesOfProducts[$i]; ?></div>
            <img src="<?= $imagesOfProducts[$i] ?>" alt="$namesOfProducts[$i]">
            <div>Cost:  €<?= $pricesOfProducts[$i] ?></div>
            <div>Year:  <?= $yearsOfProducts[$i] ?></div>
            <div>Mileage:  <?= $mileagesOfProducts[$i] ?></div>
            <div>Fuel:  <?= $fuelsOfProducts[$i] ?></div>
            <div>Gearbox:  <?= $gearboxesOfProducts[$i] ?></div>
        </div>
    <?php
    }
    ?>
    </div>
</body>
</html>