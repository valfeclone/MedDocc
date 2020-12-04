<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/user-style.css') }}" rel="stylesheet">

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
                    <a href="#" class="nav-links" id="about-click">Profile</a>
                </li>
            </ul>
        </nav>

        <div class="jumbotron">
            <div class="user-features">
                <a href="/user/reserve">
                    <div class="meddoc-features shadow-drop-2-center">
                        <img src="{{ asset('assets/doctor.png') }}" alt="doctor Image" class="img-header">
                        <h3>Pesan Dokter</h3>
                    </div>
                </a>
                <a href="#">
                    <div class="meddoc-features">
                        <img src="{{ asset('assets/medical-history.png') }}" alt="medical record Image" class="img-header">
                        <h3>Riwayat Pemeriksaan</h3>
                    </div>
                </a>
            </div>
            <div class="features-explain">
                <div class="features-explained">
                    <h2>Pesan Dokter</h2>
                    <p>Pesan Dokter dan isi alamatmu sekarang juga !
                    </p>
                </div>
                <div class="features-explained">
                    <h2>Riwayat Pemeriksaan</h2>
                    <p>Cek riwayat dari pemeriksaan sebelumnya.
                    </p>
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
                          MEDDOC adalah platform untuk memesan dokter panggilan ke rumah atau tempatmu berada, tinggal klik pesan
                          maka dokter akan langsung jalan ke alamat yang dituju.
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
                        <p><strong>info@meddoc.com</strong></p>
                        <h3 class="white-color logo-company">Address</h3>
                        <br>
                        <p><strong>Jalan Pogung Palace Kos Fadhlan</strong></p>
                        <p><strong>Sleman</strong></p>
                        <p><strong>Yogyakarta</strong></p>
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
