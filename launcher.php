<?php
/**
 * Template Name: Launcher Home Page
 */

get_header();
the_post();

$placeholder_text = get_post_meta( get_the_ID(), "placeholder_text", true);
$button_label = get_post_meta( get_the_ID(), "button_label", true);
$hint = get_post_meta( get_the_ID(), "hint", true);


?>
	<body <?php body_class(); ?>>
	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center home-sidebar">
		<h1 id="fh5co-logo"><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
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
									<h2><?php the_title(); ?></h2>
									<?php the_content(); ?>
								</div>
							</div>
							
							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($placeholder_text); ?>">
										<input type="submit" value="<?php echo esc_attr($button_label); ?>" class="btn btn-primary">
										<p class="tip"><?php echo esc_html( $hint ); ?></p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
<?php get_footer(); ?>
