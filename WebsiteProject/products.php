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
        navigationBar();
    ?>
    

    <div class="AllItems">

    <?php
    for($i=0; $i<3; $i++) {
    ?>
        <div class="oneItem">
            <div>BMW 320d</div>
            <img src="images/BMW 320d.png" alt="Car 1">
            <div>Cost:  24,500€</div>
            <div>Year:  2021</div>
            <div>Mileage:  68,500 km</div>
            <div>Fuel:  Diesel</div>
            <div>Gearbox:  Automatic</div>
        </div>
    <?php
    }
         ?>


        

        <div class="oneItem">
            <div>Mercedes C-Class</div>
            <img src="images/Mercedes-Benz C-Class.png" alt="Car 2">
            <div>Cost:  29,900€</div>
            <div>Year:  2022</div>
            <div>Mileage:  37,890 km</div>
            <div>Fuel:  Diesel</div>
            <div>Gearbox:  Automatic</div>
        </div>

        <div class="oneItem">
            <div>Volkswagen Golf</div>
            <img src="images/Volkswagen Golf 8.png" alt="Car 3">
            <div>Cost:  19,200€</div>
            <div>Year:  2022</div>
            <div>Mileage:  42,500 km</div>
            <div>Fuel:  Petrol</div>
            <div>Gearbox:  Automatic</div>
        </div>

        <div class="oneItem">
            <div>Aston Martin D89</div>
            <img src="images/Aston Martin DB9.png" alt="Car 3">
            <div>Cost:  39,900€</div>
            <div>Year:  2005</div>
            <div>Mileage:  59,800 km</div>
            <div>Engine:  5.9L V12</div>
            <div>Gearbox:  Automatic</div>
        </div>

        <div class="oneItem">
            <div>Ferrari F430</div>
            <img src="images/Ferrari F430.png" alt="Car 3">
            <div>Cost:  89,00€</div>
            <div>Year:  2006</div>
            <div>Mileage:  48,000 km</div>
            <div>Engine:  4.3L V8</div>
            <div>Gearbox:  Automatic</div>
        </div>

        <div class="oneItem">
            <div>Porsche 911 Carrera S (997)</div>
            <img src="images/Porsche 911 Carrera S (997).png" alt="Car 3">
            <div>Cost:  42,00€</div>
            <div>Year:  2007</div>
            <div>Mileage:  42,500 km</div>
            <div>Engine:  3.8L Flat-six</div>
            <div>Gearbox:  Manual</div>
        </div>

        <div class="oneItem">
            <div>Mercedes-Benz SLR McLaren</div>
            <img src="images/Mercedes-Benz SLR McLaren.png" alt="Car 3">
            <div>Cost:  289,00€</div>
            <div>Year:  2004</div>
            <div>Mileage:  31,100 km</div>
            <div>Engine:  Supercharged V8</div>
            <div>Gearbox:  Automatic</div>
        </div>

    </div>
    
</body>
</html>