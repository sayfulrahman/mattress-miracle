<?php
/**
 * Template Name: Contact Us Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mattress_miracle
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Form part start -->
		<div class="matmir-abc matmir-for">
			<div class="matmir-abc matmir-cis">
			<div class="container">
				<div class="row justify-content-center">
				<div class="col-md-12 col-xl-6">
					<div class="matmir-abc matmir-xxy">
					<h2>Get in Touch Today!</h2>
					<?php echo do_shortcode('[wpforms id="3206"]'); ?>
					<div class="matmir-abc matmir-bpa">
						<div class="matmir-abc">
							<div class="matmir-abc matmir-spa">
								<div class="matmir-abc matmir-bor"></div>
							</div>
							<div class="matmir-abc matmir-gss"><span class="matmir-gsa">Check out our Social media</span></div>
						</div>
						<div class="matmir-abc matmir-s8c">
							<a target="_blank" href="https://www.linkedin.com/company/examine-com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://twitter.com/Examinecom"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://www.instagram.com/examinedotcom/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="social-icons" width="18px"></a>
							<a target="_blank" href="https://www.facebook.com/Examinecom/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="social-icons" width="18px"></a>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<div class="matmir-abc matmir-shs">
						<div class="matmir-abc matmir-hed">
							<h2>Contact us</h2>
							<p>You can also reach us using the following methods.</p>
						</div>
						<div class="matmir-abc matmir-xyd">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-10.svg" alt=""></span>
							<p><a href="/">Mattressmiracle.com</a> Inc<br>1401 21st Street STE R,<br>Sacramento, CA, 95811</p>
						</div>
						<div class="matmir-abc matmir-xyd matmir-center">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-11.svg" alt=""></span>
							<p class="leading-6"><a href="tel:(530) 768-2211">(530) 768-2211</a></p>
						</div>
						<div class="matmir-abc matmir-xyd matmir-center">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-12.svg" alt=""></span>
							<p class="leading-6"><a href="mailto:hello@mattressmiracle.com">hello@mattressmiracle.com</a></p>
						</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<!-- Form part end -->
	</main><!-- #main -->

<?php
get_footer();
