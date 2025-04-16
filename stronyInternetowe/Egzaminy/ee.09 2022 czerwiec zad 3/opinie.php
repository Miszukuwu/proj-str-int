<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>
    <main>
        <h2>Opinie naszych klientów</h2>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "hurtownia") or Die("Błąd połączenia bazą");
        $query = "SELECT `klienci`.`zdjecie`, `klienci`.`imie`, `opinie`.`opinia` FROM `klienci` JOIN `opinie` ON `klienci`.`id`=`opinie`.`Klienci_id` WHERE `klienci`.`Typy_id` IN (2,3);";
        $queryResult = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($queryResult)){
            echo "<div class='opinia'>";
            echo "<img src='".$row["zdjecie"]."' alt='klient'>";
            echo "<q>".$row["opinia"]."</q>";
            echo "<h4>".$row["imie"]."</h4>";
            echo "</div>";
        }
        mysqli_close($conn);
        ?>
    </main>
    <footer id="footer1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </footer>
    <footer id="footer2">
        <h3>Nasi top klienci</h3>
        <ol>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "hurtownia") or Die("Błąd połączenia bazą");
            $query = "SELECT `klienci`.`imie`, `klienci`.`nazwisko`, `klienci`.`punkty` FROM `klienci` ORDER BY `klienci`.`punkty` DESC LIMIT 3;";
            $queryResult = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($queryResult)){
                echo "<li>".$row["imie"]." ".$row["nazwisko"].", ".$row["punkty"]." pkt.</li>";
            }
            mysqli_close($conn);
            ?>
        </ol>
    </footer>
    <footer id="footer3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </footer>
    <footer id="footer4">
        <h3>Autor: Aleksander Owsiński</h3>
    </footer>
</body>
</html>