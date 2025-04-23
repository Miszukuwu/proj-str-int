<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Dni, miesiące, lata</h1>
    </header>
    <div id="napis">
        <p>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "kalendarz") or Die("Błąd połączenia");
            $query = "SELECT `imieniny`.`imiona` FROM `imieniny` WHERE `data`='".date("m-d")."';";
            $queryResult = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($queryResult);
            $daysArr = ["Niedziela", "Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];
            $message = "Dzisiaj jest ".$daysArr[date("N")].", ".date("d-n-Y").", imieniny: ".$row['imiona'];
            echo $message;
            mysqli_close($conn);
            ?>
        </p>
    </div>
    <div id="left">
        <table>
            <tr>
                <th>liczba dni</th>
                <th>miesiąc</th>
            </tr>
            <tr>
                <td rowspan="7">31</td>
                <td>styczeń</td>
            </tr>
            <tr>
                <td>marzec</td>
            </tr>
            <tr>
                <td>maj</td>
            </tr>
            <tr>
                <td>lipiec</td>
            </tr>
            <tr>
                <td>sierpień</td>
            </tr>
            <tr>
                <td>październik</td>
            </tr>
            <tr>
                <td>grudzień</td>
            </tr>
            <tr>
                <td rowspan="4">30</td>
                <td>kwiecień</td>
            </tr>
            <tr>
                <td>czerwiec</td>
            </tr>
            <tr>
                <td>wrzesień</td>
            </tr>
            <tr>
                <td>listopad</td>
            </tr>
            <tr>
                <td>28 lub 29</td>
                <td>luty</td>
            </tr>
        </table>
    </div>
    <div id="center">
        <h2>Sprawdź kto ma urodziny</h2>
        <form action="" method="post">
            <input type="date" name="data" id="data" required min="2024-01-01" max="2024-12-31">
            <button type="submit">wyślij</button><br>
            <span id="result">
                <?php
                if (isset($_POST["data"])){
                    $date = $_POST["data"];
                    $shortDate = substr($date, 5);
                    $conn = mysqli_connect("localhost", "root", "", "kalendarz") or Die("Błąd połączenia");
                    $query = "SELECT `imieniny`.`imiona` FROM `imieniny` WHERE `data`='".$shortDate."';";
                    $queryResult = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($queryResult);
                    $message = "Dnia ".$date." są imieniny: ".$row["imiona"];
                    echo $message;
                    mysqli_close($conn);
                }
                ?>
            </span>
        </form>
    </div>
    <div id="right">
        <a href="https://pl.wikipedia.org/wiki/Kalendarz_Majów">
            <img src="kalendarz.gif" alt="Kalendarz Majów">
        </a>
        <h2>Rodzaje kalendarzy</h2>
        <ol>
            <li>słoneczny<ul>
                    <li>kalendarz Majów</li>
                    <li>juliański</li>
                    <li>gregoriański</li>
                </ul>
            </li>
            <li>księżycowy<ul>
                    <li>starogrecki</li>
                    <li>babiloński</li>
                </ul>
            </li>
        </ol>
    </div>
    <footer>
        <p>Stronę opracował: Owsiński</p>
    </footer>
</body>
</html>