<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>

<h2>1</h2>

<form method="post">
    Pierwsza liczba:
    <input type="number" name="liczba1" required><br><br>

    Druga liczba:
    <input type="number" name="liczba2" required><br><br>

    <input type="submit" name="suma" value="Oblicz sumę">
</form>

<?php
function SUMA($liczba1, $liczba2)
{
    echo "Suma: " . ($liczba1 + $liczba2);
}

if (isset($_POST["suma"]))
{
    SUMA($_POST["liczba1"], $_POST["liczba2"]);
}
?>

<br><br>

<h2>2</h2>

<form method="post">
    Pierwsza liczba:
    <input type="number" name="liczba3" required><br><br>

    Druga liczba:
    <input type="number" name="liczba4" required><br><br>

    <input type="submit" name="podstawy" value="Oblicz">
</form>

<?php
function PODSTAWY($liczba3, $liczba4)
{
    echo "Różnica: " . ($liczba3 - $liczba4) . "<br>";
    echo "Iloczyn: " . ($liczba3 * $liczba4) . "<br>";

    if ($liczba4 != 0)
    {
        echo "Iloraz: " . ($liczba3 / $liczba4);
    }
    else
    {
        echo "Nie można dzielić przez zero";
    }
}

if (isset($_POST["podstawy"]))
{
    PODSTAWY($_POST["liczba3"], $_POST["liczba4"]);
}
?>

<br><br>

<h2>3</h2>

<form method="post">
    Pierwsza liczba:
    <input type="number" step="any" name="kalk1" required><br><br>

    Działanie:
    <select name="dzialanie">
        <option value="+">Suma</option>
        <option value="-">Różnica</option>
        <option value="*">Iloczyn</option>
        <option value="/">Iloraz</option>
    </select><br><br>

    Druga liczba:
    <input type="number" step="any" name="kalk2" required><br><br>

    <input type="submit" name="kalkulator" value="Oblicz">
</form>

<div id="wynik">
<?php
function KALKULATOR($liczba1, $liczba2, $dzialanie)
{
    if ($dzialanie == "+")
    {
        echo "Wynik: " . ($liczba1 + $liczba2);
    }
    elseif ($dzialanie == "-")
    {
        echo "Wynik: " . ($liczba1 - $liczba2);
    }
    elseif ($dzialanie == "*")
    {
        echo "Wynik: " . ($liczba1 * $liczba2);
    }
    elseif ($dzialanie == "/" && $liczba2 != 0)
    {
        echo "Wynik: " . ($liczba1 / $liczba2);
    }
    else
    {
        echo "Nie można dzielić przez zero";
    }
}

if (isset($_POST["kalkulator"]))
{
    KALKULATOR($_POST["kalk1"], $_POST["kalk2"], $_POST["dzialanie"]);
}
?>
</div>

<br><br>

<h2>4</h2>

<form method="post">
    Pierwsza liczba:
    <input type="number" name="maks1" required><br><br>

    Druga liczba:
    <input type="number" name="maks2" required><br><br>

    Trzecia liczba:
    <input type="number" name="maks3" required><br><br>

    <input type="submit" name="maks" value="Sprawdź">
</form>

<?php
function MAKS($liczba1, $liczba2, $liczba3)
{
    echo "Największa liczba: " . max($liczba1, $liczba2, $liczba3);
}

if (isset($_POST["maks"]))
{
    MAKS($_POST["maks1"], $_POST["maks2"], $_POST["maks3"]);
}
?>

<br><br>

<h2>5</h2>

<form method="post">
    Wzrost:
    <input type="number" name="wzrost" required><br><br>

    <input type="submit" name="sprawdzWzrost" value="Sprawdź">
</form>

<?php
function WZROST($wzrost)
{
    if ($wzrost < 150)
    {
        echo "Wzrost niski";
    }
    elseif ($wzrost > 180)
    {
        echo "Wzrost wysoki";
    }
    else
    {
        echo "Wzrost średni";
    }
}

if (isset($_POST["sprawdzWzrost"]))
{
    WZROST($_POST["wzrost"]);
}
?>

<br><br>

<h2>6</h2>

<form method="post">
    Wzrost:
    <input type="number" name="bmiWzrost" required><br><br>

    Waga:
    <input type="number" step="any" name="waga" required><br><br>

    <input type="submit" name="bmi" value="Oblicz BMI">
</form>

<div id="wynikBmi">
<?php
function BMI($wzrost, $waga)
{
    $wzrost = $wzrost / 100;
    $bmi = $waga / ($wzrost * $wzrost);

    echo "BMI: " . round($bmi, 2) . "<br>";

    if ($bmi < 18.5)
    {
        echo "Za mało!";
    }
    elseif ($bmi > 25)
    {
        echo "Za dużo!";
    }
    else
    {
        echo "OK!";
    }
}

if (isset($_POST["bmi"]))
{
    BMI($_POST["bmiWzrost"], $_POST["waga"]);
}
?>
</div>

<br><br>

<h2>7</h2>

<form method="post">
    Data1:
    <input type="date" name="data1" required><br><br>

    Data2:
    <input type="date" name="data2" required><br><br>

    <input type="submit" name="starszy" value="Sprawdź">
</form>

<?php
function STARSZY($data1, $data2)
{
    if ($data1 < $data2)
    {
        echo "Pierwsza osoba jest starsza";
    }
    elseif ($data2 < $data1)
    {
        echo "Druga osoba jest starsza";
    }
    else
    {
        echo "Osoby są w tym samym wieku";
    }
}

if (isset($_POST["starszy"]))
{
    STARSZY($_POST["data1"], $_POST["data2"]);
}
?>

<br><br>

<h2>8</h2>

<form method="post">
    Rok:
    <input type="number" name="rok" required><br><br>

    <input type="submit" name="przestepny" value="Sprawdź">
</form>

<?php
function PRZESTEPNY($rok)
{
    if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0)
    {
        echo "Rok jest przestępny";
    }
    else
    {
        echo "Rok nie jest przestępny";
    }
}

if (isset($_POST["przestepny"]))
{
    PRZESTEPNY($_POST["rok"]);
}
?>

<br><br>

<h2>9</h2>

<form method="post">
    Hasło:
    <input type="text" name="haslo" required><br><br>

    <input type="submit" name="sila" value="Sprawdź">
</form>

<?php
function SILA($haslo)
{
    if (!preg_match("/[0-9]/", $haslo) ||
        !preg_match("/[A-Z]/", $haslo) ||
        !preg_match("/[a-z]/", $haslo) ||
        !preg_match("/[^a-zA-Z0-9]/", $haslo))
    {
        echo "Hasło słabe";
    }
    elseif (strlen($haslo) <= 4)
    {
        echo "Hasło słabe";
    }
    elseif (strlen($haslo) < 8)
    {
        echo "Hasło średnie";
    }
    else
    {
        echo "Hasło mocne";
    }
}

if (isset($_POST["sila"]))
{
    SILA($_POST["haslo"]);
}
?>

<br><br>

<h2>10</h2>

<form method="post">
    Pierwszy bok:
    <input type="number" name="bok1" required><br><br>

    Drugi bok:
    <input type="number" name="bok2" required><br><br>

    Trzeci bok:
    <input type="number" name="bok3" required><br><br>

    <input type="submit" name="trojkat" value="Sprawdź">
</form>

<?php
function TROJKAT($bok1, $bok2, $bok3)
{
    if ($bok1 > 0 && $bok2 > 0 && $bok3 > 0 &&
        $bok1 + $bok2 > $bok3 &&
        $bok1 + $bok3 > $bok2 &&
        $bok2 + $bok3 > $bok1)
    {
        echo "Można utworzyć trójkąt";
    }
    else
    {
        echo "Nie można utworzyć trójkąta";
    }
}

if (isset($_POST["trojkat"]))
{
    TROJKAT($_POST["bok1"], $_POST["bok2"], $_POST["bok3"]);
}
?>

<br><br>

<h2>11</h2>

Tekst:
<input type="text" id="tekst" onkeyup="SZYFR()">

<span id="szyfrWynik"></span>

<script>
function SZYFR()
{
    let tekst = document.getElementById("tekst").value;
    let alfabetMale = "abcdefghijklmnopqrstuvwxyz";
    let alfabetDuze = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let wynik = "";

    for (let i = 0; i < tekst.length; i++)
    {
        let pozycjaMale = alfabetMale.indexOf(tekst[i]);
        let pozycjaDuze = alfabetDuze.indexOf(tekst[i]);

        if (pozycjaMale != -1)
        {
            wynik += alfabetMale[(pozycjaMale + 2) % 26];
        }
        else if (pozycjaDuze != -1)
        {
            wynik += alfabetDuze[(pozycjaDuze + 2) % 26];
        }
        else
        {
            wynik += tekst[i];
        }
    }

    document.getElementById("szyfrWynik").innerHTML = wynik;
}
</script>

</body>
</html>