<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Contoh validasi sederhana
    if ($username === "admin" && $password === "rahasia123") {
        $message = "<div style='color: green; font-weight: bold; margin-bottom: 15px;'>Login Berhasil!</div>";
    } else {
        $message = "<div style='color: red; font-weight: bold; margin-bottom: 15px;'>Username atau Password salah!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login PHP - New Layout</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f7f6;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    /* CONTAINER UTAMA (Split Menjadi Kiri & Kanan) */
    .login-wrapper {
      display: flex;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 800px;
      max-width: 90%;
      overflow: hidden; /* Memastikan pojok gambar ikut melengkung */
    }

    /* BAGIAN KIRI: Foto Profil Besar / Visual */
    .visual-side {
      flex: 1;
      background: linear-gradient(135deg, #007bff, #0056b3);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      padding: 40px;
      text-align: center;
    }

    .visual-side img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid rgba(255, 255, 255, 0.3);
      object-fit: cover;
      margin-bottom: 15px;
    }

    /* BAGIAN KANAN: Form Input */
    .form-side {
      flex: 1;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-side h2 {
      margin-top: 0;
      color: #333;
      margin-bottom: 5px;
    }

    .form-side p {
      color: #777;
      margin-bottom: 25px;
      font-size: 14px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #555;
      font-size: 14px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      box-sizing: border-box;
      transition: all 0.3s;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: background 0.2s;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }

    /* STYLING TAMBAHAN UNTUK LINK CEK PEMBAYARAN */
    .btn-bayar-container {
      text-align: center;
      margin-top: 15px;
    }

    .btn-bayar {
      display: inline-block;
      width: 100%;
      padding: 10px 0;
      color: #007bff;
      text-decoration: none;
      font-weight: 600;
      font-size: 14px;
      border: 1px dashed #007bff;
      border-radius: 6px;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    .btn-bayar:hover {
      background-color: #007bff;
      color: #ffffff;
    }

    /* Responsif untuk Handphone (Kembali numpuk atas-bawah) */
    @media (max-width: 768px) {
      .login-wrapper {
        flex-direction: column;
      }
      .visual-side {
        padding: 30px;
      }
    }
  </style>
</head>
<body>

  <div class="login-wrapper">
    
    <!-- Posisinya sekarang di sebelah kiri -->
    <div class="visual-side">
      <img src="profile.png" alt="Profile">
      <h3>Selamat Datang</h3>
      <p>Silakan masuk untuk mengakses akun Anda.</p>
    </div>

    <!-- Posisinya sekarang di sebelah kanan -->
    <div class="form-side">
      <h2>Sign In</h2>
      <p>Masukkan detail akun Anda di bawah ini.</p>
      
      <?php echo $message; ?>

      <form action="login_validasi.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>
        <button type="submit" class="submit-btn">Masuk</button>
      </form>

      <!-- BAGIAN LINK CEK PEMBAYARAN -->
      <div class="btn-bayar-container">
        <a href="bayar.php" class="btn-bayar">CEK PEMBAYARAN</a>
      </div>

    </div>

  </div>

</body>
</html>