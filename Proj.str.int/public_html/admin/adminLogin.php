<?php
    session_start();
    include ("../connection.php");
    $polaczenie = connectBase();
    $_SESSION['access'] = "1";
//    if ($_SESSION['access'] == 1){
//        header("location:admin.php");
//    }
    ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Logowanie admina</title>
    <link rel="stylesheet" href="../css/adminLogin.css">
</head>
<body>
    <article>
        <form action="" method="post">
            <input type="text" name="login" id="login" placeholder="Login">
            <input type="password" name="pass" id="pass" placeholder="Hasło">
            <div>
                <button type="submit">Zaloguj</button>
                <a href="../index.php"><button type="button">Wróć</button></a>
            </div>
        </form>
    </article>
</body>
</html>
<?php
    if (!empty($_POST['login'])) {
        $sql = "select * from uzytkownicy";
        $query = mysqli_query($polaczenie, $sql);
        while ($wiersz = mysqli_fetch_assoc($query))
        {
            if ($wiersz['login'] == $_POST['login'] && $wiersz['haslo'] == $_POST['pass'])
            {
                $_SESSION['NikoAccess'] = 1;
                header("location:admin.php");
            }
        }
    }
    mysqli_close($polaczenie);
