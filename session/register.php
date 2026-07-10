<?php
session_start();
require "../config/database.php";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "" || $password == "") {
        $error = "Username dan password wajib diisi.";
    } else {
        // Cek apakah username sudah dipakai
        $cekSql = "SELECT username FROM users WHERE username = ?";
        $cekStmt = $koneksi->prepare($cekSql);
        $cekStmt->bind_param("s", $username);
        $cekStmt->execute();

        $hasilCek = $cekStmt->get_result();

        if ($hasilCek->num_rows > 0) {
            $error = "Username sudah digunakan. Silakan pakai username lain.";
        } else {
            // Simpan akun baru
            $insertSql = "INSERT INTO users (username, password) VALUES (?, ?)";
            $insertStmt = $koneksi->prepare($insertSql);
            $insertStmt->bind_param("ss", $username, $password);

            if ($insertStmt->execute()) {
                header("Location: login.php?register=berhasil");
                exit;
            } else {
                $error = "Registrasi gagal. Silakan coba lagi.";
            }

            $insertStmt->close();
        }

        $cekStmt->close();
    }
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 350px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        h1, p {
            text-align: center;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin: 7px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #2563eb;
            color: white;
            cursor: pointer;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1>Register</h1>
        <p>Daftar untuk mendapatkan akun</p>

        <?php if ($error != "") { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>

        <form method="post">
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
            <p>Sudah Punya Akun? <a href="login.php">Login</a></p>
        </form>
    </div>

</body>
</html>