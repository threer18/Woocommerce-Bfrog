<?php
/*
Template Name: Category Woocommerce
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
					<div id="sidebar" class="twocol first clearfix" role="main">
						<div id="menu_sidebar">
							 <?php if (have_posts()) :  ?>
								<?php  if(in_category('men') || has_term('men','menu_product')):?>
								      <h1>Men</h1>
								      <nav role="navigation">
									      <?php bones_product_men(); ?>
								      </nav>
							      <?php elseif ( in_category('women') || has_term('women','menu_product') ) :?>
								      <h1>Women</h1>
								      <nav role="navigation">
									      <?php bones_product_women(); ?>
								      </nav>
							      <?php endif; ?>
							<?php endif; ?>
						</div>
					</div>

						<div id="main" class="tencol last clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title title-category"><?php the_title(); ?></h1>
									

								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<div id="additional" class="with_product">
                                                                                    <ul>
                                                                                        <?php
                                                                                           $name_cat=types_render_field( "category-product", array('raw' => 'true'));
                                                                                        
                                                                                            $args = array( 'numberposts' => -1,
                                                                                                           'order'=> ASC,
                                                                                                           'orderby'=> date,
                                                                                                           'suppress_filters'=> 0,
                                                                                                           'post_type'=> 'product',
                                                                                                           'the_size'=> 'medium',
                                                                                                           'product_cat'=> $name_cat,
                                                                                                           );
                                                                                            $postslist = get_posts($args);
                                                                                            foreach ($postslist as $post) :
                                                                                                    setup_postdata($post);
                                                                                            ?>
                                                                                            <li> 
                                                                                                    <div id="header_acce">
                                                                                                            <div id="tamanoima">
                                                                                                                <a href="<?php the_permalink() ?>" >
                                                                                                                    <span><center>
                                                                                                                                    
                                                                                                                                     <?php
                                                                                                                                        $thecolor = get_the_term_list( $post->ID, 'the_color', '', ', ', '' );
                                                                                                                                     $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'bus-ima' );
                                                                                                                                     if ( has_post_thumbnail()) : ?>
                                                                                                                                    <div id="bus-ima">
                                                                                                                                     <?php  the_post_thumbnail('creation-330f'); ?>
                                                                                                                                    </div>
                                                                                                                                 
                                                                                                                                  <?php endif; ?>
                                                                                                                          
                                                                                                                            <center>
                                                                                                                    </span>
                                                                                                                     </a>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                    <div id="middle_acce">
                                                                                                        <div id="product_size">
														<?php
														$firstcategory = get_the_term_list( $post->ID, 'product_cat', '', ', ', '' );
														echo related_size('the_color');
														
														?>
													</div>
                                                                                                            <?php
                                                                                                                if (!empty($thecolor)) echo '<h2>', strip_tags($thecolor) ,'</h2>';
                                                                                                            ?>
                                                                                                    <h4>$<?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?></h4>
                                                                                                    </div>
                                                                                                   
                                                                                            </li>
                                                                                            <?php endforeach; ?>
                                                                                        </ul>
                                                                                </div>
								</section>

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

								

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						

				</div>

			</div>

<?php get_footer(); ?>
