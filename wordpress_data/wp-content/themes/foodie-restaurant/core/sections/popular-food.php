<?php if ( get_theme_mod('foodie_restaurant_popular_food_section_enable') ) : ?>
	<div id="popular-food" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12">
					<?php if ( get_theme_mod('foodie_restaurant_popular_food_heading') ) : ?>
		          		<h2><?php echo esc_html(get_theme_mod('foodie_restaurant_popular_food_heading'));?></h2>
		          	<?php endif; ?>
		          	<div class="tab">
						<div class="tab-section">
							<ul class="my-4">
						        <?php 
									$foodie_restaurant_meal_post = get_theme_mod('foodie_restaurant_popular_food_tab_number', '');
									for ( $foodie_restaurant_i = 1; $foodie_restaurant_i <= $foodie_restaurant_meal_post; $foodie_restaurant_i++ ){ ?>
								 	<li class="product-tab align-self-center">
							            <button class="tablinks" onclick="foodie_restaurant_openCity(event, '<?php $foodie_restaurant_main_id = get_theme_mod('foodie_restaurant_popular_food_tabs_text'.$foodie_restaurant_i); $foodie_restaurant_tab_id = str_replace(' ', '-', $foodie_restaurant_main_id); echo $foodie_restaurant_tab_id; ?> ')">
						              		<?php echo esc_html(get_theme_mod('foodie_restaurant_popular_food_tabs_text'.$foodie_restaurant_i)); ?>
							            </button>
							        </li>
						        <?php }?>
						    </ul>
				        </div>
					</div>
				</div>
				<div class="col-lg-9 col-md-12 col-sm-12">
		 		    <?php for ( $foodie_restaurant_i = 1; $foodie_restaurant_i <= $foodie_restaurant_meal_post; $foodie_restaurant_i++ ){ ?>
				        <div id="<?php $foodie_restaurant_main_id = get_theme_mod('foodie_restaurant_popular_food_tabs_text'.$foodie_restaurant_i); $foodie_restaurant_tab_id = str_replace(' ', '-', $foodie_restaurant_main_id); echo $foodie_restaurant_tab_id; ?>" class="tabcontent mt-3">
					        <div class="owl-carousel">
					            <?php
					            $foodie_restaurant_catData = get_theme_mod('foodie_restaurant_popular_food_category'.$foodie_restaurant_i);
					            if ( class_exists( 'WooCommerce' ) ) {
					              $foodie_restaurant_args = array( 
					                'post_type' => 'product',
					                'posts_per_page' => 8,
					                'product_cat' => $foodie_restaurant_catData,
					                'order' => 'ASC'
					              );
					              $loop = new WP_Query( $foodie_restaurant_args );
					              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					                <div class="tab-product">
					                    <div class="product-image box">
					                    	<figure class="mb-0">
					                        	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
					                        	<?php if (   has_post_thumbnail() ) { ?>
						                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
						                        <?php }?>
					                        </figure>
					                        <div class="box-content intro-button ">
							                    <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?>
							                </div>
					                    </div>
					                    <div class="product-details p-3">
						                  	<h5 class="product-text"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
						                  	<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
						                  	<h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> mb-0"><?php echo $product->get_price_html(); ?></h6>
						                </div>
					                </div>
					              <?php endwhile; wp_reset_query(); ?>
					            <?php } ?>
					        </div>
				        </div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>