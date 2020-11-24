<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/login-style.css') }}" rel="stylesheet">

    <title>MEDDOC</title>
</head>
<body>
<div class="login-menu">
        <content>
            <h1>MEDDOC</h1><br>
            <h1>REGISTRASI DOKTER</h1><br>
            <div class="login-form">
                <form method="POST" action="/doctor/register" class="register__form" id="theform" enctype="multipart/form-data">
                    @csrf
                    <div class="login-input">
                        <label for="name">Nama</label><br>
                        <input type="text" id="name" name="name" placeholder="Louis Raven" class="input" required autofocus><br>
                    </div>

                    <div class="login-input">
                        <label for="email">E-mail</label><br>
                        <input type="email" id="email" name="email" placeholder="raven123@gmail.com" class="input" required><br>
                    </div> 

                    <div class="login-input">
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" placeholder="Password" class="input" required><br>
                    </div> 

                    <div class="login-input">
                        <label for="repassword">Konfirmasi Password</label><br>
                        <input type="password" id="repassword" name="repassword" placeholder="Re-password" class="input" required>
                    </div>

                    <div class="login-input file-input">
                        <label for="file-upload-1" class="input input-file-label">Upload Bukti Izin Praktik</label><br>
                        <input type="file" placeholder="Upload Bukti Praktik" name="bukti-praktik" id="file-upload-1" accept=".jpg,.jpeg,.png">
                    </div> 

                    <div class="submit-form">
                        <input type="submit" class="submit-button font-tipis small-text" value="REGISTER">
                    </div>
                </form>
            </div>
        </content>
    </div>
</body>
</html>