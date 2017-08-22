<center><form class="form-inline" method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
  <div class="form-group">
    <div class="input-group search-witdh-desktop" style="display: inline-flex;">
	  <input class="form-control" name="s" type="text" placeholder="جستجو" value="<?php echo esc_attr(get_search_query()); ?>" />
      <button class="input-group-addon icon-search" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
    </div>
  </div>
</form></center>