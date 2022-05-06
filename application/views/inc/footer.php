<footer id="footer" class="clearfix style3">
				<div class="themesflat-container">
					<div class="row">
						<div class="col-lg-3 col-md-12 col-12">
							<div class="widget widget-logo">
								<div class="logo-footer" id="logo-footer">
									<a href="index-2.html">
										<img id="logo_footer" src="<?php echo base_url(cekInfo()->logo); ?>" alt="nft-gaming" width="135" height="56" data-retina="<?php echo base_url(); ?>assets/images/logo/logo_dark@2x.png" data-width="135" data-height="56">
									</a>
								</div>
								<?php $contact = $this->db->get("contact")->result();; 
								foreach($contact as $c){ ?>
									<p class="sub-widget-logo"> <?php echo $c->address; ?>
									<h6 class="title-widget"><?php echo $c->mail; ?></h6>	
									<h6 class="title-widget">+ <?php echo $c->phone; ?></h6>
									</p>
							<?php 	} ?>
					
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-5 col-5">
							<!-- <div class="widget widget-menu style-1">
								<h5 class="title-widget">My Account</h5>
								<ul>
									<li><a href="author01.html">Authors</a></li>
									<li><a href="connect-wallet.html">Collection</a></li>
									<li><a href="profile.html">Author Profile</a></li>
									<li><a href="create-item.html">Create Item</a></li>
								</ul>
							</div> -->
						</div>
						<div class="col-lg-2 col-md-4 col-sm-7 col-7">
							<div class="widget widget-menu style-2">
								<h5 class="title-widget">Resources</h5>
								<ul>
<!-- 									<li><a href="<?php echo base_url('contact')?>">Help & Support</a></li>
 -->									<li><a href="<?php echo base_url('auctions')?>">Live Auctions</a></li>
									<li><a href="<?php echo base_url('topseller')?>">Top Seller</a></li>
									<li><a href="<?php echo base_url('activity')?>">Activity</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-5 col-5">
							<div class="widget widget-menu fl-st-3">
								<h5 class="title-widget">Company</h5>
								<ul>
									<li><a href="<?php echo base_url('explore')?>">Explore</a></li>
									<li><a href="<?php echo base_url('contact')?>">Contact Us</a></li>
									<li><a href="<?php echo base_url('blog')?>">Our Blog</a></li>
<!-- 									<li><a href="">FAQ</a></li>
 -->								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-7 col-12">
							<div class="widget widget-subcribe">
								<h5 class="title-widget">Subscribe Us</h5>
								<div class="form-subcribe">
									<form id="subscribe-form" action="#" method="GET" accept-charset="utf-8" class="form-submit">
										<input name="email" value="" class="email" type="email" placeholder="info@yourgmail.com" required>
										<button id="submit" name="submit" type="submit"><i class="icon-fl-send"></i></button>
									</form>
								</div>
								<div class="widget-social style-1 mg-t32">
									<ul>
										<li><a href=""><i class="fab fa-twitter"></i></a></li>
										<li><a href=""><i class="fab fa-facebook"></i></a></li>
										<li class="style-2"><a href=""><i class="fab fa-linkedin"></i></a></li>
										<li><a href=""><i class="fab fa-instagram"></i></a></li>
										<li class="mgr-none"><a href="#"><i class="icon-fl-vt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>