<section class="electromobility" style="margin-bottom: 3rem">
	<div class="container">
		<div class="row  mb-4">
			
			<div class="col-12 mb-3 text-center">
				<img class="img-fluid separator lazy" data-src="<?= assets() ?>img/separator.svg" alt="separator">
				<h1 class="news-title"><?= $models_descriptions->title ?></h1>
			</div>
			
			
		</div>
		<div class="row">
			<?php foreach($models as $el): ?>
				<div class="col-12 col-lg-6">
					<a href="<?= base(). 'modele/'. $el->id. '/'. slug($el->title) ?>">
						<div class="bg-picture lazy" data-bg="<?= file_url(). $el->photo ?>">
							<h3><?= $el->title ?></h3>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>