<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link href="{{ asset('/css/waiting-style.css') }}" rel="stylesheet">
    <title>MEDDOC</title>
</head>
<body>
<div class="waiting-page">
        <content>
            <!-- user telah kirim keluhan -->
			<!-- tunggu sistem mencari dokter -->
			<!-- tunggu dokter acc request kita -->
			<!-- kasih gif "searching" sabi -->
            <div class="gif-wait">
                <img src="{{ asset('assets/gif-waiting.gif') }}" alt="Header Image" class="img-header">
            </div>

            <div class="wait-text">
                <h1>MEDDOC</h1><br>
                <h1>MENUNGGU DOKTER</h1><br>
            </div>
            
        </content>
    </div>
</body>
</html>