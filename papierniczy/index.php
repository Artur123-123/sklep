<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sklep papierniczy</title>
</head>
<body>
    <section id="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </section>
    <section id="lewy">
        <h3>Promocja 15% obejmuje artykuły: </h3>
        <?php 
            $db = mysqli_connect('localhost', 'root', '', 'sklep');

            $zap1 = mysqli_query($db, "SELECT nazwa FROM towary WHERE id BETWEEN 7 AND 10;");

            while($zap2 = mysqli_fetch_assoc($zap1)){
                echo '<ul><li>'.$zap2['nazwa'].'</li></ul>';
            }

        ?>
    </section>
    <section id="srodek">
        <h3>Cena wybranego artykułu w promocji</h3>
        <form action="index.php" method="post">
            <select name="nazwa">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <button type="submit">WYBIERZ</button>
        </form>
        <?php
            $nazwa = $_POST['nazwa'];

            $zap3 = mysqli_query($db, "SELECT cena FROM towary WHERE nazwa='$nazwa';");

            while($zap4 = mysqli_fetch_assoc($zap3)){
                $cena = $zap4['cena'] * 0.85;
                $cena = round($cena, 2);
            }
            echo $cena;

        ?>
    </section>
    <section id="prawy">
        <h3>Kontakt</h3>
        <p>telefon: 123123123 <br> e-mail: <a href="">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </section>
    <footer>
        <h4>Autor strony: 101010100101</h4>
    </footer>
</body>
</html>