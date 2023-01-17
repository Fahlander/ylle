<!DOCTYPE html>
<html>
<head>
<style>
    h1{
        color: darkslateblue;
        font-size: xx-large;
        text-align: center;
    }

    p{
        color: darkgreen;
        font-size: large;
        text-align: center;
    }
</style>
</head>
<body>

<h1>Här de komma strängar</h1>

<p>
<?php
$string ="Banan";
for ($i = 1; $i <= 10; $i++) {
    echo $string . " " . $i . "<br>";
}
?>
</p>

</body>
</html>