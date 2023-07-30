@extends('website.layout.website')


{{-- Title of the page --}}
@push('title')
    360°
@endpush


@push('custom-css')
<style>
    body{
        background-color: #e9e9c3 ;
    }
</style>
@vite(["resources/css/360/style.css"])
@endpush

@section('content') 
<main>
    <section class="container banner_section">
        <div class="row" style="background-color: #3b7d7d; border-radius: 10px;"
            data-aos="zoom-in"
        >
            <div class="col-12 banner_text">
                <h3 data-aos="fade-up" data-aos-delay="100">Agence 360°</h3>
                <h1 data-aos="fade-up" data-aos-delay="200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil odit quasi consectetur pariatur laborum?
                </h1>
            </div>
        </div>
    </section>    


    <section class=" container-fluid module_section" style="overflow: hidden; padding: 100px 0px;">

        @foreach ($domains as $i => $domain)
            @if (($i % 2) == 0)
                <div class="row" style="padding: 100px 0px;" >
                    <div class="col-12 col-lg-6  img-carousel" data-aos="zoom-in" data-aos-duration="1000">
                        <!-- slider come here -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_01.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_02.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_03.jpg" alt="">
                            </div>
                            </div>
                        </div>
        
                    </div>
        
        
                    <div class="col-12 col-lg-6 ">
                        <!-- Text content go here -->
                        <div class="module_desc">
                            <div class="img_div" data-aos="zoom-in" >
                                <img data-aos="zoom-in" data-aos-delay="100" src="{{asset($domain->icon)}}" alt="">
                            </div>
                            <h1 data-aos-delay="200" data-aos="fade-up">{{$domain->name}}</h1>
                            <div class="title_under"></div>
                            <p data-aos-delay="400" data-aos="fade-up">{{$domain->desc}}</p>
                        </div>
                    </div>
        
        
                </div>
            @else
                <div class="row" style="padding: 100px 0px;">
                    <div class="col-12 col-lg-6 ">
                        <!-- Text content go here -->
                        <div class="module_desc">
                            <div class="img_div" data-aos="zoom-in" data-aos-delay="100">
                                <img  width="100" src="{{asset($domain->icon)}}" alt="">
                            </div>
                            <h1 data-aos-delay="200" data-aos="fade-up">{{$domain->name}}</h1>
                            <div class="title_under"></div>
                            <p data-aos-delay="400" data-aos="fade-up">{{$domain->desc}}</p>
                        </div>
                    </div>
        
                    <div class="col-12 col-lg-6  img-carousel" data-aos="zoom-in" data-aos-duration="1000">
                        <!-- slider come here -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_01.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_02.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/imgs/work_03.jpg" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
        
        
                </div>
    
    
            @endif
        @endforeach



    </section>





    <section class="container-fluid" style=" background-color: #e9e9c3 !important;  padding: 100px 0px 100px 0px; ">
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


</main>

@endsection

@push('custom-js')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init();
</script>

<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay : {
            delay  : 3000
        },
        spaceBetween: 0,
        slidesPerView: 1,
        loop: true,
        speed : 1000,
    });
</script>
@endpush