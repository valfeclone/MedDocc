<x-guest-layout>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- CSS -->
      <link href="{{ asset('/css/home_style.css') }}" rel="stylesheet">
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
      </header>
  </body>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
