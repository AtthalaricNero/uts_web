<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laundry XYZ</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            margin: 0;
        }
        .carousel-item {
            height: 400px; /* Fixed height for the carousel */
        }
        .carousel-item img {
            max-height: 100%;
            max-width: 100%;
            object-fit: cover; /* Ensure images cover the carousel area */
        }
        .company-profile {
            margin: 20px;
        }
        .footer {
            background-color: #0d6efd; 
            color: white;
            text-align: center;
            padding: 10px 0; 
        }

        .navbar-brand {
            color: white;
        }

        .nav-link {
            color: white;
        }

        .nav-link.active {
            color: white;
        }

        .nav-link:hover {
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php" style="font-weight: bold; font-size: 3;">Laundry XYZ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cek_harga.php">Cek Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner1.jpg" class="d-block w-100" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="img/banner2.jpg" class="d-block w-100" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="img/banner3.jpg" class="d-block w-100" alt="Third slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container company-profile">
    <h2 class="text-center mb-4">Tentang Kami</h2>
    <p class="text-center">
        Selamat datang di <strong>Laundry XYZ</strong>, solusi terpercaya untuk semua kebutuhan laundry Anda! Kami menawarkan berbagai layanan berkualitas tinggi untuk memastikan pakaian Anda selalu dalam keadaan terbaik.
    </p>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Cuci Kering</h5>
                    <p class="card-text">Untuk pakaian yang membutuhkan perawatan khusus, layanan cuci kering kami menggunakan teknologi terbaru untuk menghilangkan noda tanpa merusak serat kain. Pakaian Anda akan kembali segar dan siap dipakai.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Cuci Setrika</h5>
                    <p class="card-text">Nikmati kemudahan dengan layanan cuci setrika kami. Kami akan mencuci pakaian Anda dengan lembut dan menyetrikanya hingga sempurna, sehingga Anda tidak perlu repot lagi!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Setrika Saja</h5>
                    <p class="card-text">Jika Anda hanya ingin menyetrika pakaian yang sudah dicuci, kami juga menyediakan layanan setrika saja. Kami akan memastikan pakaian Anda tampak rapi dan siap untuk dipakai.</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-center mb-4">Pilihan Kecepatan</h4>
    <div class="row text-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Reguler</h5>
                    <p class="card-text">Layanan ini cocok bagi Anda yang tidak terburu-buru. Pakaian Anda akan kami proses dengan teliti untuk hasil terbaik.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Ekspres</h5>
                    <p class="card-text">Untuk Anda yang membutuhkan layanan cepat, pilih opsi ekspres kami. Pakaian Anda akan siap dalam waktu singkat tanpa mengorbankan kualitas.</p>
                </div>
            </div>
        </div>
    </div>

    <h4 class="text-center mb-4">Diskon untuk Member</h4>
    <p class="text-center">
        Kami menghargai loyalitas pelanggan kami. Sebagai member Laundry XYZ, Anda akan mendapatkan diskon khusus untuk setiap layanan yang Anda gunakan. Bergabunglah dengan program member kami dan nikmati penawaran menarik serta kemudahan dalam merawat pakaian Anda!
    </p>
</div>


<footer class="footer">
    <p>&copy; 2024 Laundry XYZ. All rights reserved.</p>
</footer>

</body>
</html>
