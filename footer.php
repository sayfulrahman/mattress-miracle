<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mattress_miracle
 */

?>
<div class="matmir-abc matmir-mod">
	<div class="matmir-abc matmir-m2d">
		<a class="matmir-abc cro"><img src="https://www.mattressmiracle.com/wp-content/themes/mattress-miracle/assets/img/Multiply.svg" width="28px" height="28px"></a>
		<div id="matmirData" class="matmir-abc matmir-bop"></div>
	</div>
</div>
	<!-- Footer part start -->
	<footer class="matmir-abc matmir-yui site-footer">
    <div class="matmir-abc matmir-yss">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xl-3 matmir-uuy">
            <div class="matmir-abc">
              <h3>Get evidence-based info:</h3>
              <div class="matmir-abc matmir-xhe">
                <input type="email" required="" class="" placeholder="Your email address" value="">
                <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Send.svg" alt=""></span>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="matmir-abc">
              <h3>About Mattress Miracle</h3>
			  <?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-2' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 1',
							'menu_class'      => 'matmir-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-2',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="matmir-abc">
              <h3>Resources</h3>
			  <?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-3' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 2',
							'menu_class'      => 'matmir-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-3',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3">
            <div class="matmir-abc">
              <h3>Topics</h3>
			  <?php
				/**
				 * Bottom Footer Menu
				 * wp_nav_menu
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				if ( has_nav_menu( 'menu-4' ) ) {
					wp_nav_menu(
						array(
							'menu'            => 'Footer 3',
							'menu_class'      => 'matmir-lmn',
							'menu_id'         => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'echo'            => true,
							'depth'           => 0,
							'walker'          => '',
							'theme_location'  => 'menu-4',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'item_spacing'    => '',
						)
					);
				};
				?>
            </div>
          </div>
          <div class="col-md-12 col-xl-3 matmir-ggg">
            <div class="matmir-abc">
              <h3>Get evidence-based info:</h3>
              <div class="matmir-abc matmir-xhe">
                <input type="email" required="" class="" placeholder="Your email address" value="">
                <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Email Send.svg" alt=""></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="matmir-abc matmir-btm">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Copyright © 2018-2023 Mattress Miracle, Inc. All Rights Reserved. An Independent Initiative of RedWater Media Network, Inc.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer part end -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
