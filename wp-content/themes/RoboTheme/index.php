<?php get_header(); ?>
<?php
	$url = $_SERVER['REQUEST_URI'];
	if (preg_match("/divisions/", $url)){
		require("divisions.php");
	}
	elseif (preg_match("/robot_designs/", $url)){
		require("robot_designs.php");
	}
	elseif (preg_match("/about_us/", $url)){
		require("about_us.php");
	}
	elseif (preg_match("/members/", $url)){
		require("members.php");
	}
	elseif (preg_match("/sponsors/", $url)){
		require("sponsors.php");
	}
	else{
		require("home.php");
	}		
?>
<?php get_footer(); ?>
