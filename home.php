	<div id = "holder">
	<div class = "slideshow_container">
		<ul class="rslides">
			<li><img src="/wp-content/themes/RoboTheme/slideshow_images/1.png"/></li>
			<li><img src="/wp-content/themes/RoboTheme/slideshow_images/2.jpg"/></li>
			<li><img src="/wp-content/themes/RoboTheme/slideshow_images/3.jpg"/></li>
		</ul>
		<div id="caption"></div>
	</div>
	<div class = "rss_feed">
	</div>
	<div class = "sponsors_column">
	<div id="sponsor_title_wrapper"><h1>Our Esteemed Sponsors</h1></div>
	<img src="/wp-content/themes/RoboTheme/google.gif"  onError="this.onerror=null;this.src='/wordpress/wp-content/themes/RoboTheme/google.gif';"/>
	</div>
	</div>
        <?php
            
        ?>
	</div>
	<!-- <script src="/wp-content/themes/RoboTheme/slideshow.js">start();</script> -->
	<script src="/wp-content/themes/RoboTheme/responsiveslides.min.js"></script>
	<script>
	$(function() {
	   $(".rslides").responsiveSlides({
		pause:true,
		});
	});
</script>
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
		//rsearch('/wp-content/uploads', '/slideshow/'); FATAL ERROR, FILE NOT FOUND
	?>