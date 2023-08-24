<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{asset("/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/css/header.css")}}">
    {{-- <link rel="stylesheet" href="{{asset("/css/cover.css")}}"> --}}
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" defer></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
</head>
<body style="background-color: black">
<div class=" header">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/"
               class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                {{--                <svg class="bi me-2" width="40" height="32">--}}
                {{--                    <use xlink:href="#bootstrap"/>--}}
                {{--                </svg>--}}
                <span class="fs-4">Logo Restaurant</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
        <div class="branding-header container mt-md-3 mt-2 m-auto d-flex flex-column align-items-center">
            <h1 class="lead fw-bold fs-1 my-md-3 my-lg-5 my-1">
                Bonne nourriture, Bonne vibes
            </h1>
            <p class="my-5 w-75">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis culpa dolore dolorum eius facere
                facilis iusto, minima mollitia nulla odio officiis, quam quia repellat vel velit voluptas! Accusamus
                aperiam asperiores commodi cumque, delectus deleniti dolor dolorem doloremque earum eius, explicabo
                harum hic illum iste iusto laboriosam maxime molestiae necessitatibus.
            </p>
            <div>
                <a href="" class="btn btn-primary my-md-3 my-1 my-lg-5">
                    Reservez
                </a>
            </div>

        </div>
    </div>
</div>

<main class="px-3 container m-auto my-5">
    <section class="story h-75 container p-5 row gap-2 justify-content-between">
        {{--        <div class="col">--}}
        <div class="col-auto col-md-3">
            <div class="row">
                <div class="col-6">
                    <img class="img-fluid w-100 h-100" src="{{asset('images/brochette.jpg')}}" alt="" srcset="">
                </div>
                <div class="col-6 pt-{{rand(2,4)}}">
                    <img class="img-fluid w-100 h-100" src="{{asset('images/riz_au_gras.jpg')}}" alt="" srcset="">
                </div>
                <div class="col-6 pt-{{rand(2,4,)}}">
                    <img class="img-fluid w-100 h-100" src="{{asset('images/plantin.jpg')}}" alt="" srcset="">
                </div>
                <div class="col-6 mt-3">
                    <img class="img-fluid w-100 h-100" src="{{asset('images/augrachoco.jpg')}}" alt="" srcset="">
                </div>

            </div>
        </div>
        <div class=" col-auto col-md-8">
            <h1 class="display-2">Notre Histoire</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut culpa cupiditate debitis,
                distinctio ducimus eaque eos est excepturi exercitationem fuga illum in ipsa, ipsam iste labore
                laboriosam libero magni molestias nemo nihil nobis non nulla obcaecati officiis porro possimus quae
                quia quibusdam, quis quo quos recusandae sapiente sequi tempore ut. Architecto autem cupiditate
                debitis eaque nihil perspiciatis veritatis.
            </p>
            <div class="mt-3 text-end">
                <a class="link-body-emphasis link-offset-1-hover" href="">Lire plus a propos de nous</a>
            </div>
        </div>
        {{--        </div>--}}

    </section>
    <section class="special h-50 container p-5 mb-3">
        <div class="d-flex flex-column mt-5">
            <div>
                <h1 class="text-center mb-3">Nos Spécialités</h1>
                <h6 class="text-center mb-5">Commandez vos spécialités chez nous. Nous sommes exclusivement locales en
                    terme
                    de plats specials</h6>
            </div>
            <div class="image-spe row row-cols-1 row-cols-lg-3 gap-3">
                @for($i = 0; $i<3; $i++)
                    <div class="col m-auto card card-cover rounded-4 text-bg-dark"
                         style='background-image: url("../images/ayimoulou.jpg");'>
                        <div
                            class="d-flex flex-column h-100 p-5 m-5 mb-0 justify-content-end align-content-end text-center">
                            <div>
                                <h5 class="">Plat de Fufu</h5>
                                <p class="d-flex flex-row justify-content-between">
                                    <span>Prix:</span>
                                    <span>500/plat</span>
                                </p>
                                <a href="#" class="mt-5 text-center btn btn-outline-primary">Commander</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section class="location container my-3">
        <div class="row gap-2 px-5">
            <aside class="col-md-6 col d-flex flex-column justify-content-between align-items-center">
                <div>
                    <h3 class="p-3">Decouvrez de nouvelles saveurs avec nos plats</h3>
                    <p class="fs-6 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore eius iste
                        repellat sit sunt? Aliquam
                        aperiam commodi, culpa cupiditate dolores eius esse magnam maiores nihil sapiente tempora, velit
                        veniam voluptatum!</p>
                </div>
                <a href="" class="btn btn-outline-primary my-3">Reservez maintenant</a>
            </aside>
            <div class="restau-image col-md-5 m-auto">
                <img src="{{asset('images/h.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="testimonial my-3">
        <h3 class="text-center py-5">Ceux que les gens disent sur nous !!</h3>

        <div id="carouselExampleIndicators" class="carousel slide"
             style="background-image: url('../images/h2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"
             data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active d-flex justify-content-center align-items-center  bg-dark bg-opacity-50 p-2">
                    <div class="testimonial-card d-flex flex-column flex-md-row gap-md-2 justify-content-md-between align-items-md-center justify-content-between align-items-center gap-1">
                        <div class="circle-avatar"></div>
                        <p class="text-white m-auto py-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit.
                            Aliquam consectetur error eum, expedita illo
                            inventore iure laboriosam numquam odio placeat praesentium qui ratione totam velit!
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    {{-- <section class="gallery">
         <h2>Gallery</h2>
         <div class="m-auto">
             <div class="row gap-2">
                 @for($i=0; $i<3; $i++)
                     @if($i == 0)
                         <div class="col-3">
                             <img src="{{asset('images/casque.jpg')}}" alt="" class="img-fluid h-100">
                         </div>
                     @elseif($i == 1)
                         <div class="col-md-3">
                             <div class="d-md-flex flex-md-column-reverse gap-3 justify-content-lg-center">
                                 <div>
                                     <img src="{{asset('images/casque.jpg')}}" alt="" class="img-fluid">
                                 </div>
                                 <div>
                                     <img src="{{asset('images/casque.jpg')}}" alt="" class="img-fluid">
                                 </div>
                             </div>
                         </div>
                     @else
                         <div class="col-3">
                             <img src="{{asset('images/casque.jpg')}}" alt="" class="img-fluid h-100">
                         </div>
                     @endif
                 @endfor
             </div>
         </div>
     </section>--}}
</main>

<footer class="container pt-5 pb-5" style="background-image: url('{{asset('images/footer-map.png')}}')">
    <section class="row">
        <div class="col-4 col-md-4">
            <h2 class="h1 text-danger">
                Logo
            </h2>
        </div>
        <div class="col-4 col-md-4">
            <ul class="nav flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Nous contactez</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservez</a>
                </li>
            </ul>
        </div>
        <div class="col-4 col-md-4">
            <ul class="nav flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="#">Instagram</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FaceBook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WhatsApp</a>
                </li>
            </ul>
        </div>
    </section>
    <div class="text-center mt-5">
        copiryght &COPY;
    </div>
</footer>
</body>
</html>
