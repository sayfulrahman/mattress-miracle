<?php
/**
 * Template Name: Our Editorial Policy Template
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
                                    <li>Our Editorial Policy</li>
                                </ul>
                            </div>
                            <h1>Our Editorial Policy</h1>
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
                            <h2>Editorial Integrity</h2>
                            <p>Our mission at Mattress Miracle is to be the most evidence-based, impartial source of mattress and sleep information available. We adhere to this commitment by ensuring we have a diverse team of researchers who thoroughly review all relevant scientific literature and maintain no conflicts of interest.</p>
                            <p>Our goal is not to offer quick-fix solutions or miracle products for your sleep problems. Instead, we provide a nuanced and context-sensitive analysis of all available evidence regarding mattresses, sleep patterns, and related topics. This empowers you with the information necessary to make the best decisions for your sleep health. We firmly oppose any form of sensationalism or emotional manipulation to increase traffic or sales.</p>
                            <p>We also emphasize that any medical issues related to sleep should be discussed with your healthcare provider; we are not a substitute for professional medical advice.</p>
                            <h2>Integrity of Mattress Miracle Staff</h2>
                            <p>At Mattress Miracle, we do not accept advertising or content from external sources. Therefore, all content on our site is created by our own staff members.</p>
							<p>All staff at Mattress Miracle are free from conflicts of interest. Each member declares that they do not benefit, directly or indirectly, from any external sources that might bias our analysis.</p>
							<p>Our researchers have complete independence in researching and analyzing scientific papers. Non-researcher employees have no influence over the conclusions we publish.</p>
							<p>All revisions of our sleep and mattress information are publicly available, so readers can see how we update our content with the latest research.</p>
							<h2>Content Creation Process</h2>
							<p>All information published on Mattress Miracle goes through multiple levels of editing to ensure accuracy, evidence-based clarity, and impartiality.</p>
							<p>The typical process for our content creation is as follows:</p>
							<ul>
								<li>1. Researchers and reviewers create an outline to fully address the question/topic.</li>
								<li>2. Researcher writes the article.</li>
								<li>3. Article is copyedited by a content editor.</li>
								<li>4. Article is edited by an editor.</li>
								<li>5. Article is reviewed by a reviewer.</li>
								<li>6. Corrections and clarifications are incorporated at every level.</li>
								<li>7. Article is published on the website.</li>
							</ul>
							<p>Each article on Mattress Miracle undergoes over 10 hours of focused writing/editing/reviewing before publication, with most requiring dozens of hours from conception to publication. Our pages are regularly updated, reflecting the culmination of hundreds of hours of work.</p>
							<h2>Advertising</h2>
							<p>As a note of transparency — since we accept no external funding or content, we have no need for an advertising policy. Hence, we have nothing to declare in regards to advertising.</p>
							<h2>Corrections</h2>
							<p>Mattress Miracle is committed to making corrections and clarifications as necessary. We promptly review concerns brought to us by our readers, and if warranted, immediately update content on our website. This includes incorporating new information not available at the time of publication and any other essential updates to an article.</p>
							<p>If you find anything incorrect on our website, please contact us. Our goal is to be the most accurate and current source of mattress and sleep information available.</p>
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
