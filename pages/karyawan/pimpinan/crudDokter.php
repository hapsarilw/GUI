<html>
<body>
<?php
include 'mydB.php';

if(!empty($_POST['submit'])){
    $sql = "INSERT INTO karyawan('nama_karyawan','email	password',	'id_spesialisasi',	'jabatan',	'foto')
        VALUES ('".$_POST["namaD"]."','".$_POST["email"]."','".$_POST["password"]."'
        ,'".$_POST["pilihSP"]."', ,'".$_POST["pilihJb"]."' ,'".$_POST["fileToUpload"]."')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<form action="" method="post">
    Name Dokter: <input type="text" name="namaD"><br>
    E-mail: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    Spesialisasi :
        <select name="pilihSp" id="">
            <option selected="true" disabled="disabled">Pilih Spesialisasi</option>
            <option value="pimpinan">Umum</option>
            <option value="Dokter">Gigi</option>
            <option value="pimpinan">Penyakit Dalam</option>
            <option value="Dokter">Anak</option>
        </select>
    <br>
    Jabatan :
    <select name="pilihJb" id="">
        <option selected="true" disabled="disabled">Pilih Jabatan</option>
        <option value="pimpinan">Pimpinan</option>
        <option value="Dokter">Dokter</option>
    </select>
    <br>
    Upload Foto :<br>
        <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input name="submit" type="submit">
</form>

</body>
</html>