<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Fullname'];
    $Nim = $_POST['NIM'];
    $Class = $_POST['Class'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP Input data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: pink;
        }

        form {
            text-align: center;
            margin-top: 100px;
        }

        table {
            margin: 0 auto;
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
    <form action="praktikum2.php" method="POST">
        <h1>TUGAS PRAKTIKUM 2</h1>
        <br>
        <h2>Selamat Datang Matakuliah Favorit Struktur Data</h2>
        <table>
            <tr>
                <td><label for="fullname">Nama :</label></td>
                <td><input type="text" id="fullname" name="Fullname" value="<?= isset($Name) ? $Name : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="nim">Nim :</label></td>
                <td><input type="text" id="nim" name="NIM" value="<?= isset($Nim) ? $Nim : ''; ?>"></td>
            </tr>
            <tr>
                <td><label for="class">Kelas :</label></td>
                <td><input type="text" id="class" name="Class" value="<?= isset($Class) ? $Class : ''; ?>"></td>
            </tr>
        </table>
        <br>
        <button type="submit">Show Result</button>
    </form>
    <div style=' margin-top: 20px;'>
        <h2 align="center">Result:</h2>
        <table>
            <tr>
                <td><strong><label for="fullname">Nama :</label></strong></td>
                <td><strong><?= isset($Name) ? $Name : ''; ?></strong></td>
            </tr>
            <tr>
                <td><strong><label for="nim">NIM:</label></strong></td>
                <td><strong><?= isset($Nim) ? $Nim : ''; ?></strong></td>
            </tr>
            <tr>
                <td><strong><label for="class">Kelas :</label></strong></td>
                <td><strong><?= isset($Class) ? $Class : ''; ?></strong></td>
            </tr>
        </table>
</body>

</html>