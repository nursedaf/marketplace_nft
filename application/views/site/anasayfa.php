<?php
$ci = &get_instance();
$ci->load->model('Model');
?>
<!DOCTYPE html>
<?php
$this->load->view('inc/header.php');
?>

<body class="body header-fixed is_dark">

	<div id="wrapper">
		<div id="page" class="clearfix">
			<?php
			$this->load->view('inc/bodyheader.php');
			?>
			<section class="flat-title-page style-3">
				<img class="bgr-gradient gradient1" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/bg-gradient1.png" alt="">
				<img class="bgr-gradient gradient2" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/bg-gradient2.png" alt="">
				<img class="bgr-gradient gradient3" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/bg-gradient3.png" alt="">
				<div class="shape item-w-16"></div>
				<div class="shape item-w-32"></div>
				<div class="shape item-w-51 style2"></div>
				<div class="shape item-w-51 style2"></div>
				<div class="overlay"></div>
				<div class="swiper-container mainslider home3 auctions">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="slider-item">
								<div class="themesflat-container flex">
									<div class="wrap-heading flat-slider h3">
										<h2 class="heading">Discover, and collect</h2>
										<h2 class="heading">extraordinary</h2>
										<h2 class="heading h3"><span class="fill">Example </span>NFTs</h2>
										<p class="sub-heading mt-29 mb-35">Marketplace for NFT collections

										</p>
										<div class="flat-bt-slider flex style2">
											<a href="<?php echo base_url('explore'); ?>" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
												</span></a>
											<a href="<?php echo base_url('topseller'); ?>" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Top Seller
												</span></a>
										</div>
									</div>
									<div class="image">
										<img src="<?php echo base_url(); ?>assets/images/box-item/imgslider-3.png" alt="Image">
										<img class="img-bg" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/img-bg-sliderhome3.png" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slider-item">
								<div class="themesflat-container flex">
									<div class="wrap-heading flat-slider h3">
										<h2 class="heading">Discover, and collect</h2>
										<h2 class="heading">extraordinary</h2>
										<h2 class="heading h3"><span class="fill">Example </span>NFTs</h2>
										<p class="sub-heading mt-29 mb-35">Marketplace for NFT collections

										</p>
										<div class="flat-bt-slider flex style2">
											<a href="<?php echo base_url('explore') ?>" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
												</span></a>
											<a href="<?php echo base_url('topseller') ?>" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Top Seller
												</span></a>
										</div>
									</div>
									<div class="image">
										<img src="<?php echo base_url(); ?>assets/images/box-item/imgslider-3.png" alt="Image">
										<img class="img-bg" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/img-bg-sliderhome3.png" alt="Image">
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slider-item">
								<div class="themesflat-container flex">
									<div class="wrap-heading flat-slider h3">
										<h2 class="heading">Discover, and collect
										</h2>
										<h2 class="heading">extraordinary</h2>
										<h2 class="heading h3"><span class="fill">Example store </span>NFTs</h2>
										<p class="sub-heading mt-29 mb-35">Marketplace for NFT collections
										</p>
										<div class="flat-bt-slider flex style2">
											<a href="<?php echo base_url('explore'); ?>" class="sc-button header-slider style style-1 rocket fl-button pri-1"><span>Explore
												</span></a>
											<a href="<?php echo base_url('topseller'); ?>" class="sc-button header-slider style style-1 note fl-button pri-1"><span>Top Seller
												</span></a>
										</div>
									</div>
									<div class="image">
										<img src="<?php echo base_url(); ?>assets/images/box-item/imgslider-3.png" alt="Image">
										<img class="img-bg" src="<?php echo base_url(); ?>assets/images/backgroup-secsion/img-bg-sliderhome3.png" alt="Image">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="swiper-button-next btn-slide-next active"></div>
				<div class="swiper-button-prev btn-slide-prev"></div>
			</section>

			<section class="tf-section top-seller home3">
				<div class="themesflat-container">
					<div class="row">
						<div class="col-md-12 mg-bt-3">
							<div class="heading-live-auctions">
								<h2 class="tf-title text-left">
									Popular Collection</h2>
								<a href="<?php echo base_url("explore"); ?>" class="exp">EXPLORE MORE</a>
							</div>
						</div>
						<div class="col-md-12">

							<div class="swiper-container show-shadow carousel3 pad-t-20 button-arow-style">

								<div class="swiper-wrapper">
									<?php
									$collection = $ci->Model->getAllGeneral("collections");
									foreach ($collection as $i) {

										$items = $ci->Model->getAllGeneral("items", array(), "0","5", "hit", "DESC", "coll = " . $i->id);
									?>
										<div class="swiper-slide">
											<div class="slider-item">

												<div class="sc-card-collection style-3 mg-bt">
													<a href="">
														<div class="media-images-box">
															<div class="top-media">
																<?php
																$sayac = 0;
																foreach ($items as $item) {
																	echo '<img src="' . base_url($item->image) . '" alt="">';
																	$sayac++;
																	if ($sayac == 2) break;
																}
																?>
															</div>
															<div class="bottom-media">
																<?php
																$sayac = 0;
																foreach ($items as $item) {
																	$sayac++;
																	if ($sayac > 2)
																		echo '<img src="' . base_url($item->image) . '" alt="">';
																}
																?>
															</div>
														</div>
													</a>
													<div class="card-bottom">
														<div class="author">
															<div class="content">
																<h4><a href="<?php echo base_url('site/Pages/collectionpage/' . $i->id); ?>"><?php echo $i->name; ?></a></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="tf-section top-seller home3 s2 mobie-style">
				<div class="themesflat-container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="tf-title style2 mb-25 text-left">
								Top Seller NFTs</h2>
						</div>
						<div class="col-md-12">
							<div class="tf-box">
								<?php foreach ($tops as $item) { ?>
									<div class="box-item">
										<div class="sc-author-box style-3 pd-0">
											<div class="author-avatar">
												<a href="<?php echo base_url('productpage/' . $item->id); ?>">
													<img src="<?php echo base_url(); ?><?php echo $item->image; ?>" alt="Image" class="avatar">
												</a>
											</div>
											<div class="author-infor">
												<h5 class="fs-16"><a href="<?php echo base_url('productpage/' . $item->id); ?>"><?php echo $item->name; ?></a></h5>
												<span class="price"><?php echo $item->bid; ?> ETH</span>
											</div>
										</div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</section>

			<?php
			$this->load->view('inc/footer.php');
			?>

		</div>

	</div>

	<?php
	$this->load->view('inc/scripts.php');
	?>
</body>


</html>