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
    <link href="{{ asset('/css/home_style.css') }}" rel="stylesheet">

    <title>MEDDOC</title>
    <nav class="navbar">
        <span class="hamburger-icon" id="hamburger-icon-id">
            <i class="fa fa-bars"></i>
        </span>
        <a href="/home" class="logo-company"><em><strong>MEDDOC</strong></em></a>
        <ul class="main-nav" id="main-nav-id">
            <li>
                <a href="/about-us" class="nav-links" id="about-click">About Us</a>
            </li>
            <li>
                <a href="#" class="nav-links" id="meet-click">Contact</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="nav-links" id="contact-click">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="nav-links" id="contact-click">Register</a>
            </li>
        </ul>
    </nav>
</head>
<body>
<div class="login-menu">
        <content>
            <h1>MEDDOC</h1><br>
            <h1>BUAT LAPORAN</h1><br>
            <div class="login-form">
                <form method="POST" action="/user/reserve" class="register__form" id="theform" enctype="multipart/form-data">
                    @csrf
                    <div class="login-input">
                        <label for="name">Nama Pasien</label><br>
                        <input type="text" id="name" name="name" placeholder="Nama Anda" class="input" required autofocus><br>
                    </div>

                    <div class="login-input">
                        <label for="lokasi">Lokasi</label><br>
                        <input type="text" id="lokasi" name="lokasi" placeholder="Jl. Pejuang No. 2" class="input" required><br>
                    </div>

                    <div class="login-input">
                        <label for="keluhan">Keluhan</label><br>
                        <textarea type="text" id="keluhan" name="keluhan" placeholder="Keluhan Anda" class="input" required cols="40" rows="5"></textarea>
                    </div>

                    <div class="submit-form">
                        <input type="submit" class="submit-button font-tipis small-text" value="CARI DOKTER!">
                    </div>
                </form>
            </div>
        </content>
    </div>
</body>
</html>
