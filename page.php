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

			</div>

		 <?php endwhile;?> 

			<!-- Bottom sidebar -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار پایین') ) : ?><?php endif; ?>

		</div>

		<div class="hidden-lg hidden-md col-sm-12 col-xs-12"> <!-- Right Sidebar Responsive -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?>

		</div>

	</div>
<?php get_footer();?> 