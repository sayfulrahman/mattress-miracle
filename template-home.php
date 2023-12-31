<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mattress_miracle
 */

get_header();
?>

	<main id="primary" class="site-main">
  <!-- Banner part start -->
  <div class="matmir-abc matmir-bbi">
    <div class="matmir-abc matmir-iss">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-9">
            <div class="matmir-abc matmir-par">
              <h1>Mattress and sleep info<br>you can trust</h1>
              <div class="matmir-k0o">
                <p>Mattress Miracle has no ads or industry ties. We use the latest evidence and facts to inform you on
                  which mattresses you should consider, and which sleep tips to follow.</p>
              </div>
              <a href="#" class="matmir-yxt">See America's #1 Mattress <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forward.svg" alt="" width="18px"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner part end -->
  <!-- Feature part start -->
  <div class="matmir-abc matmir-fta">
    <div class="matmir-abc matmir-fos">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="matmir-abc matmir-xyy glider-contain">
              <div class="glider">
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 5.png" alt=""></div>
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 8.png" alt=""></div>
                <div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Rectangle 6.png" alt=""></div>
				<div class="mitmir-sli"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forbes_logo.png" alt=""></div>
              </div>
              <button aria-label="Previous" class="glider-prev"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Back.svg" alt=""></button>
              <button aria-label="Next" class="glider-next"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Forward.svg" alt=""></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature part end -->
  <!-- CTA part start -->
  <div class="matmir-abc matmir-cta">
    <div class="matmir-abc matmir-yos">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="matmir-abc matmir-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/information.svg" alt="" width="70">
              <h3>We analyze thousands of web pages</h3>
              <p>Mattress Miracle is by far the largest resource on mattress and sleep.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="matmir-abc matmir-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/website.svg" alt="" width="70">
              <h3>Using a constantly updated fact database</h3>
              <p>Our database is updated daily by your team of fact checkers and researchers.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="matmir-abc matmir-loi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-page.svg" alt="" width="70">
              <h3>Without any conflicts of interest</h3>
              <p>Hundreds of thousands of readers rely on our neutrality and objectivity. No ads, sponsorships, or
                industry ties.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA part end -->
  <!-- Explore part start -->
  <div class="matmir-abc matmir-exp">
    <div class="matmir-abc matmir-ios">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-xl-9">
            <div class="matmir-abc matmir-poi">
              <h4>Explore Mattress Miracle</h4>
              <div class="matmir-gfr">
                <p>Mattress Miracle is structured around mattress reviews, sleep and general mattress frequently asked
                  questions. We review all mattresses, provide important sleep + health insights, and keep you
                  informed on the most important and helpful mattress facts to help you make an education purchase
                  decision.</p>
                <h5>Topics</h5>
                <div class="matmir-abc matmir-jkl">
                  <?php
					$categories = get_categories();

					if ($categories) {
						echo '<ul class="matmir-lmn">';
						foreach ($categories as $category) {
							echo '<li><a href="' . get_category_link($category->term_id) . '"><span><img src="https://www.creditrightnow.com/wp-content/themes/mattress-miracle-1/assets/img/Circled Right.svg" alt=""></span>' . $category->name . '</a></li>';
						}
						echo '</ul>';
					}
					?>
                  <span><a href="#">See All<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Right.svg" alt=""></span></a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Explore part end -->
	</main><!-- #main -->

<?php
get_footer();
