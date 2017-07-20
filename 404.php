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
				
			<div class="content-area">

				<p><img src="http://elecom-rey.ir/wp-content/uploads/2017/07/404.jpg" alt="صفحه پیدا نشد" /></p>
				<center><a href="<?php bloginfo('url');?>"><button type="button" class="btn btn-default">بازگشت به صفحه اصلی</button></a></center>

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