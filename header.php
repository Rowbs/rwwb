<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rowbz</title>
    <link href="https://twitter.com/andrew_rowberry" rel="me" />
	<?php wp_head(); ?>
  </head>
  <body>
   
	<header class="top-header">
<?php 
 if(function_exists('edge_suite_view')){
            echo edge_suite_view();
          }
           
        ?>
			</header>
    

         <?php
if  (is_home() || is_page('home')){
  $args = array(
  'menu' => 'home-menu',
  'container' => 'nav',
    'container_class' => 'nav-collapse'
            );

  wp_nav_menu($args);
}else{
 
  $args = array(
  'menu' => 'main-menu',
  'container' => 'nav',
    'container_class' => 'nav-collapse'
            );

  wp_nav_menu($args);
}

?>
	
<?php include("borderline.svg"); ?>

		