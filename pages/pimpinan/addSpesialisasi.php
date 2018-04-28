<html>
    <body>
        <?php require_once ('../../../mydB.php'); ?>

        <h4>Silahkan menambahkan spesialisasi baru</h4>
        <?php
        // Check connection

        if(isset($_POST['saveSp'])){
            $sql = "INSERT INTO spesialisasi (jenis_spesialisasi)
        VALUES ('".$_POST["namaSp"]."')";

        }
        if (mysqli_query($conn, $sql)) {
            echo $_POST["namaSp"]." berhasil ditambahkan" ;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        ?>

        <form method="post">
            <label id="first"> Nama Spesialisasi:</label><br/>
            <input type="text" name="namaSp"><br/>
            <button type="submit" name="saveSp">save</button>
        </form>

    </body>
</html>