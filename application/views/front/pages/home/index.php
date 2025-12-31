<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<?php $no = 0;?>
		<?php foreach($banners as $banner) : ?>
			<?php $no++;  ?>
			<div class="carousel-item <?php if($no <= 1) { echo "active"; } ?>">
				<img src="<?= base_url("img/banner/$banner->photo") ?>" class="d-block w-100">
				<div class="carousel-caption d-none d-md-block">
					<h1><?= $banner->title ?></h1>
					<p><?= $banner->text ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- End of Carousel -->

<!-- Sambutan -->
<div class="sambutan mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<h2>Sambutan</h2>
				<hr>
				<p class="text-center"><?= $sambutan->content ?></p>
			</div>
				<figure class="col-lg-3 col-md-4 col-sm-6 col-xs-5 text-center">
				<img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" class="img-thumbnail img-fluid">
				<figcaption><b>Syenny Waworuntu S.Pd</b></figcaption>
		</figure>
		</div>
	</div>
</div>
<!-- End of Sambutan -->

<!-- Jurusan -->
<!-- <div class="jumbotron jumbotron-fluid bg-cover jurusan mt-5" style="background-image: url(<?= base_url('img/background/' . $jurusan->photo) ?>)">
	<div class="container text-center">
		<div class="row">
			<div class="col">
				<h2 class="">Organisasi</h2>
			</div>
		</div>
		<hr>
		<div class="row pt-3">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
				<img class="" src="<?= base_url('img/jurusan/ipa.png') ?>" alt="">
				<h5 class="mt-2">Sains</h5>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
				<img class="" src="<?= base_url('img/jurusan/ips.png') ?>" alt="">
				<h5 class="mt-2">Pramuka</h5>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-4">
				<img class="" src="<?= base_url('img/jurusan/bahasa.png') ?>" alt="">
				<h5 class="mt-2">UKS</h5>
			</div>
		</div>
	</div>
</div> -->
<!-- End of Jurusan -->
<div class="video-background" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
    <div class="video-foreground" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60%; height: 60%;">
        <iframe src="<?= base_url('img/introsekolah.mp4') ?>" frameborder="0" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" allowfullscreen allow="autoplay; encrypted-media"></iframe>
    </div>
</div>
<!-- Berita -->
<div class="last-news mt-5 mb-5">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col">
				<h2 class="text-center">Berita Terbaru</h2>
				<hr>
			</div>
		</div>
		<div class="row mt-4">
			<?php foreach($berita as $b) : ?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
					<div class="card" style="width: 15rem; height: 24rem;">
						<img style="height:150px" src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?= $b->title ?></h5>
							<p class="card-text"><?= character_limiter($b->content,50) ?></p>
							<a href="<?= base_url("blog/baca/$b->seo_title") ?>" class="btn btn-info btn-sm">Lanjut Membaca<i class="fa fa-angle-right ml-2"></i></a>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<div class="row mt-4">
			<div class="col text-center">
				<a href="<?= base_url('blog') ?>" class="btn btn-secondary text-light">Lihat Selengkapnya<i class="fa fa-angle-double-right ml-2"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- End of Berita -->

<!-- Google Maps -->
<div class="google-maps mt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center">Lokasi Kami</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<!-- Standard Google Map Embed -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127723.11501240414!2d124.80263558842995!3d1.4824212653106824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877309c3e9172f%3A0x637f5369f0df8c32!2sJl.%20Tololiu%20Supit%20No.71%2C%20Tingkulu%2C%20Kec.%20Wanea%2C%20Kota%20Manado%2C%20Sulawesi%20Utara!5e0!3m2!1sen!2sid!4v1687612345678!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col">
				<!-- Google Street View Embed -->
				<iframe src="https://www.google.com/maps/embed?pb=!4v1716022427967!6m8!1m7!1s4wPHI79ljK51mdn_9RD1_A!2m2!1d1.458459213003829!2d124.8545259243704!3f96.10417380264698!4f0!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
<!-- End of Google Maps -->