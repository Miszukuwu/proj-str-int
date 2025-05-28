<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA1</a>
        <a href="kw2.png">KWERENDA2</a>
        <a href="kw3.png">KWERENDA3</a>
        <a href="kw4.png">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form action="" method="post">
            <select name="rodzaj" id="rodzaj-input">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'piekarnia') or Die("Błąd połączenia");
            $query = "SELECT DISTINCT `Rodzaj` FROM `wyroby` ORDER BY `Rodzaj` DESC;";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)){
                $rodzaj = $row['Rodzaj'];
                echo "<option value='$rodzaj'>$rodzaj</option>";
            }
            ?>
            </select>
            <button type="submit">Wybierz</button>
        </form>
        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            if (isset($_POST['rodzaj'])){
                $rodzaj = $_POST['rodzaj'];
                $query = "SELECT `Rodzaj`, `Nazwa`, `Gramatura`, `Cena` FROM `wyroby` WHERE `Rodzaj`='$rodzaj';";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $nazwa = $row['Nazwa'];
                    $gramatura = $row['Gramatura'];
                    $cena = $row['Cena'];
                    echo "<tr>";
                        echo "<td>$rodzaj</td>";
                        echo "<td>$nazwa</td>";
                        echo "<td>$gramatura</td>";
                        echo "<td>$cena</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </main>
    <footer>
        <p>AUTOR 00000000000</p>
        <p>Data: 28.05.2025</p>
    </footer>
</body>
</html>