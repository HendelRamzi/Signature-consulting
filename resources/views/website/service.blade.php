@extends('website.layout.website')


{{-- Title of the page --}}
@push('title')
    service
@endpush


@push('custom-css')
<style>
    body{
        background-color: #3b7d7d  ;
    }
</style>
@vite(["resources/css/service/style.css"])
@endpush

@section('content') 
<section class="container-fluid" style="padding: 100px 0px; overflow: hidden;">
    <div class="row mx-auto">


        <div class="col-12 col-lg-5 d-flex flex-column align-items-center pinned-area" style="padding: 2rem;" >
            <h2 class="rea-title" data-aos="zoom-in">
                <span class="floating" style='font-family: "Always W01 Black"; font-style: italic;'>Nos</span> 
                <span class="title" style="color: #e9e9c3;" >services</span>
            </h2>
            <p style="color: #ffd770; text-align: center; font-family: 'eras'; max-width: 50ch; ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, atque quia. Ea, accusamus. Libero assumenda earum praesentium voluptas. Eaque, possimus.
            </p>
        </div>


        <div class="col-12 col-lg-7  " style="padding: 3rem 10px;" >
            <div class="row gy-4">

                @foreach ($services as $service)
                    <div class="col-12 col-md-6 " data-aos="fade-up" data-aos-duration="1000">
                        <div class="service-item h-100">
                            <div class="service-img">
                                {{-- Problem with the svg color and size --}}
                                <img src="{{asset($service->icon)}}" alt="">
                            </div>
                            <h1 class="service-title">{{$service->name}}</h1>
                            <p >{{$service->desc}}</p>
                            <button>Voir le service</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



    </div>
</section>



<section class="container-fluid" style=" background-color: #e9e9c3 !important; padding: 100px 0px 100px 0px;">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init();
</script>






<!-- gsap script -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    let tl = gsap.timeline({
        // yes, we can add it to an entire timeline!
        scrollTrigger: {
            trigger: ".pinned-area",
            pin: true,   // pin the trigger element while active
            scrub: 2, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
            end :"bottom-=650 top",
            start :"top-=100 top", 
            // markers: true, 
        }
    });

</script>


@endpush