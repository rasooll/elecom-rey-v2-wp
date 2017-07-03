<div class="row">
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> <!-- Slide Show -->
		<div id="slideshow">
			
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="<?php bloginfo('template_url');?>/slides/slide1.jpg" alt="...">
				      <div class="carousel-caption">
			        	نمای ورودی دانشگاه یادگار امام - شهرری
			      	  </div>
				    </div>

					<div class="item">
			    		<img src="<?php bloginfo('template_url');?>/slides/slide3.jpg" alt="...">
			    		<div class="carousel-caption">
			        		بازدید از نیروگاه برق بعثت
			      	  	</div>
			    	</div>

			    	<div class="item">
			    		<img src="<?php bloginfo('template_url');?>/slides/slide2.jpg" alt="...">
			    		<div class="carousel-caption">
			        		بازدید از نیروگاه برق بعثت
			      	  	</div>
			    	</div>

			  </div>

				<!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">قبلی</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">بعدی</span>
			  </a>
			</div><!-- end slide -->

		</div>
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