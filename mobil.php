<?php
$pesan = isset($_GET["pesan"]) ? $_GET["pesan"] : "";
$nama = isset($_GET["nama"]) ? $_GET["nama"] : "";
$email = isset($_GET["email"]) ? $_GET["email"] : "";
$harga = isset($_GET["harga"]) ? $_GET["harga"] : "";
$tenor = isset($_GET["tenor"]) ? $_GET["tenor"] : "";
$dp = isset($_GET["dp"]) ? $_GET["dp"] : "";

$checked1 = "";
$checked2 = "";
$checked3 = "";
$checked4 = "";
$checked5 = "";

switch ($tenor) {
    case "1":
        $checked1 = "checked";
        break;

    case "2":
        $checked2 = "checked";
        break;

    case "3":
        $checked3 = "checked";
        break;

    case "4":
        $checked4 = "checked";
        break;

    case "5":
        $checked5 = "checked";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Angsuran Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#beranda">
                <img src="img/logo.jpg"
                    width="50"
                    height="50"
                    class="rounded-circle"
                    style="object-fit: cover;">
                <span>PORSCHE</span>
            </a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#hitung">
                            Hitung
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="beranda">
    <div id="carouselExample"
         class="carousel slide"
         data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/prom 1.jpeg"
                    class="d-block w-100"
                    style="height: 500px !important; object-fit: cover;">
            </div>

            <div class="carousel-item">
                <img src="img/prom 2.jpeg"
                    class="d-block w-100"
                    style="height: 500px !important; object-fit: cover;">
            </div>

            <div class="carousel-item">
                <img src="img/prom 3.jpeg"
                    class="d-block w-100"
                    style="height: 500px !important; object-fit: cover;">
            </div>
        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<section id="tentang" class="container py-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3 class="fw-bold">
                        Tentang Porsche
                    </h3>
                    <p>
                        Porsche merupakan salah satu merek mobil
                        yang dikenal dengan desain elegan,
                        performa tinggi, dan teknologi modern.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="img/best seller.jpg"
                     class="card-img-top"
                     style="height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>


<section id="hitung" class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <h2 class="text-center fw-bold mb-4">
                        Calculator Angsuran Mobil
                    </h2>

                    <?php
                    if ($pesan != "") {
                        echo '<div class="alert alert-danger">';
                        echo $pesan;
                        echo '</div>';
                    }
                    ?>

                    <form action="proses.php" method="post">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nama
                            </label>

                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="<?php echo $nama; ?>"
                                   placeholder="Masukkan nama"
                                   required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Email
                            </label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?php echo $email; ?>"
                                   placeholder="Masukkan email"
                                   required>
                        </div>


                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Harga Mobil
                            </label>

                            <input type="text"
                                   name="harga"
                                   class="form-control"
                                   value="<?php echo $harga; ?>"
                                   placeholder="Masukkan harga mobil"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold d-block">
                                Tenor
                            </label>

                            <div class="d-flex flex-wrap gap-3">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="tenor"
                                           value="1"
                                           <?php echo $checked1; ?>>
                                    <label class="form-check-label">
                                        1 Tahun
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="tenor"
                                           value="2"
                                           <?php echo $checked2; ?>>

                                    <label class="form-check-label">
                                        2 Tahun
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="tenor"
                                           value="3"
                                           <?php echo $checked3; ?>>

                                    <label class="form-check-label">
                                        3 Tahun
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="tenor"
                                           value="4"
                                           <?php echo $checked4; ?>>

                                    <label class="form-check-label">
                                        4 Tahun
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="tenor"
                                           value="5"
                                           <?php echo $checked5; ?>>

                                    <label class="form-check-label">
                                        5 Tahun
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                DP
                            </label>

                            <select name="dp"
                                    class="form-select"
                                    required>

                                <option value="">
                                    Pilih DP
                                </option>

                                <option value="10"
                                    <?php if ($dp == "10") echo "selected"; ?>>
                                    10%
                                </option>

                                <option value="20"
                                    <?php if ($dp == "20") echo "selected"; ?>>
                                    20%
                                </option>

                                <option value="30"
                                    <?php if ($dp == "30") echo "selected"; ?>>
                                    30%
                                </option>

                                <option value="40"
                                    <?php if ($dp == "40") echo "selected"; ?>>
                                    40%
                                </option>

                                <option value="50"
                                    <?php if ($dp == "50") echo "selected"; ?>>
                                    50%
                                </option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <input type="submit"
                                   name="hitung"
                                   value="Hitung"
                                   class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p class="mb-0">
            © 2026 Porsche
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>












