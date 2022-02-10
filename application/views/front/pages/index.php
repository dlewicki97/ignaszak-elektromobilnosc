<main>
  <section class="banner" >


    <div id="carousel-example-1z" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <?php foreach($slider as $i => $slide): ?>
          <div class="bg-ad <?php if($i == 0) echo 'active' ?>" data-target="#carousel-example-1z" data-slide-to="<?= $i ?>" style="width: <?= 100 / count($slider) ?>%"></div>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner" role="listbox">
        <?php foreach($slider as $i => $slide): ?>
          <div class="carousel-item <?php if($i == 0) echo 'active' ?>">
            <div class="bg-picture banner-img lazy" data-bg="<?= file_url(). $slide->photo ?>.webp">
              <div class="col-12 banner-content text-center h-100 d-flex flex-column justify-content-center align-items-center">
                <h1 class="banner-title"><?= $slide->title ?></h1>
                <p class="banner-subtitle"><?= $slide->subtitle ?></p>
                <a href="<?= base(). $slide->link ?>">
                  <button class="button"><?= $slide->button_name ?></button>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        
      </div>
      
    </div>
  </section>
  <section class="news" >
    <div class="container-fluid px-3 px-sm-5">
      <div class="row text-center mb-5">
        <div class="col-12">
          <img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
          <h1 class="news-title"><?= $news_descriptions->title ?></h1>
          <p class="news-subtitle"><?= $news_descriptions->subtitle ?></p>
        </div>
      </div>
      <div class="row" style="min-height: 400px">
        <div class="col-12 col-lg-6 pb-4 pb-lg-0">
          <a href="<?= base(). 'aktualnosci/'. $main_info->id. '/'. slug($main_info->title) ?>">
            <div class="bg-picture news-photo d-flex flex-column justify-content-between lazy" data-bg="<?= file_url(). $main_info->photo ?>">
              <div class="news-date"><p><?= implode('.', array_reverse(explode('-', substr($main_info->created, 0, 10)))); ?></p></div>
              <div class="news-content">
                <h3 class="main-news-title"><?= $main_info->title ?></h3>
                <p><?= $main_info->subtitle ?></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row h-100 news-right-row">
            <?php $j=0; foreach($news as $i => $info): ?>
            <?php if($i < 4): ?>
            <div class="col-12 col-md-6 <?= $j ?> <?= $j == 0 || $j == 1 ? 'col-top' : 'col-bottom' ?>">
              <a href="<?= base(). 'aktualnosci/'. $info->id. '/'. slug($info->title) ?>">
                <div class="bg-picture news-photo d-flex flex-column justify-content-between lazy" data-bg="<?= file_url(). $info->photo ?>">
                  <div class="news-date"><p><?= implode('.', array_reverse(explode('-', substr($info->created, 0, 10)))); ?></p></div>
                  <div class="news-content">
                    <h3><?= $info->title ?></h3>
                    <p><?= $info->subtitle ?></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endif; ?>
            <?php if($j != 3) $j++; else $j=0; endforeach; ?>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <a href="<?= base(). $news_button->link ?>">
          <button class="button px-5"><?= $news_button->button_name ?></button>
        </a>
      </div>
    </div>
  </section>
  <section class="knowledge">
    <div class="container-fluid px-3 pl-0 pl-lg-5 pr-sm-0">
      <div class="row mb-5">
        <div class="col-12 col-lg-4 d-flex flex-column justify-content-center">
          <div class="text-center text-lg-left">
            <img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
            <h1 class="news-title"><?= $knowledge->title ?></h1>
            <p class="news-subtitle"><?= $knowledge->subtitle ?></p>
            <a href="<?= base(). $knowledge->link ?>">
              <button class="button mt-2"><?= $knowledge->button_name ?></button>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-8 px-0 knowledge-img-col">
          <img class="img-fluid knowledge-img lazy" data-src="<?= file_url(). $knowledge->photo ?>" alt="<?= $knowledge->alt ?>">
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
</main>