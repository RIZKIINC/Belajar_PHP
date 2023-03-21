<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Bangun Datar</title>
</head>
<body>
    <h3>Bangun Datar Jajar Genjang</h3>
    <p>Note : <br>Hasilnya paling bawah</p>
    
    <form method="POST">
        <table>

            <!-- rumus Luas -->
            <tr>
                <td colspan="2"><h3>Rumus Luas</h3></td>
            </tr>
            <tr>
                <td>Alas</td>
                <td><input type="text" name="alas1" require></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="text" name="tinggi1" require></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" Value="Hitung">
                </td>
            </tr>

            <!-- Rumus Keliling -->
            <tr>
                <td colspan="2"><h3>Rumus Keliling</h3></td>
            </tr>
            <tr>
                <td>Alas</td>
                <td><input type="text" name="alas2" require></td>
            </tr>
            <tr>
                <td>Sisi Miring</td>
                <td><input type="text" name="miring2" require></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="keliling" Value="Hitung">
                </td>
            </tr>

            <!-- Rumus Sisi -->
            <tr>
                <td colspan="2"><h3>Rumus Sisi</h3></td>
            </tr>
            <tr>
                <td>Keliling</td>
                <td><input type="text" name="keliling3" require></td>
            </tr>
            <tr>
                <td>Sisi Miring</td>
                <td><input type="text" name="miring3" require></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="sisi" Value="Hitung">
                </td>
            </tr>

            <!-- Rumus Alas -->
            <tr>
                <td colspan="2"><h3>Rumus Alas</h3></td>
            </tr>
            <tr>
                <td>Luas</td>
                <td><input type="text" name="luas4" require></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="text" name="tinggi4" require></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="alas" Value="Hitung">
                </td>
            </tr>
            
            <!-- Rumus Tinggi -->
            <tr>
                <td colspan="2"><h3>Rumus Tinggi</h3></td>
            </tr>
            <tr>
                <td>Luas</td>
                <td><input type="text" name="luas5" require></td>
            </tr>
            <tr>
                <td>Alas</td>
                <td><input type="text" name="alas5" require></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="tinggi" Value="Hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php

    // Mencari Luas
    if(isset($_POST['submit'])){
        $alas1 = $_POST['alas1'];
        $tinggi1 = $_POST['tinggi1'];

        $luas = $alas1 * $tinggi1;
        echo '<hr><b> Hasil Luas </b>';
        echo '<br> Diketahui :';
        echo '<br> Alas : '.$alas1 .' cm';
        echo '<br> Tinggi : '.$tinggi1 .' cm';

        echo '<br> Maka Luasnya : ' .$luas .' cm²';
    }

    // Mencari Keliling
    if(isset($_POST['keliling'])){
        $alas2 = $_POST['alas2'];
        $miring2 = $_POST['miring2'];

        $keliling = 2 * ($alas2 + $miring2);
        echo '<hr><b> Hasil Keliling </b>';
        echo '<br> Diketahui :';
        echo '<br> Alas : '.$alas2 .' cm';
        echo '<br> Tinggi : '.$miring2 .' cm';

        echo '<br> Maka Kelilingnya : ' .$keliling .' cm';
    }

    // Rumus Sisi
    if(isset($_POST['sisi'])){
        $keliling3 = $_POST['keliling3'];
        $miring3 = $_POST['miring3'];

        $sisi = ($keliling3 / 2) - $miring3;
        echo '<hr><b> Hasil Sisi </b>';
        echo '<br> Diketahui :';
        echo '<br> Keliling : '.$keliling3 .' cm';
        echo '<br> Sisi Miring : '.$miring3 .' cm';

        echo '<br> Maka Sisinya : ' .$sisi .' cm';
    }

    // Rumus Alas
    if(isset($_POST['alas'])){
        $luas4 = $_POST['luas4'];
        $tinggi4 = $_POST['tinggi4'];

        $alas = $luas4 / $tinggi4;
        echo '<hr><b> Hasil Alas </b>';
        echo '<br> Diketahui :';
        echo '<br> Luas : '.$luas4 .' cm';
        echo '<br> Tinggi : '.$tinggi4 .' cm';

        echo '<br> Maka Alasnya : ' .$alas .' cm';
    }

    // Rumus Tinggi
    if(isset($_POST['tinggi'])){
        $luas5 = $_POST['luas5'];
        $alas5 = $_POST['alas5'];

        $tinggi = $luas5 / $alas5;
        echo '<hr><b> Hasil Tinggi </b>';
        echo '<br> Diketahui :';
        echo '<br> Luas : '.$luas5 .' cm';
        echo '<br> Alas : '.$alas5 .' cm';

        echo '<br> Maka Tingginya : ' .$tinggi .' cm';
    }

    ?>
</body>
</html>