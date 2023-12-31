<?php
/**
 * Template Name: Accessibility Template
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
                                    <li>Accessibility</li>
                                </ul>
                            </div>
                            <h1>Accessibility</h1>
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
                            <p>Accessibility Statement for Mattress Miracle (A Division of RedWater Media Network, Inc.)</p>
                            <p>Effective Date: [11/29/23]</p>
                            <p>At Mattress Miracle, a division of RedWater Media Network, Inc., we are committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards to guarantee that our website is accessible to the widest possible audience, regardless of technology or ability.</p>
                            <p>1. Measures to Support Accessibility <br> Mattress Miracle takes the following measures to ensure accessibility of our website:</p>
                            <ul>
								<li>- Integrating accessibility into our procurement practices.</li>
								<li>- Providing continual accessibility training for our staff.</li>
								<li>- Including people with disabilities in our design personas.</li>
							</ul>
							<p>2. Conformance Status</p>
                            <ul>
								<li>We are in the process of conforming to the Web Content Accessibility Guidelines (WCAG) 2.1 level AA. These guidelines explain how to make web content more accessible for people with disabilities, and user-friendly for everyone.</li>
							</ul>
							<p>3. Feedback <br> We welcome your feedback on the accessibility of Mattress Miracle. Please let us know if you encounter accessibility barriers on our website:</p>
                            <ul>
								<li>We try to respond to feedback within 1-3 business days.</li>
							</ul>
							<p>4. Compatibility with Browsers and Assistive Technology <br> Mattress Miracle is designed to be compatible with the following assistive technologies:</p>
                            <ul>
								<li>- The website is designed to be compatible with assistive technologies like screen readers and magnifiers.</li>
								<li>- The website is accessible using various web browsers.</li>
							</ul>
							<p>5. Technical Specifications <br> Accessibility of Mattress Miracle relies on the following technologies to work with the particular combination of web browser and any assistive technologies or plugins installed on your computer:</p>
                            <ul>
								<li>- HTML</li>
								<li>- WAI-ARIA</li>
								<li>- CSS</li>
								<li>- JavaScript</li>
							</ul>
							<p>6. Limitations and Alternatives</p>
                            <ul>
								<li>Despite our best efforts to ensure accessibility of Mattress Miracle, there may be some limitations. Please contact us if you observe an issue.</li>
							</ul>
							<p>7. Assessment Approach <br> RedWater Media Network, Inc. assessed the accessibility of Mattress Miracle by the following approaches:</p>
                            <ul>
								<li>- Self-evaluation</li>
							</ul>
							<p>8. Formal Approval of This Accessibility Statement <br> This Accessibility Statement is approved by:</p>
                            <ul>
								<li>- [Alex Rivera]</li>
								<li>- RedWater Media Network, Inc.</li>
							</ul>
							<p>9. Formal Complaints</p>
                            <ul>
								<li>We aim to respond to accessibility feedback within 5 business days, and to propose a solution within 10 business days. You are entitled to escalate a complaint to RedWater Media Network, Inc., should you be dissatisfied with our response to you.</li>
							</ul>
							<p>10. Changes to This Accessibility Statement</p>
                            <ul>
								<li>We may update this Accessibility Statement from time to time based on feedback and changes in standards.</li>
							</ul>
							<p>Contact Information <br> For any inquiries regarding the Accessibility Statement, please contact:</p>
                            <ul>
								<li>- E-mail: [hello@mattressmiracle.com]</li>
								<li>- Postal address: [1401 21st Street STE R, Sacramento, CA, 95811]</li>
								<li>- Phone: [(530) 768-2211]</li>
							</ul>
							<p>We are committed to making our website as accessible as possible to all individuals, and we view accessibility as an ongoing effort. At Mattress Miracle, we believe that everyone, regardless of their abilities, should have access to quality information about sleep and mattresses.</p>
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
