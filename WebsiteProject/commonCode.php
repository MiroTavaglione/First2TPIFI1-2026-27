<?php

$lang = "EN";

if (isset($_GET["lang"])) {

    $lang = $_GET["lang"];
}

$translations = [];

$fileTranslations = fopen("translations.csv", "r");
while (!feof($fileTranslations)) {
    $anotherlineOfText = fgets($fileTranslations);
    $oneLineArray = explode(";", $anotherlineOfText);

    if (count($oneLineArray) == 4) {
        if ($lang == "EN") {
            $translations[$oneLineArray[0]] = $oneLineArray[1];
        } else if ($lang == "DE") {
            $translations[$oneLineArray[0]] = $oneLineArray[2];
        } else if ($lang == "FR") {
            $translations[$oneLineArray[0]] = $oneLineArray[3];
        }
    }
}

//var_dump($translations);




function navigationBar($activePage, $language)
{
    global $translations;
?>
    <nav>
        <ul id="mainLinks">
            <li><a href="index.php?lang=<?= $language ?>" <?php if ($activePage == "Home") {
                                                                print 'class="active"';
                                                            } ?>><?= $translations["HomeBtn"] ?></a></li>
            <li><a href="about.php?lang=<?= $language ?>" <?php if ($activePage == "About") {
                                                                print 'class="active"';
                                                            } ?>><?= $translations["AboutBtn"] ?></a></li>
            <li><a href="contact.php?lang=<?= $language ?>" <?php if ($activePage == "Contact") {
                                                                print 'class="active"';
                                                            } ?>><?= $translations["ContactBtn"] ?></a></li>
            <li><a href="products.php?lang=<?= $language ?>" <?php if ($activePage == "Products") {
                                                                    print 'class="active"';
                                                                } ?>><?= $translations["ProductsBtn"] ?></a></li>
        </ul>
        <ul id="userLinks">
            <li><a href="login.php?lang=<?= $language ?>" <?php if ($activePage == "Login") {
                                                                print 'class="active"';
                                                            } ?>><?= $translations["LoginBtn"] ?></a></li>
            <li><a href="signup.php?lang=<?= $language ?>" <?php if ($activePage == "Sign Up") {
                                                                print 'class="active"';
                                                            } ?>><?= $translations["SignupBtn"] ?></a></li>
        </ul>

        <ul id="languageLinks">
            <li><a href="index.php?lang=EN" <?php if ($language == "EN") print('class="active"'); ?>>English</a></li>
            <li><a href="index.php?lang=FR" <?php if ($language == "FR") print('class="active"'); ?>>Français</a></li>
            <li><a href="index.php?lang=DE" <?php if ($language == "DE") print('class="active"'); ?>>Deutsch</a></li>
        </ul>
    </nav>

<?php
}
