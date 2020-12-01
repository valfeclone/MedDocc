<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/reserve-style.css') }}" rel="stylesheet">
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
            <h1>PESAN DOKTER</h1><br>
			<!-- isi form buat pesan dokter, keluhan penyakit dll -->
            <div class="login-form">
                <form>
                    <div class="login-input">
                        <label for="uname">Nama</label><br>
                        <input type="text" id="uname" name="uname"><br>
                    </div>

                    <div class="login-input">
                        <label for="uname">Lokasi</label><br>
                        <input type="text" id="lokasi" name="lokasi"><br>
                    </div>

                    <div class="login-input">
                        <label for="uname">Keluhan</label><br>
                        <input type="text" id="keluhan" name="keluhan"><br>
                    </div>

                    <div class="submit-form">
                        <p class="submit-button font-tipis small-text">Submit</p>
                    </div>
                </form>
            </div>
        </content>
    </div>
</body>
</html>
