<!DOCTYPE html>
<html lang="en">
    <?php include '../../mydB.php' ?>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Klinik Bersama | Daftar Pasien</title>
        <meta name="Klinik Bersama" content="Halaman pendaftaran pasien">
        <link rel="stylesheet" href="../../style/styles.css">
        <link rel="stylesheet" href="../../style/font-awesome.css">

    </head>
    <body>
        <div class="homebody">
            <div class="midcontainer">
                <div class="innermid">
                    <h1>Form Pendaftaran Pasien</h1>
                    <form action="../formHandling/daftarPertemuan.php" method="post">
                        Nama Lengkap:<br>
                        <input type="text" name="namaP" value="">
                        <br>

                        E-mail:<br>
                        <input type="text" name="email" value="">
                        <br>

                        No. Telepon:<br>
                        <input id="telp_pasien" type="text" name="telp" value="">
                        <br>

                        Jenis Spesialisasi Dokter:<br>
                        <select id="jenis_spesialisasi" name="jenis_spesialisasi">
                            <option value="penyakitdalam">Penyakit Dalam</option>
                            <option value="umum">Umum</option>
                            <option value="kandungan">Kandungan</option>
                            <option value="anak">Anak</option>
                        </select>
                        <br>

                        Nama Dokter:<br>
                        <select id="nama_dokter" name="namaD">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br>

                        Hari Pertemuan:<br>
                        <input id="hari_pertemuan" type="date" name="tglKetemu">
                        <br>

                        Jam Pertemuan:<br>
                        <select id="jam_pertemuan" name="jenis_spesialisasi">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="fiat">Fiat</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <a id="konfirmasidaftar" href="konfirmasidaftar.html">
                            <input type="submit" class="button" style="width:75px;" value="Lanjut">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
