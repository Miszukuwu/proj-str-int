<h1W class="title"><?php echo $_GET['website']?></h1W>
<div class="content">
    <h3>Zmiana hasła</h3>
</div>
<form action="?operation=change_pass" method="post">
    <input placeholder="Hasło" type="password" name="pass1" id="pass1" required>
    <input placeholder="Powtórz hasło" type="password" name="pass2" id="pass2" required>
    <button type="submit">Zmień Hasło</button>
</form>
<h3>Zmiana tytułu</h3>
<form action="?operation=change_title" method="post">
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        $sql = "select * from ustawienia where id=1;";
        $command = mysqli_query($connection,$sql);
        $item = mysqli_fetch_assoc($command);
    ?>
    <input type="text" name="title" id="title" value="<?php echo $item['nazwa'] ?>">
    <button type="submit">Zmień</button>
</form>
<?php
    if (!empty($_GET['pass'])) {
        if ($_GET['pass'] == "1") {
            echo "HASŁA NIE SĄ IDENTYCZNE";
        } else {
            echo "POPRAWNIE ZMIENIONO HASŁO";
        }
    }
    if (!empty($_GET['title'])) {
        if ($_GET['title'] == "1") {
            echo "POMYŚLNIE ZMIENIONO TYTUŁ";
        } else {
            echo "BŁĄD ZMIANY TYTUŁU";
        }
    }
