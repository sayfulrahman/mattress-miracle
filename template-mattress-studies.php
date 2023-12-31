<?php
/**
 * Template Name: Mattress Studies Template
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
                                    <li>Mattress Studies</li>
                                </ul>
                            </div>
                            <h1>Mattress Studies</h1>
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
                            <p>Welcome to our 'Mattress Studies' page, a comprehensive resource designed to simplify your journey towards better sleep. Here, we meticulously organize and break down the most significant and recent mattress studies, presenting them in a clear, accessible format. Our goal is to empower you with the knowledge needed to enhance your sleep hygiene, health, and overall happiness.</p>
                            <p>Our approach is straightforward. We sift through a vast array of scientific studies and select those that are most relevant and impactful. Each study is then distilled into key findings, ensuring you receive the essence of the research without the complexity often associated with scientific literature. We focus on practical insights that you can apply to your daily life.</p>
                            <p>For ease of navigation, the studies are categorized based on various factors such as mattress types, sleep patterns, health implications, and more. Whether you're interested in the effects of mattress firmness on back pain, the relationship between mattress materials and sleep quality, or the latest innovations in sleep technology, you'll find relevant studies organized in an intuitive manner.</p>
                            <p>Additionally, we regularly update this page with the latest research, so you're always equipped with the most current information. Our aim is to be your trusted guide in the pursuit of better sleep, aiding you in making informed decisions about your mattress choices and sleep habits.</p>
                            <p>Remember, while our 'Mattress Studies' page is a valuable tool for information, it should complement, not replace, advice from healthcare professionals. We encourage you to use this resource as a stepping stone to improving your sleep hygiene and overall well-being.</p>
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
