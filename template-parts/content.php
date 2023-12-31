<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mattress_miracle
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Single part start -->
	<div class="matmir-abc matmir-soc">
        <div class="matmir-abc matmir-sss">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <div class="matmir-abc matmir-par">
                            <div class="matmir-abc matmir-jjp">
                                <ul class="matmir-lmn">
								<?php
								// Home link
								echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';

								// Category link (if the post belongs to a category)
								$categories = get_the_category();
								if (!empty($categories)) {
									$category = $categories[0]; // Assuming it belongs to one category
									$category_link = get_category_link($category->term_id);
									echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
								}

								// Current post title
								echo '<li><span>' . esc_html(get_the_title()) . '</span></li>';
								?>
                                </ul>
                            </div>
                            <h1><?php the_title(); ?></h1>
                            <div class="matmir-abc matmir-jjj">
                                <ul class="matmir-lmn">
                                    <?php
									$last_updated = get_the_modified_date();

									if ($last_updated) { ?>
										<li><?php echo 'Last Updated: ' . esc_html($last_updated); ?></li>
									<?php
									}
									?>
									<li class="mbtn" data-tag=''><span>✓</span><a href="#">Evidence Based</a></li>
									<li class="mbtn" data-tag='<h4>Fact Checked</h4>
			<p>At Mattress Miracle, we prioritize the integrity and accuracy of our content, adhering to stringent fact-checking standards. Our editorial team, comprised of editors and medical experts, meticulously evaluates every article, guide, and review. We rely exclusively on credible sources such as peer-reviewed journals, government reports, and interviews with qualified professionals. Each piece of content is backed by a comprehensive bibliography, ensuring every scientific claim is supported by at least one reputable source.</p>
			<p>Our review process is thorough and collaborative, involving a diverse group of non-industry-affiliated researchers and professionals. Prior to publication and during major updates, our content undergoes rigorous scrutiny to maintain factual accuracy and objectivity. We are committed to unbiased reporting, free from the influence of our affiliate partnerships. Plagiarism is strictly prohibited, and we ensure the authenticity and credibility of our information at all times.</p>
															   <p class="matmir-abc matmir-8od">You can read more about how we write our content here:</p>
			<ul class="matmir-lmn">
				<li><a href="https://www.mattressmiracle.com/editorial-policy/">Our Editorial Policy</a></li>
				<li><a href="https://www.mattressmiracle.com/minimizing-bias/">Minimizing Bias</a></li>
			</ul>'><span>✓</span><a href="#">Fact Checked</a></li>
                                </ul>
                            </div>
                            <div class="matmir-o0o">
                                <div class="matmir-lmn">
									<?php
										// Get the current page's ID
										$current_page_id = get_the_ID();
										$banner_description = get_field('banner_description', $current_page_id);
									if( ! empty( $banner_description ) ){
									?>
									<?php echo $banner_description; ?>
									<?php }; ?>
                                </div>
                            </div>
                            <div class="matmir-abc matmir-poy">
                                <div class="matmir-abc matmir-xhd"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svgexport-5.svg" alt="" width="140px"></div>
                                <div class="matmir-abc">
                                    <?php
                                    // Get the 'my_custom_setting' value from the Theme Customizer
                                    $banner_heading_value = get_theme_mod('banner_heading');
                                    ?>
                                    <?php if( ! empty($banner_heading_value) ){ ?>
                                    <h4><?php echo esc_html($banner_heading_value); ?></h4>
                                    <?php }; ?>
                                    <?php
                                    // Get the 'my_custom_setting' value from the Theme Customizer
                                    $banner_subheading_value = get_theme_mod('banner_subheading');
                                    ?>
                                    <?php if( ! empty($banner_subheading_value) ){ ?>
                                    <p><?php echo esc_html($banner_subheading_value); ?></p>
                                    <?php }; ?>
                                </div>
                                <?php
                                // Get the 'my_custom_setting' value from the Theme Customizer
                                $banner_button_label_value = get_theme_mod('banner_button_label');
                                $banner_button_url_value = get_theme_mod('banner_button_url');
                                ?>
                                <?php if( ! empty($banner_button_label_value) ){ ?>
                                <div class="matmir-abc"><a href="<?php echo esc_url($banner_button_url_value); ?>"><?php echo esc_html($banner_button_label_value); ?></a></div>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single part end -->
    <!-- Content part start -->
    <div class="matmir-abc matmir-mli">
        <div class="matmir-abc matmir-xcs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <div class="matmir-jkl">
							<!-- Assuming $post_id contains the ID of the post you want to retrieve the fields for -->
							<?php $post_id = get_the_ID(); ?>
                        <!-- Display dynamic fields using a loop -->
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <?php $dynamic_header = get_field('dynamic_header_' . $i, $post_id); ?>
                            <?php $dynamic_description = get_field('dynamic_description_' . $i, $post_id); ?>

                            <h2><?php echo $dynamic_header; ?></h2>
                            <p><?php echo $dynamic_description; ?></p>
                        <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content part end -->
    <!-- Join part start -->
    <div class="matmir-abc matmir-hui">
        <div class="matmir-abc matmir-hss">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-xl-7">
                        <div class="matmir-abc matmir-poy">
                            <div class="matmir-abc">
                                <?php
                                // Get the 'my_custom_setting' value from the Theme Customizer
                                $banner_heading_value = get_theme_mod('banner_heading');
                                ?>
                                <?php if( ! empty($banner_heading_value) ){ ?>
                                <h4><?php echo esc_html($banner_heading_value); ?></h4>
                                <?php }; ?>
                                <?php
                                // Get the 'my_custom_setting' value from the Theme Customizer
                                $banner_subheading_value = get_theme_mod('banner_subheading');
                                ?>
                                <?php if( ! empty($banner_subheading_value) ){ ?>
                                <p><?php echo esc_html($banner_subheading_value); ?></p>
                                <?php }; ?>
                            </div>
                            <?php
                            // Get the 'my_custom_setting' value from the Theme Customizer
                            $banner_button_label_value = get_theme_mod('banner_button_label');
                            $banner_button_url_value = get_theme_mod('banner_button_url');
                            ?>
                            <?php if( ! empty($banner_button_label_value) ){ ?>
                            <div class="matmir-abc"><a href="<?php echo esc_url($banner_button_url_value); ?>"><?php echo esc_html($banner_button_label_value); ?></a></div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Join part end -->
</article><!-- #post-<?php the_ID(); ?> -->
