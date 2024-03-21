<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <?php
        include('koneksi.php');

        date_default_timezone_set('Asia/Jakarta');
        $waktu = date("H:i:s");
        $tanggal = date("d F Y");
        $tegangan = $_GET ['tegangan'];

        $kirim = mysqli_query($koneksi, "INSERT INTO tbmonitor (waktu, tanggal, tegangan) VALUES ('$waktu', '$tanggal', '$tegangan')");
        

        if ($kirim){
            echo "Data berhasil diinputkan...!";
        } else{
            echo "Gagal diinputkan...!";
        }
    
    
    ?>

    
</body>
</html>