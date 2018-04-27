<head>
    <?php include 'tempDok.php' ?>
    <title>Cari Pasien | Dokter</title>
</head>
<body>
<div class="halCariP">
    <h4>Silahkan Cari Data Pasien</h4>
    <div class="formCari1">
        <form action="/cariPasien.php">
            <label for="fname">Nama Pasien</label>
            <input type="text" id="namaO" name="namaP" placeholder="Nama Pasien..">

            <input type="submit" value="Cari">
        </form>
    </div>
    <h4 style="padding-left: 250px;">ATAU</h4>
    <h4>Silahkan Cari ID Pasien</h4>
    <div class="formCari2">
        <form action="/cariID.php">
            <label for="id">ID Pasien</label>
            <input type="text" id="inPasien" name="inPasien" placeholder="ID Pasien..">

            <input type="submit" value="Cari">
        </form>
    </div>
</div>
</body>
</html>