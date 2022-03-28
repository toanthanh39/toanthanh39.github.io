<?php
/*
 Template Name: Event-page
 */
get_header();

?>
  <?php get_template_part('onload') ?>
<main id="primary" class="site-main">
	
<div class="main-content ">
		<div class="bg-event">
			<!-- <div class="content-container">
			</div> -->
			<div class="heading-title">
				<img id="event" src="<?php echo get_template_directory_uri();?>/image/Sự kiện nổi bật.png">
			</div>
				<div class="main_interaction-event">
					
					
					<div class="featured-wrap">
						<div class="featured-pre">
							<span><img src="<?php echo get_template_directory_uri();?>/image/pre.png" alt=""></span>
						</div>
							<!-- <div class="post-carousel owl-carousel"> -->
					<!-- Query get posts by categories -->
						<div id="ct" class="featured-post-container">
								<?php $args=array(
									
									'order'=>'DESC',
									'post_status'=>'publish',
									'showposts'=>'8',
									'post_type' =>'post',
									'cat'=>5,
									'order'=>'ASC'

								); ?>
								<?php $GetPostsQuery = new WP_query($args);
								//  $GetPostsQuery->query('post_status=publish&showposts=8&post_type=post&cat=5'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($GetPostsQuery->have_posts()) : $GetPostsQuery->the_post($args); ?>
								<?php $category = get_the_category(); ?>
								<!-- style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_id(), 'full', array( 'class' =>'large') ); ?>);" -->
								<div class="featured-post"  >
									<div class="featured-thumbnail" >
										<img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'full', array( 'class' =>'large') ); ?>" alt="">
									</div>
									<div class="post-info">
										<!-- <a href="#" class="cat-name tt-u"> <?php echo $category[0]->cat_name;?></a> -->
										<div id="post-title">

											<?php the_title(); ?>
										</div>
										<div class="post-excerp">
											
											<?php the_excerpt(); ?>
		
										<div class="post-date"><img src="<?php echo get_template_directory_uri();?>/image/date-icon.png" alt=""></div>
										</div>
										<div class="post-link">
											<a href="<?php the_permalink();?>">Xem chi tiết</a> 
										</div>
										
									</div>
									
								</div>
							
				
								<?php endwhile; wp_reset_postdata(); ?>
								<!-- Query get posts by categories -->
							<!-- </div>		 -->
						</div>
						<div class="featured-next">
							<span><img src="<?php echo get_template_directory_uri();?>/image/next.png" alt=""></span>
						</div>

					</div>	
				</div>
		</div>
        
    </div>
    

</main><!-- #main -->
