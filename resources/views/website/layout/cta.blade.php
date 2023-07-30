<section class="container-fluid">
    <div class="row">
        <div class="col-12" style="height: 50vh; background-image : url('{{Vite::asset('resources/imgs/contact.jpg')}}');
            background-position: center; background-size: cover; position: relative; 
            display: flex; justify-content: center; align-items: center;
        "  data-aos="zoom-in" data-aos-duration="500" data-aos-delay="00" >  
            <div class="overlay-dark" style="
                width: 100%;
                height: 100%;
                z-index: 9;
                background-color: black;
                opacity: 0.6;
                position: absolute;
                top: 0;
                left: 0;    
            "></div>

            <div class="contact-desc" style=" position: relative; z-index: 10;">
                
                <!-- <h1 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">Un projet en Tete ?</h1> -->
                <h3 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                    Parlez-nous <br> de votre projet
                </h3>

                <a href="{{route('website.contact')}}" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300" >Contactez nous</a>
            </div>
        </div>
    </div>
</section>

