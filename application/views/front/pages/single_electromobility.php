<section class="single_electromobility">
	<div class="container">
		<div class="row  mb-4">
			
			<div class="col-12 mb-3 text-center">
				<img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
				<h1 class="news-title mb-5"><?= $electromobility->title ?></h1>
			</div>
			
			<div class="col-12">
				<?= $electromobility->description ?>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach($gallery as $photo): ?>
				<div class="col-12 col-lg-3 p-2 text-center">
					<a href="<?= file_url(). $photo->photo ?>" data-lightbox="gallery">
						<div class="bg-picture lazy" style="height: 200px" data-bg="<?= file_url(). $photo->photo ?>"></div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>