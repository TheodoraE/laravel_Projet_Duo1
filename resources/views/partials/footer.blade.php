<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; {{$footerCopy[0]->copy1}} <strong><span>{{$footerCopy[0]->copy2}}</span></strong>{{$footerCopy[0]->copy3}}
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
          {{$footerCopy[0]->a1}}<a href="https://bootstrapmade.com/"> {{$footerCopy[0]->a2}}</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">

        @foreach ($footerIcons as $icon)
          <a href="#" class="{{$icon->name}}"><i class="{{$icon->class}}"></i></a>  
        @endforeach
        
      </div>
    </div>
</footer><!-- End Footer -->