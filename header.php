<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<div align="center">
	<div id="wrap">
    	<div id="header">
       	  <div id="top">
          <form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
		  <div>
          <input type="text" value="<?php the_search_query(); ?>" name="s" class="s" />
		  <input name="" type="image" value="Search" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.gif" alt="Search" />
		  </div>
		  </form>
          </div>
            <div id="title">
          		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
            </div>
            <div id="navigation">
              <ul>
   	    <?php wp_list_pages('title_li'); ?>
              </ul>
            </div>
        </div><!-- end of header -->