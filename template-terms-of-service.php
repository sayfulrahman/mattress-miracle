<?php
/**
 * Template Name: Terms Service Template
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
                                    <li>Terms Of Service</li>
                                </ul>
                            </div>
                            <h1>Terms Of Service</h1>
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
                            <p>Terms of Service for Mattress Miracle (A Division of RedWater Media Network, Inc.)</p>
                            <p>Effective Date: [11/29/23]</p>
                            <p>Welcome to Mattress Miracle, a division of RedWater Media Network, Inc. These Terms of Service ("Terms") govern your access to and use of the Mattress Miracle website, content, products, and services ("Services"). By accessing or using our Services, you agree to be bound by these Terms.</p>
                            <p>1. Use of Services</p>
							<ul>
								<li>- The Services provided by Mattress Miracle are for personal, non-commercial use only.</li>
								<li>- You must not use the Services for any illegal or unauthorized purpose.</li>
								<li>- The content provided on Mattress Miracle is for informational purposes only and should not replace professional advice.</li>
							</ul>
							<p>2. Intellectual Property Rights</p>
							<ul>
								<li>- All content on Mattress Miracle, including text, graphics, logos, images, and software, is the property of RedWater Media Network, Inc. or its content suppliers and protected by copyright and other intellectual property laws.</li>
								<li>- You agree not to copy, modify, distribute, sell, or lease any part of our Services or included content.</li>
							</ul>
							<p>3. User Contributions</p>
							<ul>
								<li>- Users may post reviews, comments, and other content, as long as the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to third parties.</li>
								<li>- RedWater Media Network, Inc. reserves the right to remove or edit such content but does not regularly review posted content.</li>
							</ul>
							<p>4. Disclaimer of Warranties</p>
							<ul>
								<li>- The Services are provided on an "as is" and "as available" basis.</li>
								<li>- RedWater Media Network, Inc. makes no representations or warranties of any kind, express or implied, as to the operation of the Services or the information, content, materials, or products included on the Services.</li>
							</ul>
							<p>5. Limitation of Liability</p>
							<ul>
								<li>- RedWater Media Network, Inc. will not be liable for any damages of any kind arising from the use of the Services, including, but not limited to direct, indirect, incidental, punitive, and consequential damages.</li>
							</ul>
							<p>6. Modifications to the Services and Prices</p>
							<ul>
								<li>- Prices for our products are subject to change without notice.</li>
								<li>- RedWater Media Network, Inc. reserves the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.</li>
							</ul>
							<p>7. Links to Third-Party Websites</p>
							<ul>
								<li>- The Services may include links to third-party websites that are not affiliated with RedWater Media Network, Inc.</li>
								<li>- RedWater Media Network, Inc. is not responsible for the content or practices of these third-party websites.</li>
							</ul>
							<p>8. Governing Law</p>
							<ul>
								<li>- These Terms shall be governed by and construed in accordance with the laws of the jurisdiction in which RedWater Media Network, Inc. is located.</li>
							</ul>
							<p>9. Changes to Terms of Service</p>
							<ul>
								<li>- You can review the most current version of the Terms of Service at any time on this page.</li>
								<li>- We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website.</li>
							</ul>
							<p>10. Contact Information</p>
							<ul>
								<li>- Questions about the Terms of Service should be sent to us at [hello@mattressmiracle.com].</li>
							</ul>
							<p>By accessing or using our Services, you signify your acceptance of these Terms. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.</p>
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
