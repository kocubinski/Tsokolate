<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" value="<?php the_search_query(); ?>" name="s" class="s" />
<input type="submit" class="searchsubmit" value="Search" />
</div>
</form>