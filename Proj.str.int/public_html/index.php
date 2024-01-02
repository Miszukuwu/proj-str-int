<?php
    include("connection.php");
    $connection = connectBase();
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <?php
        $sqlQuery = "select * from ustawienia where id=1;";
        $command = mysqli_query($connection, $sqlQuery);
        $wiersz = mysqli_fetch_array($command);
        echo "<title>" . $wiersz[1] . "</title>";
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
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="index.php">Strona Główna</a>
    <a href="admin/">Panel Admina</a>
    <a href="index.php?strona=kontakt">Kontakt</a>
    <a href="index.php?strona=omnie">O mnie</a>
    <?php
//        $sqlQuery = "select nazwa,link from menu;";
//        $wynik = mysqli_query($connection, $sqlQuery);
//        while ($item = mysqli_fetch_assoc($wynik)) {
//            echo "<a href=" . $item['link'] . ">" . $item['nazwa'] . "</a>";
//        }
//    ?>
</div>
<div id="topbar">
    <button id="menubtn">
        <img onclick="menuButton()" src="media/menu_button_icon.svg" alt="Menu">
    </button>
</div>
<div id="main">
    <?php
        $sqlQuery = "select * from blog order by id desc";
        $wynik = mysqli_query($connection, $sqlQuery);
        while ($item = mysqli_fetch_assoc($wynik)) {
            echo "<article><h1>".$item['tytul']."</h1>".$item['tresc']."</article>";
        }
    ?>
</div>
<script defer src="javascript/main.js"></script>
<script>
    const main = document.getElementById("main");
    let i = 0;
    for (const child of main.children) {
        console.log(child);
        child.style.animationDelay = i*0.1+"s";
        i++;
    }
</script>
<?php
    disconnect($connection);
?>
</body>
</html>