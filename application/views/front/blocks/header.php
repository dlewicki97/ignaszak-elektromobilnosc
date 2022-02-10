<header>
	<?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success alert-dismissible mb-0">
			<?= $this->session->flashdata('success') ?>
			<button onclick="resetQueryString()" type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>

	<?php if($this->session->flashdata('danger')): ?>
		<div class="alert alert-danger alert-dismissible mb-0">
			<?= $this->session->flashdata('danger') ?>
			<button onclick="resetQueryString()" type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>
	<nav class="navbar navbar-expand-lg navbar-dark " style="margin-top: 3rem">
		<a href="<?= base() ?>" class="navbar-brand logo-link"><img class="img-fluid logo lazy" data-src="<?= file_url(). $settings->logo ?>" alt="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse mt-2 mt-lg-0" id="basicExampleNav">
		<ul class="navbar-nav w-100 pl-5">
			<?php foreach($subpages as $subpage): ?>
				<?php if($subpage->page == 'modele'): ?>
					<li class="nav-item dropdown ">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">MODELE</a>
						<div class="dropdown-menu dropdown-primary px-0" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base(). 'modele' ?>" style="background-color: white!important; color: #22b473!important; box-shadow: unset!important;">POKAŻ WSZYSTKIE</a>
							<?php $i=0; foreach($models as $model): ?>
							<?php if($i < 4): ?>
								<a class="dropdown-item" href="<?= base(). 'modele/'. $model->id. '/'. slug($model->title) ?>" style="background-color: white!important; color: #22b473!important; box-shadow: unset!important;"><?= $model->title ?></a>
							<?php endif; ?>
							<?php $i++; endforeach ?>

						</div>
					</li>
					<?php else: ?>

						<li class="nav-item">
							<a class="nav-link" href="<?= base(). $subpage->page ?>"><?= $subpage->title ?>
						</a>
					</li>
				<?php endif; ?>
			<?php endforeach; ?>


			<li class="nav-item ml-lg-auto mb-4 mb-lg-0 d-flex align-items-center">
				<a target="_blank" href="<?= $header_button->link ?>">
					<button class="button d-flex flex-column align-items-center">
						<span class="button-desc"><?= $header_button->button_name1 ?></span><span class="button-site"><?= $header_button->button_name2 ?></span>
					</button>
				</a>
			</li>
		</ul>
	</div>
</nav>

</header>