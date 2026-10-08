<?php

if (!isset($_POST["hitung"])) {

    header("Location: mobil.php");
    die();
}
const BUNGA_PERSEN = 20;

$nama = $_POST["nama"];
$email = $_POST["email"];
$hargaMobil = $_POST["harga"];

$tenor = isset($_POST["tenor"])
    ? $_POST["tenor"]
    : "";

$dp = isset($_POST["dp"])
    ? $_POST["dp"]
    : "";

$pesan = "";
if (empty($nama)) {
    $pesan = "Nama harus diisi.";
} elseif (empty($email)) {
    $pesan = "Email harus diisi.";
} elseif (empty($hargaMobil)) {
    $pesan = "Harga mobil harus diisi.";
} elseif (!is_numeric($hargaMobil)) {
    $pesan = "Harga mobil harus berupa angka.";
} elseif (empty($tenor)) {
    $pesan = "Silahkan pilih salah satu tenor.";
} elseif (empty($dp)) {
    $pesan = "Silahkan pilih presentase DP.";
}

if ($pesan != "") {
    header(
        "Location: mobil.php?pesan=" . urlencode($pesan)
        . "&nama=" . urlencode($nama)
        . "&email=" . urlencode($email)
        . "&harga=" . urlencode($hargaMobil)
        . "&tenor=" . urlencode($tenor)
        . "&dp=" . urlencode($dp)
    );
    die();
}
$pesan = "Perhitungan berhasil.";

$hargaMobil = (float) $hargaMobil;

$hargaDP = ($dp / 100) * $hargaMobil;


if ($tenor == 1) {
    $lamaangsuran = 12;
} elseif ($tenor == 2) {
    $lamaangsuran = 24;
} elseif ($tenor == 3) {
    $lamaangsuran = 36;
} elseif ($tenor == 4) {
    $lamaangsuran = 48;
} elseif ($tenor == 5) {
    $lamaangsuran = 60;
}

$hitungBunga = (BUNGA_PERSEN / 100) * $hargaMobil;

$total = ($hargaMobil + $hitungBunga) - $hargaDP;

$angsuran = $total / $lamaangsuran;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Hasil Angsuran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="text-center fw-bold mb-4">
                        Hasil Perhitungan Angsuran
                    </h2>

                    <?php
                    echo "Nama = " . $nama . "<br>";
                    echo "Pesan = " . $pesan . "<br>";
                    echo "Email = " . $email . "<br>";
                    echo "Harga Mobil = Rp "
                        . number_format(
                            $hargaMobil,
                            0,
                            ',',
                            '.'
                        )

                        . "<br>";
                    echo "Tenor = "
                        . $tenor
                        . " Tahun<br>";

                    echo "DP = "
                        . $dp
                        . "%<br>";

                    echo "Nominal DP = Rp "
                        . number_format(
                            $hargaDP,
                            0,
                            ',',
                            '.'
                        )
                        . "<br>";

                    echo "Bunga = "
                        . BUNGA_PERSEN
                        . "%<br>";

                    echo "Nominal Bunga = Rp "
                        . number_format(
                            $hitungBunga,
                            0,
                            ',',
                            '.'
                        )
                        . "<br>";

                    echo "Lama Angsuran = "
                        . $lamaangsuran
                        . " Bulan<br>";

                    echo "Total Angsuran = Rp "
                        . number_format(
                            $total,
                            0,
                            ',',
                            '.'
                        )
                        . "<br><br>";

                    echo "<b>Angsuran Per Bulan = Rp "
                        . number_format(
                            $angsuran,
                            0,
                            ',',
                            '.'
                        )
                        . "</b>";
                    ?>

                    <div class="mt-4">
                        <a href="mobil.php?nama=<?php echo urlencode($nama); ?>&email=<?php echo urlencode($email); ?>&harga=<?php echo urlencode($hargaMobil); ?>&tenor=<?php echo urlencode($tenor); ?>&dp=<?php echo urlencode($dp); ?>"
                            class="btn btn-primary">
                                Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>













