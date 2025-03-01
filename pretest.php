<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest Form</title>
</head>
<body>
    <h1>Pretest Form</h1>
    <table>
        <form action="" method="post">
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM :</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="simpan"></td>
            </tr>
        </form>
    </table>
    <?php
                if(isset($_POST["simpan"])){
                    $nama = $_POST["nama"];
                    $nim = $_POST["nim"];

                    echo"Hello, $nama , $nim";
                }
            ?>
</body>
</html>