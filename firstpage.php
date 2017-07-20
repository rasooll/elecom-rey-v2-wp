<?php /* Template Name: First Page */ ?>
<?php get_header();?> 
<div id="nav-fix-clear"></div>

<div class="container">

	<?php include 'top-sidebar.php';?> 


	<div class="row" >
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs"> <!-- Right Sidebar Desktop-->

			<div id="sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?></div>

		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> <!-- Content area -->

		<div class="alert alert-info alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<i class="fa fa-telegram alert-telegram" aria-hidden="true"></i><a href="http://telegram.me/iausra" title="عضویت در کانال تلگرام"> اگر در کانال تلگرام ما عضو نیستید هم اکنون می‌توانید عضو شوید !!!</a>
		</div>
		
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
			<div id="lastpost" class ="block-area justify">
					<!--<div class="block-title"><i class="fa fa-chevron-left widget-icon" aria-hidden="true"></i><h4>
						آخرین مطالب
					</h4></div> -->
<div class="last-post-tab">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">آخرین مطالب</a></li>
    <li role="presentation"><a href="#project" aria-controls="project" role="tab" data-toggle="tab">پروژه ها</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;     query_posts('showposts=' . 7 . '&paged=' . $paged . '&category_name=' . "training,technology,download,مقاله");?>
					<?php while(have_posts()) : the_post();?> 
				<div class="last-post">
					<a href="<?php the_permalink();?>"><img class="last-img" width="150" height="150" src="<?php echo get_image() ?>" /></a>
					<div class="last-title">
						<a href="<?php the_permalink();?>"><?php the_title_attribute();?></a> - <span style="color: #999"><?php the_time('j F Y');?></span>
					</div>
					
					<div class="last-text">
						<?php the_content_rss('', TRUE, '', 120); ?><br />
						
					</div>
				</div>
			<?php endwhile;?> <?php wp_reset_query(); ?>
			<div class="gotoblog">
				<i class="fa fa-plus icon-menu last-readmore" aria-hidden="true"></i> <a href="blog" >دیدن مطالب بیشتر</a>
			</div>
</div>
    <div role="tabpanel" class="tab-pane" id="project">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;     query_posts('showposts=' . 7 . '&paged=' . $paged . '&category_name=' . "project");?>
					<?php while(have_posts()) : the_post();?> 
				<div class="last-post">
					<a href="<?php the_permalink();?>"><img class="last-img" width="150" height="150" src="<?php echo get_image() ?>" /></a>
					<div class="last-title">
						<a href="<?php the_permalink();?>"><?php the_title_attribute();?></a> - <span style="color: #999"><?php the_time('j F Y');?></span>
					</div>
					
					<div class="last-text">
						<?php the_content_rss('', TRUE, '', 120); ?><br />
						
					</div>
				</div>
			<?php endwhile;?> <?php wp_reset_query(); ?>
			<div class="gotoblog">
				<i class="fa fa-plus icon-menu last-readmore" aria-hidden="true"></i> <a href="/category/project">دیدن پروژه های بیشتر</a>
			</div>
    </div>
  </div>

</div>
			</div>


			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار پایین') ) : ?><?php endif; ?>

	</div>

		<div class="hidden-lg hidden-md col-sm-12 col-xs-12"> <!-- Right Sidebar Responsive -->

			<div id="sidebar">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('سایدبار سمت راست') ) : ?><?php endif; ?>
			</div>

		</div>

	</div>
<?php get_footer();?> 