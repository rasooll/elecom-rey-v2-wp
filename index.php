<?php get_header();?> 
<div id="nav-fix-clear"></div>

<div class="container">

	<?php include 'top-sidebar.php';?> 


	<div class="row" >
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"> <!-- Right Sidebar Desktop-->

			<div id="sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?></div>

		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> <!-- Content area -->
		
		<?php while(have_posts()) : the_post();?> 
		
			<div class="content-area">
				<div class="content-title"><i class="fa fa-edit post-icon" aria-hidden="true"></i><h3>  
				<a href="<?php the_permalink();?>"><?php the_title_attribute();?></a> </h3></div>
				<div class="content-text">
					<?php the_content(); ?>
				</div>

				<div class="content-bottom">
					<div class="row ">
						<div class="col-lg-5 col-md-5 col-sm-4 col-xs-8"><i class="fa fa-user icon-menu" aria-hidden="true"></i> نویسنده:  <?php the_author();?></div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="fa fa-calendar icon-menu" aria-hidden="true"></i>
						 <?php the_time('j F Y');?>  </div>
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"><div class="readmore"><a href="<?php the_permalink();?>"><i class="fa fa-plus icon-menu" aria-hidden="true"></i> ادامه مطلب</a></div></div>
					</div>
				</div>

			</div>

		 <?php endwhile;?> 

		 <div class="navigation"><p><?php posts_nav_link(); ?></p></div>

			<!-- Bottom sidebar -->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار پایین') ) : ?><?php endif; ?>

		</div>

		<div class="hidden-lg hidden-md col-sm-12 col-xs-12"> <!-- Right Sidebar Responsive -->

			<div id="sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?>
			</div>

		</div>

	</div>
<?php get_footer();?> 