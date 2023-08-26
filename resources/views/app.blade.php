<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/dark.min.css')}}">
    <link rel="stylesheet" href="{{asset('fa/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <script src="{{asset('fa/js/all.js')}}" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        <div class="overlay">

        </div>
        <div class="container">
            <header class="blog-header lh-1 py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="btn btn-inverse-light" href="#">Reservez</a>
                        <nav class="nav d-flex justify-content-between">
                        </nav>
                    </div>
                    <div class="col-4 text-center">
                        <a class="blog-header-logo branding" href="#">Restaurant Baguibassa</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
                    </div>
                </div>
            </header>

            <div class="nav-scroller py-1 mb-2 ">
                <nav class="nav d-flex justify-content-center gap-4 text-white">
                    <a class="p-2 {{request()->routeIs('home')}}" href="{{route('home')}}">Home</a>
                    <a class="p-2 {{request()->routeIs('menu') ? 'isactive': ''}}" href="{{route('menu')}}">Menu</a>
                    <a class="p-2 {{request()->routeIs('gallery') ? 'isactive': ''}}"
                        href="{{route('gallery')}}">Gallery</a>
                    <a class="p-2 {{request()->routeIs('about') ? 'isactive': ''}}" href="{{route('about')}}">About</a>
                    <a class="p-2 {{request()->routeIs('contact') ? 'isactive': ''}}"
                        href="{{route('contact')}}">Contact-us</a>
                </nav>
            </div>
            <div class="branding w-50 text-center pt-5 mx-auto display-1">
                @yield('headerTitle')
            </div>
        </div>
    </div>

    <main class="container pt-5 my-5">
        @yield('content')
    </main>
    <div class="container mt-5">
        <footer class="mt-3">
            <div class="row">
                <div class="col-6 col-md-3 mb-3">
                    <h4 class="mb-3 text-decoration-underline text-dark-emphasis branding">Restau Nom ou Logo</h4>
                    <div class=" flex-column">
                        <p class="">
                            Nous sommes joignable 24/24 au numéros ci-dessous et à l'adresse ci dessous.
                        </p>
                        <div class="my-3">
                            <div class="d-flex flex-column justify-content-between align-items-center mb-2">
                                <span class="align-self-start mb-1"><i class="me-3 fa fa-location-pin"></i>Adresse:</span>
                                <p class="align-self-start">Kara, route eyadema face lycée-kara</p>
                            </div>
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <span class="align-self-start mb-1"><i class="me-3 fa fa-phone-alt"></i></i>Téléphone:</span>
                                <p class="align-self-start">98764414 / 92407089</p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-6 col-md-4 mb-3 p-5 pt-0 text-center">
                    <h4 class="mb-4 text-decoration-underline text-dark-emphasis">Pages</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="p-0">Menu</a></li>
                        <li class="nav-item mb-2"><a href="#" class="p-0">Gallery</a></li>
                        <li class="nav-item mb-2"><a href="#" class="p-0">Contact</a></li>
                        <li class="nav-item mb-2"><a href="#" class="p-0">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h4 class="mb-4 text-decoration-underline">Ouverture:</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-1">Lundi-Vendredi:</li>
                        <i class="nav-item mb-2 px-2">06h-00h</i>
                        <li class="nav-item mb-1">Samedi-Dimanche:</li>
                        <i class="nav-item mb-2 px-2">08h-02h</i>

                    </ul>
                </div>

                <div class="col-md-3 mb-3">
                    <form>
                        <h4 class="mb-4 text-decoration-underline text-dark-emphasis">Nous joindre par mail</h4>
                        <p class="mb-2">Nous vous repondrons très vite</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter" class="visually-hidden">Email address</label>
                            <input id="newsletter" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-inverse-primary" type="button">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center py-4 my-4 border-top">
                <p>&copy; 2023 Company, Inc. All rights reserved.</p>
                <ul class="nav gap-5">
                    <li class="nav-item mb-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-2x fa-facebook mb-2 text-primary"></i>
                        <a href="#" class=" p-0 text-body-secondary">FaceBook</a>
                    </li>
                    <li class="nav-item mb-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-2x fa-instagram mb-2 text-danger"></i>
                        <a href="#" class=" p-0 text-body-secondary">Instagram</a>
                    </li>
                    <li class="nav-item mb-2 d-flex flex-column justify-content-center align-items-center">
                        <i class="fab fa-2x fa-whatsapp mb-2 text-success"></i>
                        <a href="#" class=" p-0 text-body-secondary">WhatsApp</a>
                    </li>

                </ul>
            </div>
        </footer>
    </div>
</body>

</html>
