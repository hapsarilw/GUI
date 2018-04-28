<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Klinik Bersama | Konfirmasi Daftar</title>
        <meta name="Klinik Bersama" content="Halaman pendaftaran pasien">
        <link rel="stylesheet" href="../../style/styles.css">
        <link rel="stylesheet" href="../../style/font-awesome.css">
    </head>
    <body>
        <div class="homebody">
            <div class="midcontainer">
                <div class="innermid">
                    <h1>Konfirmasi Data Pendaftaran</h1>
                    <table id="tabeldatakonfirmasi" style="width:90%; padding: 0px; margin:auto;">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td id="nama_pasien">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td id="email_pasien">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>:</td>
                            <td id="telp_pasien">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Jenis Spesialisasi Dokter</td>
                            <td>:</td>
                            <td id="jenis_spesialisasi">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Nama Dokter</td>
                            <td>:</td>
                            <td id="nama_dokter">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Hari Pertemuan</td>
                            <td>:</td>
                            <td id="hari_pertemuan">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="width: 45%;">Jam Pertemuan</td>
                            <td>:</td>
                            <td id="jam_pertemuan">&nbsp;</td>
                        </tr>
                    </table>
                    <br>

                    Keterangan pendaftaran: (Jika perlu)<br>
                    <textarea id="keteranganpendaftaran" name="keteranganpendaftaran" style="width:90%; height:100px;"></textarea>
                    <br><br>

                    <input id="konfirmasi" type="submit" class="button" style="width:75px;" value="Konfirmasi">

                    <!-- Modal -->
                    <div id="modalkonfirmasi" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Pertemuan sudah terdaftar</h1>
                            <p>Kami akan mengirimkan e-mail status pemesanan Anda dalam
                                maksimal 1x24 jam</p>
                            <button type="button" class="button" style="width:75px;">
                                <a href=../../index.html>Kembali</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        // Get the modal
        var modal = document.getElementById('modalkonfirmasi');

        // Get the button that opens the modal
        var btn = document.getElementById('konfirmasi');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</html>
