<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> <!-- Slide Show -->
            <?php include 'owl-carousel.php';?> 
		</div>

		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"> <!-- News widget -->
			<div id="news">
				<div id="news-title"><i class="fa fa-newspaper-o widget-icon" aria-hidden="true"></i><h4> آخرین اخبار</h4></div>
				<div id="news-content">
					<div id="sidebar"><ul>

						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;     query_posts('showposts=' . 9 . '&paged=' . $paged . '&category_name=' . "news");?>         <?php while ( have_posts() ) : the_post(); ?>
						<li><span class="news-date"> <?php the_time('j F Y');?> </span> - <a href="<?php the_permalink();?>"> 
						<?php the_title_attribute();?> </a></li>
						<?php endwhile;?>     <?php wp_reset_query(); ?> 

					</ul></div>
				</div>

			</div>
		</div>
</div>