<section class="guide py-5" style="margin-bottom: 3rem">
	<div class="container">
		<div class="row  mb-4">
			
			<div class="col-12 mb-3 text-center">
				<img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
				<h1 class="news-title"><?= $guide->title ?></h1>
			</div>
			<div class="col-12 text-center mb-5">
				<img data-src="<?= file_url(). $guide->photo ?>" alt="<?= $guide->alt ?>" class="img-fluid lazy">
			</div>
			<div class="col-12">
				<?= $guide->description ?>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($gallery as $photo): ?>
				<div class="col-12 col-lg-3 text-center">
					<a href="<?= file_url(). $photo->photo ?>" data-lightbox="gallery">
						<div class="bg-picture lazy" style="height: 200px" data-bg="<?= file_url(). $photo->photo ?>"></div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>