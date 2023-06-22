<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
<style>
        body {
            background-color: #f8f8f8;
            font-family: 'Helvetica Neue',Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
        }

        h1 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #000;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 4px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #333;
        }

        p {
            margin-top: 10px;
            text-align: center;
        }

        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }


</style>
</head>
<body>
    <?php include "koneksi.php"; ?>
    <div class="container">
        <form method="post" class="register-form">
            <h1>Register</h1>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" id="umur" name="umur" placeholder="Enter your age" required>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="4" placeholder="Enter your address" required></textarea>
            </div>
            <button name="register" type="submit">Register</button>
            <p>already have an account?<a href="login.php"> login here</a></p>
        </form>
    </div>

    <?php
    if(isset($_POST['register'])){
        $name = $_POST['nama'];
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];

        $query = $koneksi->query("INSERT INTO tb_users(id, nama, username, password, umur, jk, alamat) VALUES('', '$name', '$username', '$pwd', '$umur', '$jk', '$alamat')");
        if($query){
            echo "<script>alert('Register Berhasil!');window.location = 'login.php';</script>";
        }else{
            echo "<script>alert('Register Gagal!');window.location = 'register.php';</script>";
        }
    }
    ?>
</body>
</html>
