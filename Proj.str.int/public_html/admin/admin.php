<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("../connection.php");
    $connection = connectBase();
    session_start();
    if ($_SESSION['NikoAccess'] == 0) {
        header("location:adminLogin.php");
    }
    $_SESSION['access'] = "comeIn";
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <?php
        $sqlQuery = "select * from ustawienia where id=1;";
        $command = mysqli_query($connection, $sqlQuery);
        $wiersz = mysqli_fetch_array($command);
        echo "<title>".$wiersz[1]."</title>";
    ?>

    <style>
        <?php
           $sqlQuery = "select * from ustawienia where id=2;";
           $command = mysqli_query($connection,$sqlQuery);
           $wiersz = mysqli_fetch_array($command);
           echo "body{
            background-color:".$wiersz[1].";
        }";
           ?>
    </style>
</head>
<body>
<div id="mySidebar" class="sidebar">
    <a draggable="false" href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a draggable="false" href="admin.php">Strona Główna</a>
    <a draggable="false" href="admin.php?website=settings">Ustawienia</a>
    <a draggable="false" href="admin.php?operation=logout">Wyloguj</a>
    <?php
//        $sqlQuery = "select nazwa,link from menu;";
//        $command = mysqli_query($connection, $sqlQuery);
//        while ($item = mysqli_fetch_assoc($command)) {
//            echo "<a draggable='false' href=".$item['link'].">".$item['nazwa']."</a>";
//        }
    ?>
</div>
<div id="topbar">
    <button id="menubtn">
        <img onclick="menuButton()" src="../media/menu_button_icon.svg" alt="Menu" draggable="false">
    </button>
</div>
<div id="main">
    <?php
        if (!empty($_GET['website'])) {
            $strona = $_GET['website'];
            include($strona.".php");
        } else {
            include("main.php");
        }
    ?>
</div>
<script defer src="../javascript/main.js"></script>
<?php
    
    if (!empty($_GET['operation'])) {
        switch ($_GET['operation']) {
            case "logout":
                $_SESSION["NikoAccess"] = 0;
                session_destroy();
                header("location: adminLogin.php");
                break;
            case "change_pass":
                if ($_POST['pass1'] != $_POST['pass2']) {
                    echo $_POST['pass1'];
                    header("location: admin.php?website=settings&pass=1");
                } else {
                    $sql = "UPDATE `uzytkownicy` SET `haslo` = MD5('".$_POST['pass1']."') WHERE `uzytkownicy`.`id` = 1; ";
                    mysqli_query($connection, $sql);
                    header("location: admin.php?website=settings&pass=2");
                }
                break;
            case "change_title":
                $sql = "UPDATE ustawienia SET nazwa = ('".$_POST['title']."') WHERE `ustawienia`.`id` = 1 ";
                if (mysqli_query($connection, $sql)) {
                    header("location: admin.php?website=settings&title=1");
                } else {
                    header("location: admin.php?website=settings&title=2");
                }
                break;
            case "add_post":
                $sql =  "INSERT INTO `blog` (`tytul`, `date`, `tresc`) VALUES ('".$_POST['tytul']."', '".$_POST['date']."', '".$_POST['tresc']."') ";
                mysqli_query($connection,$sql);
                break;
        }
    }
    disconnect($connection);
?>
</body>
</html>
