<?php
/**
 * Template Name: Terms Use Template
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
                                    <li>Terms Of Use</li>
                                </ul>
                            </div>
                            <h1>Terms Of Use</h1>
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
                            <p>Terms of Use for Mattress Miracle (A Division of RedWater Media Network, Inc.)
</p>
                            <p>Effective Date: [11/29/23]</p>
                            <p>Welcome to Mattress Miracle. The following Terms of Use ("Terms") govern your access to and use of the Mattress Miracle website, services, and content. Mattress Miracle is a division of RedWater Media Network, Inc. ("RedWater"). By using the Mattress Miracle website, you agree to comply with and be bound by these Terms.</p>
                            <p>1. Acceptance of Terms</p>
							<ul>
								<li>- By accessing and using the Mattress Miracle website, you agree to be bound by these Terms and all applicable laws and regulations.</li>
							</ul>
							<p>2. Use of the Website</p>
							<ul>
								<li>- The website and its content are intended for informational purposes only.</li>
								<li>- You agree not to use the website for any unlawful purpose.</li>
								<li>- You are responsible for ensuring that all persons who access our website through your internet connection are aware of these Terms of Use and comply with them.</li>
							</ul>
							<p>3. Intellectual Property</p>
							<ul>
								<li>- The website and its original content, features, and functionality are owned by RedWater Media Network, Inc. and are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.</li>
							</ul>
							<p>4. User Conduct</p>
							<ul>
								<li>- You agree not to distribute, modify, transmit, reuse, download, repost, copy, or use the content of the website, including images and text, without RedWater's express written permission.</li>
							</ul>
							<p>5. Third-Party Links</p>
							<ul>
								<li>- The Mattress Miracle website may contain links to third-party websites that are not owned or controlled by RedWater.</li>
								<li>- RedWater has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third-party websites.</li>
							</ul>
							<p>6. Disclaimer of Warranties</p>
							<ul>
								<li>- The website is provided on an "as is" and "as available" basis.</li>
								<li>- RedWater makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property, or other violation of rights.</li>
							</ul>
							<p>7. Limitation of Liability</p>
							<ul>
								<li>- In no event shall RedWater or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the Mattress Miracle website.</li>
							</ul>
							<p>8. Indemnification</p>
							<ul>
								<li>- You agree to indemnify, defend and hold harmless RedWater and its affiliates, officers, directors, employees, agents, licensors, suppliers, and any third-party information providers from and against all losses, expenses, damages, and costs, including reasonable attorneys' fees, resulting from any violation of these Terms.</li>
							</ul>
							<p>9. Modification of Terms</p>
							<ul>
								<li>- RedWater reserves the right, at our sole discretion, to modify or replace these Terms at any time.</li>
								<li>- Your continued use of the website following the posting of any changes to these Terms constitutes acceptance of those changes.</li>
							</ul>
							<p>10. Governing Law</p>
							<ul>
								<li>- These Terms are governed by and construed in accordance with the laws of the jurisdiction in which RedWater Media Network, Inc. is located, without regard to its conflict of law provisions.</li>
							</ul>
							<p>11. Contact Information</p>
							<ul>
								<li>- If you have any questions about these Terms, please contact us at [hello@mattressmiracle.com].</li>
							</ul>
							<p>By accessing or using the Mattress Miracle website, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use. If you do not agree with any part of these Terms, you should not use our website.</p>
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
