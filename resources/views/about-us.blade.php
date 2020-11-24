<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/about-us-style.css') }}" rel="stylesheet">

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

            <div class="image-bg">
                <div class="text-bg">
                    <h1>Our Company</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Deserunt nisi ab aut accusantium autem, minima inventore facere velit 
                        totam necessitatibus enim neque adipisci hic ipsa voluptatem minus blanditiis 
                        itaque fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Deserunt nisi ab aut accusantium autem, minima inventore facere velit 
                        totam necessitatibus enim neque adipisci hic ipsa voluptatem minus blanditiis 
                        itaque fugit.
                    </p>
                </div>
            </div>
            
        </div>
    </header>

    <div class="body-page">
        <div class="meet-guide" id="meet-guide-id">
            <article class="meet-guide-article">
                <div class="title-article">
                    <p class="title-button font-tipis small-text white-color">Our Mission</p>
                </div>
                <div class="title-meet-guide">
                    <p class="center-paragraph font-tipis bigger-text tosca-color">"Practical Handling For Better Future"</p>
                </div>
                <div class="vision-section">
                    <p class="center-paragraph font-tipis tosca-color">Our Visions</p>
                </div>
                <div class="container-card">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/attention.png') }}">
                        </div>
                        <div class="card-section">
                            <h3>Praktis</h3>
                            <br>
                            <p>
                                Bisakah kita tetap memberi, walau tak suci.
                                Bisakah terus mengobati, walau membiru.
                                Cukup besar tuk mengampuni, tuk mengasihi.
                                Tanpa memperhitungkan masa yang lalu.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/attention.png') }}">
                        </div>
                        <div class="card-section">
                            <h3>Praktis</h3>
                            <br>
                            <p>
                                Bisakah kita tetap memberi, walau tak suci.
                                Bisakah terus mengobati, walau membiru.
                                Cukup besar tuk mengampuni, tuk mengasihi.
                                Tanpa memperhitungkan masa yang lalu.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/attention.png') }}">
                        </div>
                        <div class="card-section">
                            <h3>Praktis</h3>
                            <br>
                            <p>
                                Bisakah kita tetap memberi, walau tak suci.
                                Bisakah terus mengobati, walau membiru.
                                Cukup besar tuk mengampuni, tuk mengasihi.
                                Tanpa memperhitungkan masa yang lalu.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets/attention.png') }}">
                        </div>
                        <div class="card-section">
                            <h3>Praktis</h3>
                            <br>
                            <p>
                                Bisakah kita tetap memberi, walau tak suci.
                                Bisakah terus mengobati, walau membiru.
                                Cukup besar tuk mengampuni, tuk mengasihi.
                                Tanpa memperhitungkan masa yang lalu.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            </div>
    </div>

</body>