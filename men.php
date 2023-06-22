<?php
// Koneksi ke database
$servername = "sql112.infinityfree.com";
$username = "if0_34479736";
$password = "KCDrCXLWwLhtc";
$dbname = "if0_34479736_data_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
    $produk = isset($_POST['produk']) ? $_POST['produk'] : "";
    $size = isset($_POST['size']) ? $_POST['size'] : "";
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : "";
    $metodePembayaran = isset($_POST['pembayaran']) ? $_POST['pembayaran'] : "";

    // Query untuk menyimpan data ke dalam tabel database
    $sql = "INSERT INTO purchases (nama, alamat, size, jumlah, metode_pembayaran, produk) VALUES ('$nama', '$alamat', '$size', '$jumlah', '$metodePembayaran', '$produk')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pembelian Berhasil!');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . $conn->error . "');</script>";
    }
    
}

// Menutup koneksi database
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoAzka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h4>TokoAzka</h4>
    </div>
    <div class="menu">
        <a href="web.php"><img src="img/B.png"></a>
        <a href="web.php"><img src="img/A.png"></a>
        <a href="women.php" class="women">WOMEN</a>
        <a href="men.php" class="men">MEN</a>
        <a href="kids.php" class="kids">KIDS</a>
    </div>
    <div class="gambar">
        <img src="img/3B.avif">
        <div class="product-info1">
            <p>T-Shirt Oversize Saku</p>
            <p>Kerah Bulat Lengan Half</p>
            <p>Rp 249.000</p>
            <p>Rp 199.000</p>
            <p>Limited offer dari 16 jun - 22 jul 2023</p>
            <p>T-shirt oversized untuk Pria dan Wanita, dari bahan yang tahan lama dengan gaya laid-back.</p>
            <button type="submit" name="buy_now" onclick="openModal('Jaket')">Beli Sekarang</button>
    </div>
        </div>
        </div>

<div id="modal" style="display: none;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Isi form sesuai kebutuhan -->
        <label for="nama">Nama Pembeli:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nama">Alamat:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="size">SIZE:</label>
<input type="text" id="size" name="size"><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" required><br>

        <label for="pembayaran">Metode Pembayaran:</label>
        <select id="pembayaran" name="pembayaran">
            <option value="ShopeePay">ShopeePay</option>
            <option value="Dana">Dana</option>
            <option value="BCA">BCA</option>
            <option value="Mandiri">Mandiri</option>
        </select><br><br>
        <input type="hidden" id="produk" name="produk" value="">
        <button type="submit">Submit</button>
        <button type="button" onclick="closeModal()">Kembali</button>
    </form>
</div>
</div>
<script>
    function openModal(produk) {
        document.getElementById("modal").style.display = "block";
        document.getElementById("produk").value = produk;
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }
    </script>
        </div>
</div>
</body>
</html>