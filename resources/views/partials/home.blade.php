<section>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
            <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>{{$home1content[0]->title}}</h1>
                <ul>
                    @foreach ($home1Links as $link)
                        <li><i class="{{$link->icon}}"></i> {{$link->link}}</li>
                    @endforeach
                </ul>
                <div class="mt-3">
                    @foreach ($homeButtons as $btn)
                        <a href="{{$btn->src}}" class="btn-get-started scrollto">{{$btn->btn}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{asset($home1content[0]->img)}}" class="img-fluid" alt="">
            </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
    
            <div class="row content">
            <div class="col-lg-6">
                <h2>{{$home2content[0]->title}}</h2>
                <h3>{{$home2content[0]->title2}}</h3>
                <div>
                    <img src="{{asset($home2content[0]->img)}}" alt="image venant d'internet" height="200px">
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                {{$home2content[0]->para}}
                </p>
                <ul>
                    @foreach ($home2Links as $link)
                        <li><i class="{{$link->icon}}"></i>{{$link->link}}</li>
                    @endforeach
                </ul>
                <p class="font-italic">
                {{$home2content[0]->span}}
                </p>
            </div>
            </div>
    
        </div>
    </section><!-- End About Section -->
</section>
