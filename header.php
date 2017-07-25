<!DOCTYPE html>
<html lang="fa"  dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); ?></title>

<!-- Bootstrap -->
<link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/css/bootstrap-rtl.css" rel="stylesheet">
<!-- Awesome -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">
<!-- MyCSS -->
<link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
if (is_singular() && get_option('thread_comments')) {
  wp_enqueue_script('comment-reply');
}
wp_head();
?>


</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">

<div class="navbar-header">
<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
<span id="res-menu-btn">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</span>
<span style="color: #FFF;">فهرست</span>
</button>
<span class="navbar-brand" id="brand"><img id="logo" src="<?php bloginfo('template_url');?>/img/logo.png" alt="لوگو" title="لوگو" />
<a href="<?php bloginfo('url');?>">انجمن مهندسی برق یادگار</a></span>
</div>

<div class="collapse navbar-collapse" id="navbar1">
<ul class="nav navbar-nav">
	<li><a href="<?php bloginfo('url');?>"><i class="fa fa-home icon-menu" aria-hidden="true"></i> خانه</a></li>
	<li><a href="<?php bloginfo('url');?>/blog"><i class="fa fa-star icon-menu" aria-hidden="true"></i> بلاگ</a></li>
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-newspaper-o icon-menu" aria-hidden="true"></i> اخبار <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php bloginfo('url');?>/category/news/%d8%a7%d8%ae%d8%a8%d8%a7%d8%b1-%d8%a7%d9%86%d8%ac%d9%85%d9%86/">اخبار انجمن</a></li>
            <li><a href="<?php bloginfo('url');?>/category/news/%d8%a7%d8%ae%d8%a8%d8%a7%d8%b1-%d8%af%d8%a7%d9%86%d8%b4%da%af%d8%a7%d9%87/">اخبار دانشگاه</a></li>
            <li><a href="<?php bloginfo('url');?>/category/news/%d8%a7%d8%ae%d8%a8%d8%a7%d8%b1-%da%af%d8%b1%d9%88%d9%87-%d8%a8%d8%b1%d9%82/">اخبار گروه برق</a></li>
          </ul>
    </li>
	<li><a href="<?php bloginfo('url');?>/#"><i class="fa fa-photo icon-menu" aria-hidden="true"></i> گالری تصاویر </a></li>
    <li><a href="<?php bloginfo('url');?>/telegram" title="آدرس کانال‌ها و گروه‌های درسی"><i class="fa fa-telegram icon-menu" aria-hidden="true"></i> تلگرام </a></li>
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-university icon-menu" aria-hidden="true"></i> انجمن علمی <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php bloginfo('url');?>/%d8%af%d8%b1%d8%a8%d8%a7%d8%b1%d9%87%e2%80%8c%db%8c-%d9%85%d8%a7/"><i class="fa fa-id-card icon-menu" aria-hidden="true"></i> درباره ما </a></li>
            <li><a href="<?php bloginfo('url');?>/%d8%aa%d9%85%d8%a7%d8%b3-%d8%a8%d8%a7%d9%85%d8%a7/"><i class="fa fa-envelope icon-menu" aria-hidden="true"></i> تماس با ما</a></li>
            <li><a href="<?php bloginfo('url');?>/%d8%b9%d8%b6%d9%88%db%8c%d8%aa/"><i class="fa fa-user-plus icon-menu" aria-hidden="true"></i> عضویت </a></li>
          </ul>
    </li>
</ul>
</div>


</div>
</nav>
