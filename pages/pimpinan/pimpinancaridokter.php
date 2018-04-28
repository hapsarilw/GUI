go<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Klinik Bersama | Pimpinan Home </title>
        <link rel="stylesheet" href="../../style/styles.css">
        <link rel="stylesheet" href="../../style/font-awesome.css">
    </head>

    <body>
        <div class="headerkaryawan">
            <h2>Page Pimpinan</h2>
        </div>
        <div class="topnav">
            <a href="pimpinanhome.php">Home</a>
            <a href="pimpinancaridokter.php">Cari Data Dokter</a>
            <a href="pimpinancaripasien.php">Cari Data Pasien</a>
            <a href="#">Statistik Klinik</a>
            <a id="logout" href="#" style="float:right">Logout</a>
        </div>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <img src="../../images/userimg.jpg" alt="dokter" style="height:120px; width: 120px;">
                    <h3 id="nama_karyawan">Nama Karyawan</h3>
                    <p id="status_jabatan">status_jabatan</p>
                    <p id="id_karyawan">id_karyawan</p>
                    <p id="email_karyawan">email_karyawan</p>
                </div>
            </div>
            <div class="rightcolumn">
                <div class="homestatisticcolumn">
                    <div class="card">
                        <p>Masukkan nama/id karyawan:</p>
                        <div class="search-container">
                            <form action="/action_page.php">
                                <input type="text" placeholder="" name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <br><br>
                        <table id="data_dokter">
                            <tr>
                                <th>Nama Dokter</th>
                                <th>ID Karyawan</th>
                                <th>Jenis Spesialisasi</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div id="modallogout" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>Apakah anda ingin logout?</p>
                <button type="button" class="button" style="width:75px;">
                    <a href=../../index.html>Ya</a>
                </button>
                <button type="button" class="button" style="width:75px;">
                    <a href=../../index.html>Batal</a>
                </button>
            </div>
        </div>
    </body>
    <script>
        // Get the modal
        var modal = document.getElementById('modallogout');

        // Get the button that opens the modal
        var btn = document.getElementById('logout');

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
