<?php
session_start();
$S0 = $_SESSION['name'];
$S1 = $_SESSION['rogale'];
$S2 = $_SESSION['bulki'];
$S3 = $_SESSION['sumaR'];
$S4 = $_SESSION['sumaB'];
$S5 = $_SESSION['suma'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
            color: black;
        }

        td {
            color: red;
        }
    </style>
</head>

<body></body>
<?php


echo <<<END

    <table border="2">
    <tr>
    <th>Nazwisko</th>
        <th>lp</th>
        <th>Rogale</th>
        <th>Bulki</th>
        <th>SumaR</th>
        <th>SumaB</th>
        <th>SumaCal</th>
        
    </tr>
    <tr>
    <th>1</th>
    <td>$S0</td>
    <td>$S1</td>
    <td>$S2</td>
    <td>$S3</td>
    <td>$S4</td>
    <td>$S5</td>

</tr>

</table>


    
END;

?>

<button><a href="index.html">Powrót do zamówienia</a></button>


</body>

</html>