<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
<meta name="description" content="<?php bloginfo('description'); ?>" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="alternate" type="aplication/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="aplication/atom+xml" title="Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_header(); ?>
<!--#header -->

<ul><?php wp_list_pages('sort column=menu_order'); ?> </ul>
<?php wp_page_menu(); ?>
<ul><?php wp_list_categories(); ?> </ul>
<div id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h3 class="date"><?php the_date(); ?></h3>
	<h2 id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content("Continue reading..."); ?>
    <?php wp-link_pages(); ?>
    <p class="postmeta">Posted on <?php the_time(get_option("date_format")); ?> at <?php the_time(); ?></p>
    <div class="comentblock">
    	<?php comments_template(); ?>
    </div><!--commentblock-->
     <?php endwhile; ?>
    <div class="navigation">
    	<div class="alignleft"><?php posts_nav_link(); ?></div>
        <div class="clear"><!-- --></div>
    </div><!-- .navigation -->
    	<?php else: ?>
        <h2>Not Found</h2>
        <p>The posts you were looking for could not be found.</p>
        <?php endif; ?>
</div> <!-- #main -->

<div id="sidebar">
<?php if ( !dynamic_sidebar('Sidebar')) : endif; ?>
</div> <!-- #sidebar -->

<div id="footer">
	<p>&copy; <?php echo date('Y '); bloginfo('name'); ?></p>
</div> <!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>
