<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    <center>
        <h2> Kalkulator Gacha Event</h2>
        <table>
            <tr>
                <td>Masukan Pity</td>
                <td> : </td>
                <td> <input type="number" name="pity"> </td>
            </tr>
            <tr>
                <td>Masukan Primogems</td>
                <td> : </td>
                <td> <input type="number" name="primo"> </td>
            </tr>
            <tr>
            <td>Kondisi </td>
            <td> : </td>
            <td> 
                <select name="kondisi" value="kondisi">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Rate On">Rate On</option>
                    <option value="Rate Off">Rate Off</option>
                </select>
            </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="hitung" value="KALKULASI"> </td>
            </tr>
        </table>
        <form>
    <?php

        if(isset($_POST['hitung'])) {
            $pity = $_POST['pity'];
            $primo = $_POST['primo'];
            $kondisi = $_POST['kondisi'];

            $guaranteed = 90;
            $medium = 80;
            $gacha = 160;

            $pull = $guaranteed - $pity;
            $pull2 = $medium - $pity;

            $sudah = $pity * $gacha;
            $target1 = $guaranteed * $gacha;
            $target2 = $medium * $gacha;

            $total1 = $target1 - $sudah - $primo;
            $total2 = $target2 - $sudah - $primo;

            $kalah1 = $target1 + $total1;
            $kalah2 = $target2 + $total2;

            $pulled1 = $pull + 90;
            $pulled2 = $pull2 + 80;

            switch ($kondisi) {
                case 'Rate On':
                    echo "<b>$pull</b> pull untuk menuju pity 90, ";
                    echo "Primogems yang dibutuhkan ";
                    echo "<b> $total1 </b> <br>";
                    
                    echo "<b>$pull2</b> pull untuk menuju pity 80, ";
                    echo "Primogems yang dibutuhkan ";
                    echo "<b> $total2 </b> <br>";
                    break;
                case 'Rate Off':
                    echo "<b>$pull</b> pull untuk menuju pity 90, ";
                    echo "Primogems yang dibutuhkan ";
                    echo "<b> $total1 </b> <br>";
                    
                    echo "<b>$pull2</b> pull untuk menuju pity 80, ";
                    echo "Primogems yang dibutuhkan ";
                    echo "<b> $total2 </b> <br><br>";

                    echo "<b>$pulled1</b> pull jika kalah rate off,";
                    echo "<u> primogem yang dibutuhkan  </u>";
                    echo "<b>$kalah1</b> untuk ke pity 90 <br>";
                    
                    echo "<b>$pulled2</b> pull jika kalah rate off,";
                    echo "<u> primogem yang dibutuhkan  </u>";
                    echo "<b>$kalah2</b> untuk ke pity 80 <br>";
                    break;
                
                default:
                    "Kata Kerang Ajaib : TIDAK ADA ";
                    break;
            }

        }

    ?>
    </center>
</body>
</html>