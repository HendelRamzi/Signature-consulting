@extends('website.layout.website')


{{-- Title of the page --}}
@push('title')
    references
@endpush


@push('custom-css')
<style>
    body{
        background-color: #e9e9c3  ;
    }

</style>
@vite(["resources/css/reference/style.css"])
@endpush

@section('content') 

<section class="container" style="overflow: hidden;">
    <div class="row">
        <div class="col-12 banner-section" data-aos="zoom-in">
            <span>Nos reference</span>
            <h1>Partenaire des <br>marques <br>d'exception</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quisquam ducimus error a vel nobis id aliquid libero dolorum vero?</p>
        </div>
    </div>
</section>


<section class="container" style=" padding: 50px 0px 100px 0px;" data-aos="zoom-in">
    <div class="row">


        @foreach ($references as $ref)
        <div class="col-6 col-lg-3" style="padding: 4px;">
            <div class="ref-card">
                <div class="ref-img">
                    <img class="img-fluid" width="100" src="{{asset($ref->logo)}}" alt="">
                </div> 
                <div class="ref-desc">
                    <h1>{{$ref->name}}</h1>
                    <p>{{$ref->desc}}</p>
                </div> 
            </div>
        </div> 
        @endforeach

    </div>
</section>




@include('website.layout.cta')


@endsection

@push('custom-js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    
<script>
    AOS.init();
</script>

@endpush