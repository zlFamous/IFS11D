<head>
    <title>Hello!</title>
</head>

<body>
    hallo ifs 11 d

</br>
<table border='1' align="center">
    <tr>
        <?php
        $Endwert = 120;

        //elegant


        for ($Zahl=1; $Zahl <=120; $Zahl++)
        {
            if ($Zahl % 2 == 0)
                $Farbe="#FFFF66";
            else
                $Farbe = "#6495ed";

            {

                echo "<td align = 'center' bgcolor='".$Farbe."'>";
                echo $Zahl;
                echo "</td>";
            }

            if ($Zahl % 10 == 0 and  $Zahl < $Endwert)
                echo "</tr> <tr>";

        }
        ?>
    </>
</table>
</font>
</body>

</html>