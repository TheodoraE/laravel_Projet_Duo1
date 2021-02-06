<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us mt-5 pt-3">
    <div class="container">

        <div class="row mt-5">
            @foreach ($articleData as $article)
                <div class="col-lg-4">
                    <div>
                        <h3 class="text-center">{{$article->title}}</h3>
                    </div>
                    <div class="box">
                        <span>{{$article->num}}</span>
                        <h4>{{$article->lorem}}</h4>
                        <p>{{$article->p}}</p>
                    </div>
                </div>
            @if ($loop->iteration %3 ==0)
                </div>               
                <div class="row mt-4">
            @endif
            @endforeach

    </div>
</section><!-- End Why Us Section -->