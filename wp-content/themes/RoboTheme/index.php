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