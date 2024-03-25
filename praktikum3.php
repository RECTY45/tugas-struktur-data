<?php
    $IdBar = @$_POST['IdBar'];
    $HaBar = @$_POST['HaBar'];
    $JumBel = @$_POST['JumBel'];

    $ToHa = $HaBar * $JumBel;
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #22d3ee;
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
            text-align: left;
            
        }

        input[type="text"] {
            padding: 8px 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            width: 250px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="praktikum3.php" method="POST">
        <table>
            <tr>
                <td><strong>Nama</strong></td>
                <td><strong>: ANDI SULFAENI</strong></td>
            </tr>
            <tr>
                <td><strong>N I M</strong></td>
                <td><strong>: 20232125026</strong></td>
            </tr>
            <tr>
                <td><strong>Kelas</strong></td>
                <td><strong>: S.202</strong></td>
            </tr>
        </table>
        <h1>TUGAS PRAKTIKUM 3</h1>
        <br>
        <h2>Selamat Datang Matakuliah Favorit Struktur Data</h2>
        <br>
        <strong>==========================================</strong>
        <h2>Penjualan Barang</h2>
        <strong>==========================================</strong>
        <table>
            <tr>
                <td><label for="IdBar">ID Barang :</label></td>
                <td><input type="text" id="IdBar" name="IdBar" value="<?= isset($IdBar) ? $IdBar : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="HaBar">Harga Barang :</label></td>
                <td><input type="text" id="HaBar" name="HaBar" value="<?= isset($HaBar) ? $HaBar : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="JumBel">Jumlah Beli :</label></td>
                <td><input type="text" id="JumBel" name="JumBel" value="<?= isset($JumBel) ? $JumBel : ''; ?>"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Show Result</button>
    </form>
    <div style=' margin-top: 20px;'>
        <h2 align="center">Result:</h2>
        <table>
            <tr>
                <td><strong><label for="IdBar">ID Barang </label></strong></td>
                <td><strong>: <?= isset($IdBar) ? $IdBar : ''; ?></strong></td>
            </tr>
            <tr>
                <td><strong><label for="HaBar">Harga Barang</label></strong></td>
                <td><strong>: <?= isset($HaBar) ? $HaBar : ''; ?></strong></td>
            </tr>
            <tr>
                <td><strong><label for="JumBel">Jumlah Beli</label></strong></td>
                <td><strong>: <?= isset($JumBel) ? $JumBel : ''; ?></strong></td>
            </tr>
            <tr>
                <td><strong><label for="JumBel">Total Harga</label></strong></td>
                <td><strong>: <?= isset($ToHa) ? $ToHa : ''; ?></strong></td>
            </tr>
        </table>
    </div>
</body>

</html>