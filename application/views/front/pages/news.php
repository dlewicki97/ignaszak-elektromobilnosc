<section class="news" style="margin-bottom: 3rem">
	<div class="container-fluid px-3 px-sm-5">
		<div class="row text-center mb-5">
			<div class="col-12">
				<img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
				<h1 class="news-title"><?= $news_descriptions->title ?></h1>
				<p class="news-subtitle"><?= $news_descriptions->subtitle ?></p>
			</div>
		</div>

		<div class="row h-100 justify-content-center news-right-row owl-carousel owl-carousel3" style="min-height: 400px">
			<?php $j=0; foreach($news as $info): ?>
			<!-- <div class="col-12 <?= $j ?> col-top"> -->
				<a href="<?= base(). 'aktualnosci/'. $info->id. '/'. slug($info->title) ?>">
					<div style="height: 300px" class="bg-picture news-photo d-flex flex-column justify-content-between lazy" data-bg="<?= file_url(). $info->photo ?>">
						<div class="news-date"><p><?= implode('.', array_reverse(explode('-', substr($info->created, 0, 10)))); ?></p></div>
						<div class="news-content">
							<h3><?= $info->title ?></h3>
							<p><?= $info->subtitle ?></p>
						</div>
					</div>
				</a>
			<!-- </div> -->
			<?php if($j != 3) $j++; else $j=0; endforeach; ?>
		</div>
		
	</div>
</section>