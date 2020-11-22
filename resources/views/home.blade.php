<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/home_style.css') }}" rel="stylesheet">

    <title>MEDDOC</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-icon" id="hamburger-icon-id">
                <i class="fa fa-bars"></i>
            </span>
            <a href="#" class="logo-company"><em><strong>MEDDOC</strong></em></a>
            <ul class="main-nav" id="main-nav-id">
                <li>
                    <a href="#about-us" class="nav-links" id="about-click">About Us</a>
                </li>
                <li>
                    <a href="#meet-guide-id" class="nav-links" id="meet-click">Contact</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="nav-links" id="contact-click">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="nav-links" id="contact-click">Register</a>
                </li>
            </ul>
        </nav>

        <div class="jumbotron">
            <div class="image-jumbotron">
                <img src="{{ asset('assets/doctor-home.png') }}" alt="Header Image" class="img-header">
            </div>
            <div class="container-column">
                <div class="column-content">
                    <p class="title-header green-light-color">Pesan Dokter</span></p>
                    <p class="title-header green-light-color">Sekarang!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris justo, suscipit 
                        sit amet nunc quis, faucibus ultricies nunc. Nullam efficitur semper elit, in vulputate quam. 
                    </p>
                </div>
                <div class="column-button">
                    <button class="button">PESAN</button>
                </div>
            </div>
        </div>
    </header>

</body>
</html>