<!DOCTYPE html>
<html>
    <head>
        <?php include 'tempDok.php';?>
        <title>Home | Dokter</title>
    </head>
    <body>
        <div class="main">
            <p id="info">Info Saat Ini</p>
            <p id="hari">Hari : </p>
            <p id="tanggal">Tanggal : </p>
            <p id="bykPasien">Pasien ditangani hari ini : </p>
            <table id="tabelNotifikasi">
                <tr>
                    <th>Tanggal Pesan</th>
                    <th>Waktu Pesan</th>
                    <th>Tanggal Pertemuan</th>
                    <th>Waktu Pertemuan</th>
                    <th>Nama Pasien</th>
                    <th>Status Pemesanan</th>
                    <th>Tindakan</th>
                </tr>
                <tr>
                    <th>12 Mei 2018</th>
                    <th>19:12</th>
                    <th>17 Mei 2018</th>
                    <th>18.00</th>
                    <th>Jefta</th>
                    <th style="color: darkblue;">Ubah</th>
                    <th style="color: darkblue;">Buat Catatan Profil Pasien</th>
                </tr>
                <tr>
                    <th>12 Mei 2018</th>
                    <th>20:12</th>
                    <th>18 Mei 2018</th>
                    <th>14.00</th>
                    <th>Vio</th>
                    <th style="color: red;">Terhapus</th>
                    <th style="color: darkblue;"><a href="">Buat Catatan</a> <a href=""> Profil Pasien </a></th>
                </tr>
            </table>
        </div>
    </body>
</html>