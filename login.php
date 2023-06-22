<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
        background-color: #f8f8f8;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #ffffff;
        border-radius: 6px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 400px;
        text-align: center;
        }

        h1 {
        color: #333333;
        font-size: 24px;
        margin-bottom: 30px;
        }

        .form-group {
        margin-bottom: 20px;
        text-align: left;
        }

        label {
        display: block;
        color: #333333;
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
        border: 1px solid #dddddd;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
        padding: 10px;
        width: 100%;
        }

        button {
        background-color: #000000;
        border: none;
        border-radius: 4px;
        color: #ffffff;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        padding: 12px;
        width: 100%;
        }

        button:hover {
        background-color: #333333;
        }

        p {
        color: #333333;
        font-size: 14px;
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
    
<?php
    session_start();
    include "koneksi.php";
    ?>
    <div class="container">
        <form method="post">
            <h1>Login</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <button name="submit" type="submit">Login</button>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>
    
    <?php
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pwd = $_POST['password'];

        $qry = $koneksi->query("SELECT * FROM tb_users WHERE username='$uname' AND password='$pwd'");
        $result = mysqli_num_rows($qry);

        if($result == 1){
            $data = $qry->fetch_assoc();

            $_SESSION['user'] = $data;
            echo "<script>alert('Login Berhasil!');window.location='index.php';</script>";
        }else{
            echo "<script>alert('Login Gagal!');window.location='login.php.php';</script>";
        }
    }
    ?>
</body>
</html>
