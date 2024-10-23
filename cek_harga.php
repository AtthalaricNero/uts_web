<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - Laundry XYZ</title>
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

        .carousel-item img {
            width: 95%;
            height: 75%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" style="font-weight: bold; font-size: 3;">Laundry XYZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="cek_harga.php">Cek Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container cek-harga">
    <h2>Cek Harga Laundry</h2>
    <form id="hargaForm">
        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" id="berat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Layanan</label>
            <select id="jenis" class="form-select" required>
                <option value="5000">Cuci Kering</option>
                <option value="8000">Cuci Setrika</option>
                <option value="6000">Setrika</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kecepatan" class="form-label">Kecepatan</label>
            <select id="kecepatan" class="form-select" required>
                <option value="0">Reguler</option>
                <option value="2000">Ekspress</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="membership" class="form-label">Membership</label>
            <select id="membership" class="form-select" required>
                <option value="non-member">Non Member</option>
                <option value="member">Member</option>
            </select>
        </div>
        <button type="button" class="btn btn-primary" onclick="calculatePrice()">Check</button>
    </form>

    <div id="result" class="mt-4">
    </div>
</div>

<footer class="footer">
    <p>&copy; 2024 Laundry XYZ. All rights reserved.</p>
</footer>

<script>
    function calculatePrice() {
        const berat = Math.ceil(parseInt(document.getElementById("berat").value));
        const hargaPerKilo = parseInt(document.getElementById("jenis").value);
        const kecepatanCost = parseInt(document.getElementById("kecepatan").value);
        const membership = document.getElementById("membership").value;

        let total = (hargaPerKilo * berat) + (kecepatanCost * berat);
        
        let discount = 0;
        if (membership === "member") {
            discount = total * 0.1; 
        }

        const couponDiscount = (Math.floor(berat / 6) * 2) * hargaPerKilo;
        discount += couponDiscount;

        const finalTotal = total - discount;

        // Menampilkan hasil dengan format yang lebih menarik
        document.getElementById("result").innerHTML = `
            <div class="card text-center" style="background-color: #f8f9fa;">
                <div class="card-body">
                    <h4 class="card-title">Total Transaksi</h4>
                    <p class="card-text">Rp ${total.toFixed(0)}</p>
                    <h4 class="card-title">Total Diskon</h4>
                    <p class="card-text">Rp ${discount.toFixed(0)}</p>
                    <h4 class="card-title" style="color: red;">Total yang harus dibayar</h4>
                    <p class="card-text" style="color: red;">Rp ${finalTotal.toFixed(0)}</p>
                </div>
            </div>
        `;
    }
</script>


</body>
</html>
