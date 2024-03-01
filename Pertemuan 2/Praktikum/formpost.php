<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="background-color: whitesmoke;">Form Registrasi Pengguna</h1><hr>
    <form action="submit_post.php" method="post" >    
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
</body>
</html>