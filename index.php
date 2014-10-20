<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-2 - PHP põhitõed</title>
</head>

<body>
    <h1>See dokument on minu esimene katsetus PHP-ga</h1>
    <?php // My first string. ?>
    <?php echo "tootab"; ?><br>
    <?php # String plus string. ?>
    <?php echo "Unos" . " Dos."; ?><br>
    <?php
    /*
        Calculations
        with
        numbers.
    */
?>
    <?php echo 5.99 + 6; ?><br>
    <?php echo 99.1 - 6; ?><br>
    <?php echo 5 * 6; ?><br>
    <?php echo 24 / 6; ?><br>
    <?php echo "tootab"; ?><br>
    <?php echo "Unos" . " Dos."; ?><br>
    <?php
    $var1 = 10;
    echo $var1;
    echo "<br>";
    $var2 = 99;
    echo $var2;
    echo "<br>";
    $var3 = "see on s6na";
    echo $var3;
?>
</body>
</html>