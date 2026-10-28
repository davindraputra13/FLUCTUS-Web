<?php
session_start();
require_once 'db_connect.php';

// --- LOGIKA LOGIN & LOGOUT ---
if (isset($_POST['login'])) {
    if ($_POST['username'] === "admin" && $_POST['password'] === "admin123") {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Username atau Password salah!";
    }
}
if (isset($_GET['logout'])) { 
    session_destroy(); 
    header("Location: admin.php"); 
    exit; 
}

// --- LOGIKA HAPUS ---
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $conn->query("DELETE FROM merch WHERE id = $id");
    header("Location: admin.php"); // Refresh setelah hapus
}

// --- LOGIKA TAMBAH PRODUK ---
if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $toko = mysqli_real_escape_string($conn, $_POST['tokopedia_link']);
    $shop = mysqli_real_escape_string($conn, $_POST['shopee_link']);
    $sizes = mysqli_real_escape_string($conn, $_POST['sizes']); // Ambil data size

    // Cek/Buat folder uploads
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = time() . "_" . basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $file_name;

    // Upload file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        // Query SQL diperbarui dengan kolom 'sizes'
        $query = "INSERT INTO merch (name, price, image_url, tokopedia_link, shopee_link, sizes) 
                  VALUES ('$name', '$price', '$target_file', '$toko', '$shop', '$sizes')";
        
        if($conn->query($query)) {
            $success = "Produk berhasil ditambahkan!";
        } else {
            $error = "Gagal simpan ke database: " . $conn->error;
        }
    } else {
        $error = "Gagal upload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Fluctus</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .box { max-width: 900px; margin: auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; box-sizing: border-box; }
        button { background: #333; color: white; padding: 10px 20px; border: none; cursor: pointer; width: 100%; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background: #f9f9f9; }
        .img-thumb { width: 60px; height: 60px; object-fit: cover; }
        .msg { padding: 10px; margin-bottom: 10px; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="box">
        <?php if (!isset($_SESSION['logged_in'])): ?>
            <h2>Admin Login</h2>
            <?php if(isset($error)) echo "<div class='msg' style='background:#ffcccc;'>$error</div>"; ?>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        <?php else: ?>
            <h2>Dashboard Merchandise</h2>
            <a href="?logout=true">Logout</a>
            
            <?php if(isset($success)) echo "<div class='msg' style='background:#ccffcc;'>$success</div>"; ?>
            <?php if(isset($error)) echo "<div class='msg' style='background:#ffcccc;'>$error</div>"; ?>

            <hr>
            <h3>Tambah Produk Baru</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Nama Produk" required>
                <input type="text" name="price" placeholder="Harga (misal: 150000)" required>
                <label>Foto Produk (JPG/PNG):</label>
                <input type="file" name="image" accept="image/*" required>
                <input type="text" name="tokopedia_link" placeholder="Link Tokopedia (kosongkan jika tidak ada)">
                <input type="text" name="shopee_link" placeholder="Link Shopee (kosongkan jika tidak ada)">
                <label>Tersedia Size:</label>
                <input type="text" name="sizes" placeholder="Contoh: S, M, L, XL">
                <button type="submit" name="add">Simpan Produk</button>
            </form>

            <h3>Daftar Produk</h3>
            <table>
                <tr><th>Foto</th><th>Nama</th><th>Harga</th><th>Size</th><th>Marketplace</th><th>Aksi</th></tr>
                <?php
                $res = $conn->query("SELECT * FROM merch");
                while($row = $res->fetch_assoc()) {
                    echo "<tr>
                        <td><img src='{$row['image_url']}' class='img-thumb'></td>
                        <td>{$row['name']}</td>
                        <td>" . number_format($row['price'], 0, ',', '.') . "</td>
                        <td>{$row['sizes']}</td>
                        <td>
                            " . ($row['tokopedia_link'] ? "Tokopedia<br>" : "") . "
                            " . ($row['shopee_link'] ? "Shopee" : "") . "
                        </td>
                        <td><a href='?delete={$row['id']}' onclick='return confirm(\"Yakin hapus produk ini?\")'>Hapus</a></td>
                    </tr>";
                }
                ?>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>