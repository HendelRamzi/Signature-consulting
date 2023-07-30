@extends('website.layout.website')


{{-- Title of the page --}}
@push('title')
    portfolio
@endpush


@push('custom-css')
<style>
    body{
        background-color: #e9e9c3  ;
    }
</style>
@vite(["resources/css/portfolio/style.css"])
@endpush

@section('content') 
<section class="container-fluid">
    <div class="row " >   
        
        @foreach ($realisations as $rea)
            <div class="col-12 col-md-6 col-lg-4 center no-padding no-margin" data-aos="fade-up" data-aos-duration="500" data-aos-delay="000">
                <figure class="no-margin img-figure">
                    <figcaption class="img-caption">
                        <h2>{{$rea->name}}</h2>
                    </figcaption>
                    <img class="rea-image" src="{{asset($rea->thumb)}}" alt="">
                </figure>
            </div>            
        @endforeach


    </div>
</section>

@endsection

@push('custom-js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script>
    AOS.init();
</script>
@endpush