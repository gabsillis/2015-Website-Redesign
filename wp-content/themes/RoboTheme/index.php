<<<<<<< HEAD
<?php get_header(); ?>
	<div class = "slideshow_container">
		<ul id ="slideshow">
			<li><img src="/wp-content/themes/RoboTheme/old_logo.gif" class="slideshow_invisible"/>
			<li><img src="/wp-content/themes/RoboTheme/test.png" class="slideshow_invisible"/>
		</ul>
		<div id="caption"></div>
	</div>
	<div class = "rss_feed">
	</div>
        <?php
            
        ?>
	<?php get_footer(); ?>
	</div>
	<script src="/wp-content/themes/RoboTheme/slideshow.js">start();</script>
	<?php
		function rsearch($folder, $pattern) {
			$dir = new RecursiveDirectoryIterator($folder);
			$nextDir = new RecursiveDirectoryIterator($dir);
			$ite = new RecursiveIteratorIterator($nextdir);
			$files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
			$fileList = array();
			foreach($files as $file) {
				$fileList = array_merge($fileList, $file);
			}
			return $fileList;
			$counter = 0;
			foreach($fileList as $file){
				// generate list items for slideshow ul
			}
		}
		rsearch('/wp-content/uploads', '/slideshow/');
	?>
    </body>
</html>
=======
<html>
    <?php
        /*
            Template Name: My Custom Page
        */
        /*
        IDEAS:
        Array to loop through and generate navigation
        */
    ?>
    <head>
        <?php
		
            
			
        ?>
        <style type="text/css"/>
            @import url("style.css");
        </style>
    </head>
    <body>
	<div class = "header_container">
		<div class="header"><h1 style="color:#001D55;">Team435</h1><h1 class="commodoreFont" style="color:#1F5C1F;"> Robodogs</h1></div>
			<nav>
				<ul>
					<li><a href="index.php"><img src="home-icon.svg" onerror="this.onerror=null; this.src='image.png'"><div></div></a></li>
					<li><a href="divisions.php"><img src="divisions-icon.svg"/></a></li>
					<li><a href="newmembers.php"><img src="http://www.devsourcecodex.com/images/advertisingexamples/200x200.png"/><div></div></a></li>
					<li><a href="members.php"><img src="http://www.devsourcecodex.com/images/advertisingexamples/200x200.png"/><div></div></a></li>
					<li><a href="robot.php"><img src="http://www.devsourcecodex.com/images/advertisingexamples/200x200.png"/><div></div></a></li>
					<li><a href="contact.php"><img src="http://www.devsourcecodex.com/images/advertisingexamples/200x200.png"/><div></div></a></li>
				</ul>
			</nav>
			<div class="under_accent" style="background-color: #a9a29c;"></div>
	</div>
	<div class = "slideshow_container">
		<img src="old_logo.gif" class="slideshow_visible"/>
		<div id="caption"></div>
	</div>
        <?php
            
        ?>
    </body>
</html>
>>>>>>> 21a17b996d8292c131566b86f306d582487ba4c0
