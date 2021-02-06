<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg mt-5 mb-5">
    <div class="container pb-5 mb-5">

        <div class="section-title">
        <h2>{{$contactHead[0]->title}}</h2>
        <p>{{$contactHead[0]->para}}</p>
        </div>

        <div class="row">

        <div class="col-lg-6">

            <div class="row">
            <div class="col-md-12">
                <div class="info-box">
                <i class="{{$contactCards[0]->icon}}"></i>
                <h3>{{$contactCards[0]->title}}</h3>
                <p>{{$contactCards[0]->tel1}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box mt-4">
                <i class="{{$contactCards[1]->icon}}"></i>
                <h3>{{$contactCards[1]->title}}</h3>
                <p>{{$contactCards[1]->tel1}}<br>{{$contactCards[1]->tel2}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-box mt-4">
                <i class="{{$contactCards[2]->icon}}"></i>
                <h3>{{$contactCards[2]->title}}</h3>
                <p>{{$contactCards[2]->tel1}}<br>{{$contactCards[2]->tel2}}</p>
                </div>
            </div>
            </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
                <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{$contactForm[0]->name}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{$contactForm[1]->name}}" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{$contactForm[2]->name}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="{{$contactForm[3]->name}}"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">{{$contactButtons[0]->btn}}</button></div>
            </form>
        </div>

        </div>

    </div>
</section><!-- End Contact Section -->
  