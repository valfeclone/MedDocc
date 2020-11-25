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
            <a href="/home" class="logo-company"><em><strong>MEDDOC</strong></em></a>
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
                    <a href="/reserve"> <button class="button" >PESAN</button> </a>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container-header-flex" id="contact-us">
            <div class="footer-about-contact">
                <div class="flex-row">
                    <div class="card-section">
                        <h3 class="white-color logo-company"><em><strong>MEDDOC</strong></em></h3>
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Porro magni blanditiis quos. Maxime et quis cupiditate temporibus 
                            non nemo aspernatur beatae porro aut laudantium. Placeat maiores 
                            quod quaerat voluptatem iure?
                        </p>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="card-section">
                        <h3 class="white-color logo-company">Contact</h3>
                        <br>
                        <p>Phone number contact:</p>
                        <p><strong>+621916179313</strong></p>
                        <br>
                        <p>E-mail contact:</p>
                        <p><strong>info@selfimprovement.com</strong></p>
                        <h3 class="white-color logo-company">Address</h3>
                        <br>
                        <p><strong>Jalan Pulau Maluku 3 No. 199</strong></p>
                        <p><strong>Denpasar</strong></p>
                        <p><strong>Bali</strong></p>
                    </div>
                </div>
            </div>
            <div class="footer-product-sosmed">
                <div class="flex-row">
                    <div class="card-section">
                        <h3 class="white-color logo-company">Our Value</h3>
                        <br>
                        <ul class="product-list">
                            <li>
                                <a href="#">Practical</a>
                            </li>
                            <li>
                                <a href="#">Healthy </a>
                            </li>
                            <li>
                                <a href="#">Simple</a>
                            </li>
                            <li>
                                <a href="#">Fastest</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex-row">
                    <div class="card-section">
                        <h3 class="white-color logo-company">Social Media</h3>
                        <div class="footer-icon">
                            <a href="#" class="footers-icon"><i class="fa fa-facebook"></i> MEDDOC ID</a>
                            <a href="#" class="footers-icon"><i class="fa fa-twitter"></i> @meddoc.id</a>
                            <a href="#" class="footers-icon"><i class="fa fa-instagram"></i> @meddoc.id</a>
                            <a href="#" class="footers-icon"><i class="fa fa-linkedin"></i> MEDDOC ID</a>
                        </div>
                        <div class="footer-icon-mobile">
                            <a href="#" class="footers-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="footers-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="footers-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="footers-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="border-top">
                <p>Copyright 2020 MEDDOC</p>
            </div>
        </div> 
    </footer>

</body>
</html>
