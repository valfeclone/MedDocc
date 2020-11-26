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
            <h1>LOGIN ADMIN</h1><br>
            <div class="login-form">
                <form method="POST" action="/admin/login">
                    @csrf
                    <div class="login-input">
                    <!--<label for="uname">username:</label><br>-->
                    <input type="text" id="email" placeholder="E-mail" name="email"><br>
                    </div>

                    <div class="login-input">
                        <!--<label for="password">password:</label><br>-->
                        <input type="password" placeholder="Password" id="password" name="password">
                    </div> 

                    <x-jet-button class="ml-4">
                    {{ __('Login') }}
                    </x-jet-button>
                </form>
            </div>
        </content>
    </div>
</body>
</html>