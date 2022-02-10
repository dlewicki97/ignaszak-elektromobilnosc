<section class="knowledge">
  <div class="container-fluid px-3 pl-0 pl-lg-5 pr-sm-0">
    <div class="row mb-5">
      <div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
        <div class="text-center text-lg-left">
          <img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
          <h1 class="news-title"><?= $knowledge->title ?></h1>

        </div>
      </div>
      <div class="col-12 col-lg-8 px-0 knowledge-img-col">
        <img class="img-fluid knowledge-img lazy" data-src="<?= file_url(). $knowledge->photo ?>" alt="<?= $knowledge->alt ?>">
      </div>
      <div class="col-12 mt-4">
       <?= $knowledge->description ?>
     </div>
   </div>
 </div>
</section>
<section class="why">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col-12">
        <img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
        <h1 class="news-title"><?= $why_descriptions->title ?></h1>
        <p class="news-subtitle"><?= $why_descriptions->subtitle ?></p>
      </div>
    </div>
    <div class="row justify-content-center icons">
      <?php foreach($why as $i => $icon): ?>
        <div class="col-12 col-lg-3 text-center">
          <img class="why-icon lazy <?= $i%2 != 0 ? 'even' : '' ?>" data-src="<?= file_url(). $icon->photo ?>" alt="<?= $icon->alt ?>">
          <p><?= $icon->title ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="guides">
  <div class="container-fluid px-3 px-sm-5">
    <div class="row text-center mb-4">
      <div class="col-12">
        <img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
        <h1 class="news-title"><?= $guides_descriptions->title ?></h1>
        <p class="news-subtitle"><?= $guides_descriptions->subtitle ?></p>
      </div>
    </div>
    <div class="owl-carousel1 owl-carousel">
      <?php foreach($guides as $guide): ?>
        <a href="<?= base(). 'poradniki/'. $guide->id. '/'. slug($guide->title) ?>">
          <div class="bg-picture guide-photo lazy" data-bg="<?= file_url(). $guide->photo ?>.webp">
            <p class="guide-date"><?= implode('.', array_reverse(explode('-', substr($guide->created, 0, 10)))); ?></p>
            <h4 class="guide-title"><?= $guide->title ?></h4>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>