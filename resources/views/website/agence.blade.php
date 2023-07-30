@extends('website.layout.website')


@push('title')
    agence
@endpush

@push('custom-css')
<style>
    body{
        background-color: #e9e9c3;
    }
</style>
@vite(["resources/css/agence/style.css"])
@endpush

@section('content') 

<section class="container-fluid" style="background-color: #e9e9c3 !important; overflow: hidden;">
    <div class="row">
        <div class=" col-12 col-lg-1 small_banner">
            <h3>agence de communication 360° </h3>
        </div>  
        <div class=" col-12 col-lg-11 banner-container" style="padding: 0px !important;">
            <div class="banner-content row" >

                <div class=" col-12 col-md-6 banner-left ">
                    <span>Agence 360°</span>
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <div class="divider-banner d-none d-lg-block"></div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus nam natus officiis perferendis magnam eos. Aut, eveniet aspernatur saepe reiciendis incidunt.</p>
                    <a href="#start" class="button" style="color: #ffd770; text-decoration: none;">Explorez</a>
                </div>
                
                <div class="col-12 col-md-6 banner-right" >
                    <div class=" banner-img">
                        <img width="300" src="{{Vite::asset('resources/imgs/Signature.png')}}" alt="">
                    </div>
                </div>

                <div class=" col-12 slider-section" style="margin-top: 50px;"> 
                    <div class="sliders-container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliders-container">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    #<span>perf </span>#<b>bigidea </b>#scroll <b>#mèmepaspeur </b>#UGC #<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b> #UGC </b>#<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b>#UGC </b>                                    
                                </div>
                                <div class="swiper-slide">
                                    #<span>perf </span>#<b>bigidea </b>#scroll <b>#mèmepaspeur </b>#UGC #<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b> #UGC </b>#<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b>#UGC </b>                                    
                                </div>
                                <div class="swiper-slide">
                                    #<span>perf </span>#<b>bigidea </b>#scroll <b>#mèmepaspeur </b>#UGC #<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b> #UGC </b>#<span>perf </span>#<b>bigidea </b>#scroll <b>#mème</b>paspeur <b>#UGC </b>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliders-container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                                <div class="swiper-slide">
                                    #<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>#<span>sympalaDA </span>#<b>contenu </b>#KPI <b>#yapasdesujet </b>#datamarketing <b>#POV </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container" style="padding: 100px 0px; overflow: hidden;" id="start">


    <div class="row ">
        <div class="col-12" style="padding: 100px 0px 100px 1rem;">
            <h2 class="rea-title">
                <span class="floating" style='font-family: "Always W01 Black"; font-style: italic;'>Nos</span> 
                <span class="title" style="color: #3b7d7d;">chiffres cles</span>
            </h2>
            <p style="color: #3b7d7d; font-family: 'eras'; max-width: 40ch;  ">Votre satisfaction et l’atteinte de vos objectifs sont au coeur de notre engagement.</p>
        </div>
        <!-- <div class="col-12  number-container " style="margin-bottom: 100px;">
            <h3 class="1.5rem">Nos chiffres cles</h3>
            <hr>
            <p style="font-family: 'eras';">
                Votre satisfaction et l’atteinte de vos objectifs sont au coeur de notre engagement.
            </p>
        </div> -->
        <div class="number-item col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center"
            data-aos="zoom-in-down" data-aos-duration="2000" data-aos-delay="100"
        >
            <img src="{{Vite::asset('resources/svg/client.svg')}}" alt="" style="margin-bottom: 30px;">
            <h1 id="client_counter">300</h1>
            <p>Clients</p>
        </div>
        <div class="number-item col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center"
            data-aos="zoom-in-down"  data-aos-duration="2000" data-aos-delay="300"
        >
            <img src="{{Vite::asset('resources/svg/knowledge.svg')}}" alt="" style="margin-bottom: 30px;">
            <h1 id="rea_counter">1500</h1>
            <p>Réalisations</p>
        </div>
        <div class="number-item  col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center"
            data-aos="zoom-in-down"  data-aos-duration="2000" data-aos-delay="600"

        >
            <img src="{{Vite::asset('resources/svg/exp.svg')}}" alt="" style="margin-bottom: 30px;">
            <h1>10 ans </h1>
            <p>Experiences</p>
        </div>
        <div class="number-item col-6 col-lg-3 d-flex flex-column justify-content-center align-items-center"
            data-aos="zoom-in-down"  data-aos-duration="2000" data-aos-delay="900"

        >
            <img src="{{Vite::asset('resources/svg/client.svg')}}" alt="" style="margin-bottom: 30px;">
            <h1>300</h1>
            <p>Clients</p>
        </div>

        <div class="col-12 number-cta d-flex align-items-center">
            <button class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                <span> EN SAVOIR PLUS</span>
                <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </button>
        </div>

    </div>
</section>


<section class="container-fluid rea-section" style=" overflow: hidden;">
    <div class="row">
        <div class="col-12 " style="padding: 100px 0px 40px 0px;">
            <h2 class="rea-title ">
                <span class="floating" style='font-family: "Always W01 Black"; font-style: italic;'>Nos</span> 
                <span class="title">Realisations</span>
            </h2>
            <p style="color: #336E6E; font-family: 'eras';  ">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
        <div class="col-12">
            <div class="row">

                @foreach ($realisations as $rea)
                    <div class="col-12 col-md-6 col-lg-4 center no-padding no-margin" data-aos="fade-up" data-aos-duration="500" data-aos-delay="000">
                        <figure class="no-margin img-figure">
                            <figcaption class="img-caption">
                                <h2>{{ $rea->name }}</h2>
                            </figcaption>
                            <img class="rea-image" src="{{asset($rea->thumb)}}" alt="">
                        </figure>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-12 text-center" style="padding: 100px 0px 100px 0px;">
            <button class="button"
            data-aos="fade-up" data-aos-duration="500" data-aos-delay="000"
            >Voir plus</button>
        </div>
    </div>
</section>


<section class="container-fluid" style="background-color: #3b7d7d; padding: 100px 0px; overflow: hidden;">
    <div class="row">
        <div class="col-12" style="padding: 100px 0px 40px 5rem;">
            <h2 class="rea-title">
                <span class="floating" style='font-family: "Always W01 Black"; font-style: italic;'>Nos</span> 
                <span class="title" style="color: #e9e9c3;">Services</span>
            </h2>
            <p style="color: #ffd770; font-family: 'eras';  ">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
        <div class="col-12">
            <div class="row g-5 px-5">

                @foreach ($services as $service)
                <div class="col-12 col-md-6 col-lg-4" >
                    <div class="service-card" data-aos="zoom-in">
                        <div class="card-top">
                            <div class="icon">
                                <img src="{{asset($service->icon)}}" alt="">
                            </div>
                            <h2>{{$service->name}}</h2>
                        </div>
                        <hr>
                        <div class="card-bottom">
                            <p>{{$service->desc}}</p>
                        </div>
                    </div>
                </div>                  
                @endforeach

            </div>
        </div>
        
        <div class="col-12 service-cta d-flex align-items-center">
            <button class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                <span> VOIR PLUS</span>
                <svg 
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg>
            </button>
        </div>


    </div>
</section>



<section class="container-fluid" style="padding: 100px 0px; ">
    <div class="row container mx-auto">
        <div class="col-12 text-center ref-titles">
            <h3>Nos partenaires</h3>
            <h1>Nous font confiance</h1>
        </div>
        <div class="col-12">
            <div class="row g-4  ref-list" >

                @foreach ($references as $ref)
                    <div class="col-6 col-md-3 col-lg-2 ref-item">
                        <img class="img-fluid" src="{{asset($ref)}}" alt="">
                    </div>                  
                @endforeach



            </div>
        </div>
    </div>
</section>



@include('website.layout.cta')


@endsection

@push('custom-js')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init();
</script>





<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay : 0,
        },
        spaceBetween: 0,
        slidesPerView: 'auto',
        loop: true,
        speed : 100000, 
    });

    var swiperr = new Swiper(".mySwiper2", {
        autoplay: {
            delay : 0,
            reverseDirection: true,
        },
        spaceBetween: 0,
        slidesPerView: 'auto',
        loop: true,
        speed : 100000, 
    });

    var workSlider = new Swiper('.workSwiper', {
        autoplay: {
            delay : 0,
            reverseDirection: true,
        },
        loop: true,
        slidesPerView: '3',
        spaceBetween: 30,
        speed : 9000, 
    })
</script>   



<script type="module">
    import { CountUp } from './node_modules/countup.js/dist/countUp.min.js';
    const client = new CountUp('client_counter', 300, { enableScrollSpy: true,
        duration: 2,
        useEasing: false,
        useGrouping: false,
    });

    const rea = new CountUp('rea_counter', 1500, { enableScrollSpy: true,
        duration: 2,
        useEasing: false,
        useGrouping: false,
    });


    if (!client.error || !rea.error) {
        client.start();
        rea.start();
    } else {
        console.error(client.error);
        console.error(rea.error);
    }
</script>
@endpush