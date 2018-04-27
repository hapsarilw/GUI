<html>
<body>
<?php
    $nama = $_POST["namaP"];
    $email = $_POST["email"];
    $telp = $_POST["telp"];
    $spesialisasi = $_POST["jenis_spesialisasi"];
    $namaD = $_POST["namaD"];
    $namaD = $_POST["tglKetemu"];

    $insertData = "INSERT INTO MyGuests (firstname, lastname, email)
                    VALUES ('John', 'Doe', 'john@example.com')";

?>

Welcome <?php echo $_POST["id_karyawan"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>