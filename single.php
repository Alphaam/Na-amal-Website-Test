<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article class="singlePost w-75 m-auto text-center" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!-- post title -->
						<h1 class="postTitle">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->

						<?php the_content(); // Dynamic Content ?>

						<h1 class="shareOnSocialMedia">Share on the Social Media</h1>
						<ul class="list-unstyled marginTop50 text-center socialLinks">
							<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/BlogPostPage/facebook.svg" alt="">Facebook</a></li>
							<li><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/BlogPostPage/twitter.svg" alt="">Twitter</a></li>
							<li><a target="_blank" href="https://www.linkedin.com/shareArticle/?mini=true&url=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/BlogPostPage/linkedIn.svg" alt="">LinkedIn</a></li>
							<li><a target="_blank" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/BlogPostPage/whatsapp.svg" alt="">Whatsapp</a></li>
						</ul>
					</article>
					<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

					<?php endif; ?>				
				</div>
			</div>
		</div>
	</section><!-- /section -->
	</main>

<?php get_footer(); ?>
