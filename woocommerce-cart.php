<?php
/*
Template Name: Cart
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
					

						<div id="main" class="tencol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title title-category"><?php the_title(); ?></h1>
									

								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer">
									

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

						<div id="sidebar" class="twocol last clearfix" role="main">
						<div id="menu_sidebar">
							 
								      <h1>Men</h1>
								      <nav role="navigation">
									      <?php bones_product_men(); ?>
								      </nav>
							     
								      <h1>Women</h1>
								      <nav role="navigation">
									      <?php bones_product_women(); ?>
								      </nav>
							 
						</div>
					</div>

				</div>

			</div>

<?php get_footer(); ?>
