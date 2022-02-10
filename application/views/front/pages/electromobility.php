<section class="electromobility" style="margin-bottom: 3rem">
	<div class="container">
		<div class="row  mb-4">
			
			<div class="col-12 mb-3 text-center">
				<img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
				<h1 class="news-title"><?= $electromobility_descriptions->title ?></h1>
			</div>
			
			
		</div>
		<div class="owl-carousel owl-carousel2">
			<?php foreach($electromobility as $el): ?>
				<a href="<?= base(). 'elektromobilnosc-w-polsce/'. $el->id. '/'. slug($el->title) ?>">
					<div class="bg-picture lazy" data-bg="<?= file_url(). $el->photo ?>">
						<h3><?= $el->title ?></h3>
					</div>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>