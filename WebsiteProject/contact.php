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
        navigationBar("Contact","EN");
    ?>

    <h1>Please type in your name</h1>
    <?php 
    if (isset($_POST["username"])) {
            print "Hello, " . $_POST["username"];
    }
    else 
    {        
    ?>
    <form method="POST">
        Please type your name here: <input type="text" name="username">
        <br>
        Please type your password here: <input type="password" name="psw">
        <br>
        <button type="submit">Submit</button>
    </form>
    <?php
    }
    ?>

</body>
</html>