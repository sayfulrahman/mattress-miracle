<?php
/**
 * Template Name: Our Story Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mattress_miracle
 */

get_header();
?>

	<main id="primary" class="site-main">
    <!-- Privacy part start -->
    <div class="matmir-abc matmir-pvc">
        <div class="matmir-abc matmir-css">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <div class="matmir-abc matmir-par">
                            <div class="matmir-abc matmir-ojp">
                                <ul class="matmir-lmn">
                                    <li>Home</li>
                                    <li>Our Story</li>
                                </ul>
                            </div>
                            <h1>Our Story</h1>
                            <div class="matmir-abc matmir-qjj">
                                <ul class="matmir-lmn">
                                    <?php
									$last_updated = get_the_modified_date();

									if ($last_updated) { ?>
										<li><?php echo 'Last Updated: ' . esc_html($last_updated); ?></li>
									<?php
									}
									?>
									<?php
										// Get the current page's ID
										$current_page_id = get_the_ID();

										// Get the author's name (user who created the page)
										$page_author_id = get_post_field('post_author', $current_page_id);
										$page_author_name = get_the_author_meta('display_name', $page_author_id);
									?>
                                    <li>Written By: <?php echo esc_html($page_author_name); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy part end -->
    <!-- Content part start -->
    <div class="matmir-abc matmir-qli">
        <div class="matmir-abc matmir-qcs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <article>
							<p><strong>Alex Rivera, Founder of Mattress Miracle</strong></p>
                            <p>Alex Rivera’s journey to founding Mattress Miracle began during their doctoral studies in sleep science at a prestigious university. While researching the impact of sleep quality on cognitive function, Alex became fascinated by the role mattresses play in sleep hygiene. They observed a gap in public knowledge and a plethora of myths surrounding sleep and mattress choices.</p>
                            <p>Alex’s personal connection to sleep research deepened after a close family member struggled with chronic insomnia, exacerbated by an unsuitable mattress. This experience fueled their determination to bridge the knowledge gap in this field.</p>
                            <p>After completing their doctorate, Alex worked in a research institute but became increasingly concerned about the commercial biases in the mattress industry and the lack of accessible, unbiased information for consumers. This concern led to the conception of Mattress Miracle.</p>
                            <p>Determined to maintain integrity, Alex established Mattress Miracle as an educational organization, ensuring no direct sponsorships from mattress companies. They gathered a team of researchers from diverse backgrounds, including psychology, material science, and ergonomics, committed to an evidence-based approach.</p>
                            <p>Alex’s leadership is marked by a commitment to impartiality and public education. Under their guidance, Mattress Miracle has become a leading authority on mattress and sleep research, helping thousands make informed decisions for better sleep and, consequently, a better quality of life.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content part end -->
	</main><!-- #main -->

<?php
get_footer();
