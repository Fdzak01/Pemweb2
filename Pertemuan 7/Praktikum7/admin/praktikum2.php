<?php  
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h1 style="background-color: whitesmoke;">Form Registrasi Pengguna</h1><hr>
    <form action="submit_get.php" method="get" >    
        <div>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        </div><br>
        <div>
            <label for="username">Nama Pengguna</label>
            <input type="text" name="username" id="username" required>
        </div><br>
        <div>
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" id="password" required>
        </div><br>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
<?php require_once 'footer.html';
?>