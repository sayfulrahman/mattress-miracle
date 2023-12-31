<?php
/**
 * Template Name: Privacy Policy Template
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
                                    <li>Privacy Policy</li>
                                </ul>
                            </div>
                            <h1>Privacy Policy</h1>
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
                            <p>Privacy Policy of Mattress Miracle (A Division of RedWater Media Network, Inc.)</p>

                            <p>Effective Date: [11/29/23]</p>
                            <p>Welcome to Mattress Miracle, a division of RedWater Media Network, Inc. Your privacy is important to us, and this Privacy Policy outlines how we collect, use, protect, and disclose your information. By accessing or using our services, you agree to the terms outlined in this policy.</p>
                            <p>1. Information Collection</p>
                            <ul>
								<li>- Personal Information: We collect personal information you provide when you use our services, such as name, email address, and other contact information.</li>
								<li>- Usage Data: We gather non-personal data related to your usage of our website, including pages visited, time spent on pages, and other similar data.</li>
								<li>- Cookies: Our website uses cookies to enhance user experience, track website usage, and remember your preferences.</li>
							</ul>
                            <p>2. Use of Information</p>
                            <ul>
								<li>- To provide, maintain, and improve our services.</li>
								<li>- To personalize your experience and to deliver content and product offerings relevant to your interests.</li>
								<li>- For customer service and support.</li>
								<li>- For research and analytical purposes to better understand our audience.</li>
							</ul>
							<p>3. Sharing of Information</p>
                            <ul>
								<li>- We do not sell your personal information.</li>
								<li>- We may share information with third-party service providers who assist us in operating our website, conducting our business, or serving our users.</li>
								<li>- We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety.</li>
							</ul>
							<p>4. Data Security</p>
                            <ul>
								<li>- We implement a variety of security measures to maintain the safety of your personal information.</li>
								<li>- However, no method of transmission over the Internet or method of electronic storage is 100% secure.</li>
							</ul>
							<p>5. Third-Party Links</p>
                            <ul>
								<li>- Our website may contain links to third-party sites that are not operated by us. We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites.</li>
							</ul>
							<p>6. Children’s Privacy</p>
                            <ul>
								<li>- Our website is not intended for children under the age of 13. We do not knowingly collect personal identifiable information from children under 13.</li>
							</ul>
							<p>7. Your Rights</p>
                            <ul>
								<li>- You have the right to access, update, or delete the information we have on you.</li>
								<li>- You may opt out of receiving marketing communications from us.</li>
								<li></li>
								<li></li>
							</ul>
							<p>8. Changes to This Privacy Policy</p>
                            <ul>
								<li>- We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</li>
							</ul>
							<p>9. Contact Us</p>
                            <ul>
								<li>- If you have any questions about this Privacy Policy, please contact us at [hello@mattressmiracle.com].</li>
							</ul>
							<p>This Privacy Policy is part of our commitment to protect your privacy and ensure a transparent relationship with you as you use our services at Mattress Miracle. Your trust is important to us, and we strive to safeguard your information with the utmost care.</p>
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
