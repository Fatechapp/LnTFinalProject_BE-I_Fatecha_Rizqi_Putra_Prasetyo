<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--CSS-->
    <link rel="stylesheet" href="{{asset('style/welcome.css')}}">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Website Aplikasi Pendataan Barang</h1>
        <div class="login-container">
            <form method="" action="">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit">Login</button>
                </div>

                <div class="link-to-register">
                    <p>belum memiliki akun? <a href="/register">klik di sini!</a></p>
                </div>

            </form>
        </div>
    </div>
</body>
</html>