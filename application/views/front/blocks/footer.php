<footer>
  <section class="newsletter">
    <div class="bg-picture newsletter-bg lazy" data-bg="<?= file_url(). $newsletter_descriptions->photo ?>.webp">
      <div class="newsletter-bg-mask"></div>
    </div>
    <div class="container-fluid px-3 px-sm-5 newsletter-container">
      <div class="row text-center mb-4">
        <div class="col-12">
          <h1 class="news-title"><?= $newsletter_descriptions->title ?></h1>
          <p class="news-subtitle"><?= $newsletter_descriptions->subtitle ?></p>
          <form class="form-inline" method="POST" action="<?= base_url(). 'subscribers/add' ?>">
            <div class="d-flex w-100 flex-wrap justify-content-center">
              <div class="md-form md-outline email-container m-0 mb-3" style="height: 60px">
                <input type="email" id="email" name="email" required class="form-control email-input m-0">
                <label for="email" class="email-label"><?= $newsletter_descriptions->email ?></label>

              </div>
              <div>
                <button type="submit" class="button"><?= $newsletter_descriptions->button_name?></button>
              </div>
            </div>
            <div class="form-check w-75 mt-1 pl-0">
              <input type="checkbox" class="form-check-input" name="rodo" id="rodo" required>
              <label class="form-check-label" for="rodo"><?= $settings->rodo_newsletter ?></label>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="footer">
    <div class="container-fluid px-3 px-sm-5" style="padding-top: 5rem; padding-bottom: 4rem">
      <div class="row ">
        <div class="col-12 col-lg-7">
          <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left pb-3 pb-lg-0">
              <h4>O NAS</h4>
              <p><?= $settings->description ?></p>
            </div>
            <div class="col-12 col-lg-6 text-center text-lg-right pb-3 pb-lg-0">
              <a href="<?= base() ?>"><img data-src="<?= file_url(). $settings->logo ?>" alt="logo" class="lazy img-fluid footer-logo"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5">
          <div class="row">
            <div class="col-12 col-lg-7 text-center text-lg-right pb-3 pb-lg-0">
              <h4>SOCIAL MEDIA</h4>
              <?php if($settings->fb_link): ?>
                <p><a class="link footer-link" href="<?= $settings->fb_link ?>">Facebook</a></p>
              <?php endif; ?>
              <?php if($settings->inst_link): ?>
                <p><a class="link footer-link" href="<?= $settings->inst_link ?>">Instagram</a></p>
              <?php endif; ?>
              <?php if($settings->tw_link): ?>
                <p><a class="link footer-link" href="<?= $settings->tw_link ?>">Twitter</a></p>
              <?php endif; ?>
              <?php if($settings->yt_link): ?>
                <p><a class="link footer-link" href="<?= $settings->yt_link ?>">Youtube</a></p>
              <?php endif; ?>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-right pb-3 pb-lg-0">
              <h4>MENU</h4>
              <?php foreach($subpages as $subpage): ?>
                <p><a class="link footer-link" href="<?= base(). $subpage->page ?>"><?= $subpage->title ?></a></p>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row adawards mt-5">
        <div class="col-12 col-lg-6 text-center text-lg-left">
          <p>©2020 „Ignaszak” spółka z ograniczoną odpowiedzialnością sp.k.</p>
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-right">
          <p>Created by <span class="font-weight-bold"><a class="link adawards-link" target="_blank" href="https://agencjamedialna.pro/">Ad Awards</a></span></p>
        </div>
      </div>
    </div>
  </section>
</footer>
<script type="text/javascript" src="<?= assets() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets() ?>js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.3/dist/lazyload.min.js"></script>
<script src="<?= assets() ?>dist/js/lightbox-plus-jquery.min.js"></script>
<script async src="<?= assets() ?>js/cookieconsent.min.js"></script>
<script async src="<?= assets() ?>js/cookies.js" ></script>
<script src="<?= assets() ?>dist/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    let owl1 = $('.owl-carousel1').owlCarousel({
      responsive: {
        0 : {items: 1},
        567: {items: 3},
        992: {items: 4}
      },
      dots: false,
      nav: false,
      rewind: false,
      lazyLoad: true,
      autoplayHoverPause: true
    });
  })
  $(document).ready(function(){
    let owl2 = $('.owl-carousel2').owlCarousel({
      responsive: {
        0 : {items: 1},
        567: {items: 2},
      },
      dots: false,
      nav: false,
      rewind: false,
      lazyLoad: true,
      autoplayHoverPause: true
    });
  })

  $(document).ready(function(){
    let owl3 = $('.owl-carousel3').owlCarousel({
      responsive: {
        0 : {items: 1},
        567: {items: 3},
      },
      dots: false,
      nav: false,
      rewind: false,
      lazyLoad: true,
      autoplayHoverPause: true
    });
  })
</script>
<script>
	var lazyLoadInstance = new LazyLoad({});
  links = document.querySelectorAll("link"); 
  for (var i = links.length - 1; i >= 0; i--) { 
    if(links[i].getAttribute('rel') == 'preload'){ 
      links[i].setAttribute("rel", "stylesheet"); 
    } 
  } 
</script>
<?php if($this->uri->segment(1) != ''): ?>
  <script async defer src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
  <script async>

    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();
      grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {action: 'mailer/send'}).then(function(token) {
          $('#contact-form').prepend('<input type="hidden" name="secret_key" value="<?= $settings->captcha_secret ?>">');
          $('#contact-form').unbind('submit').submit();
        });;
      });
    });

  </script>
<?php endif; ?>
</body>
</html>