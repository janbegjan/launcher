<?php
/**
 * Template Name: Launcher Home Page
 */

get_header();

?>
	<body <?php body_class(); ?>>
	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center" style="background-image: url(images/img_bg_1_gradient.jpg);">
		<h1 id="fh5co-logo"><a href="<?php echo get_home_url(); ?>">Launcher</a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2>Launcher Launching Soon!</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Enter your email">
										<input type="submit" value="Send" class="btn btn-primary">
										<p class="tip">Please enter your email address for early access.</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
<?php get_footer(); ?>