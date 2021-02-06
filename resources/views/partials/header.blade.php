<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">{{$headerTitle[0]->name}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @foreach ($headerLinks as $link)
            <li class="active"><a href="{{$link->route}}">{{$link->name}}</a></li>
          @endforeach

        </ul>
      </nav><!-- .nav-menu -->


    </div>
</header><!-- End Header -->