<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <div class="baner">
        <h1>BIURO TURYSTYCZNE</h1>
    </div>
    <div class="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php
                  $con = mysqli_connect('localhost', 'root', '', 'biuro');
                  $q = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1;";
                  $res = mysqli_query($con, $q);
                  while ($row = mysqli_fetch_array($res)) {
                      echo "<li>$row[0]. dnia $row[1] jedziemy do $row[2], cena: $row[3]</li>";
                  }
            ?>
        </ul>
    </div>
    <main>
        <div class="lewy">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </div>
        <div class="srodkowy">
            <h2>Nasze zdjęcia</h2>
            <?php
                $q = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
                $res = mysqli_query($con, $q);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<img src='$row[0]' alt='$row[1]' />";
                }
                mysqli_close($con);
            ?>
        </div>
        <div class="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </main>
    <div class="stopka">
        <p>Stronę wykonał: Kajetan Tomusiak</p>
    </div>
</body>

</html>