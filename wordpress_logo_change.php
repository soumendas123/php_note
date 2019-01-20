<?php 
function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
background-image: url(http://localhost/wordpress/wp-content/themes/twentyseventeen/assets/images/wheel.png);  //Add your own logo image in this url 
padding-bottom: 30px;
    width: 111px;
	height: 111px;
	background-size: 99px;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
?>

////////////////////////////////////////////////////
mapping , normalization , bcnf,
If there is a post and click on it and the go to single.php

front page -->home page--->index page
<?php get_header(); ?>
<?php get_footer(); ?>
<?php get_sidebar(); ?>
<?php wp_footer(); ?>
<?php wp_head(); ?>
<?php the_archive_title(); ?>
<?php the_archive_description(); ?>
<?php echo bloginfo('name'); ?>
<?php echo bloginfo('description'); ?>
<?php echo get_bloginfo('template-url'); ?>
<?php comments_template(); ?>
<?php wp_enqueue_style (); ?>
<?php the_time (); ?>
<?php the_auther(); ?>
<?php the_category (); ?>
<?php get_calender (); ?>
<?php wp_meta (); ?>
<?php wp_register (); ?>
<?php wp_links_list (); ?>
<?php wp_get_archives (); ?>
<?php wp_logout (); ?>
<?php get_search_form (); ?>
<?php get_category_link (); ?>
<?php the_permalink (); ?>
<?php echo get_the_content (); ?>
<?php echo get_the_title (); ?>
<?php echo get_template_part(); ?>
<?php echo get_author_post_url(get_the_author_meta('ID'));
/*tempalte-name: about.php */

///////////category loop////////
<?php
$categories=get_the_category();
$separator=",";
$catoption='';
foreach($categories as $category)
{
	$catoption.=$category->cat_name.$separator;
}

?>

