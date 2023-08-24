@extends('app')
@section('title', 'Home')
@section('headerTitle', 'FEEL GOOD ABOUT YOUR FOOD')
@section('content')
    <div class="row gap-5 justify-content-between mx-5">
        <div class="col-md-6">
            <div class="d-flex flex-column pt-5">
                <h1 class="">
                    Bienvenu dans notre resto
                </h1>
                <p class="mb-3 mt-4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non iusto quae eius aut voluptatum
                    animi cumque ipsa nostrum at voluptate? Odit quae assumenda aliquid nesciunt eveniet! Unde rem
                    illo ea.
                </p>
                <div class="">
                    <img class="img-fluid rounded-3  my-4" src="{{asset('images/augrachoco.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-4 pb-5 d-none d-md-block">
            <img class="img-fluid rounded-3 w-100" src="{{asset('images/riz.jpg')}}" alt="">
        </div>
    </div>
    <section class="menu container my-5">
        <div class="row me-md-5 py-4 gap-5 justify-content-between">
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <div class="text ">
                    <h1 class="mb-4">
                        Nos Menus A votre disposition
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur cumque dolorum
                        eaque exercitationem harum itaque maiores molestiae nobis non, numquam, odio officia pariatur
                        perspiciatis possimus quam quidem reiciendis repudiandae tempora temporibus tenetur, ullam
                        voluptatum.
                    </p>
                </div>
                <a href="" class="align-self-end mt-4">Voir plus</a>
            </div>
            <div class="p-4 m-auto bg-dark col-md-7 col text-white">
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Pâtes</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Fast Food</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Local</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Ivoirienne</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Thé</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="bloc-menu-item my-1 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="">Boisson</h2>
                    <div class="vr text-white align-self-center"></div>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery container my-5 py-5">
        <div class="row gap-3">
            <div class="col card-cover"
                 style="height: 18rem; background-image: url('{{asset("images/augras.jpg")}}')">
                {{-- <img src="{{asset('images/augras.jpg')}}" alt="" class="img-fluid h-100 w-100">--}}
            </div>
            <div class="col card card-cover"
                 style="height: 18rem; background-image: url('{{asset("images/augraviande.jpg")}}')">
                {{-- <img src="{{asset('images/augraviande.jpg')}}" alt="" class="img-fluid h-100 w-100">--}}
            </div>
            <div class="col card card-cover"
                 style="height: 18rem; background-image: url('{{asset("images/azot.jpg")}}')">
                {{-- <img src="{{asset('images/azot.jpg')}}" alt="" class="img-fluid h-100 w-100">--}}
            </div>
        </div>
    </section>
    <section class="apropos p-md-5" id="#apropos">
        <div class="row justify-content-between mx-5">

            <div class="d-none d-md-block col-md-5 mt-5 pt-5">
                <img class="img-fluid rounded-3 w-100" src="{{asset('images/riz.jpg')}}" alt="">
            </div>
            <div class="col-md-4  pb-5">
                <div class="d-flex flex-column mb-5">
                    <h1 class="">
                        Un peu de nous
                    </h1>
                    <p class="mb-3 mt-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non iusto quae eius aut voluptatum
                        animi cumque ipsa nostrum at voluptate? Odit quae assumenda aliquid nesciunt eveniet! Unde rem
                        illo ea.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque deleniti laboriosam maxime
                        quasi veniam. Beatae debitis nulla porro recusandae.
                    </p>
                    <div>
                        <img class="img-fluid rounded-3  my-4" src="{{asset('images/h.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">

    </section>
@endsection
